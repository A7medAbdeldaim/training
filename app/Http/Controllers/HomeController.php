<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use App\Models\Book;
use App\Models\Conversation;
use App\Models\Lesson;
use App\Models\Library;
use App\Models\TraineeMessage;
use App\Models\Trainer;
use App\Models\TrainerMessage;
use App\Models\Training;
use App\Models\TrainingReviews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $trainers = Trainer::all();
        $trainings = Training::all();
        return view('home', compact('trainers', 'trainings'));
    }

    public function about()
    {
        return view('about');
    }

    public function search(Request $request)
    {
        $trainers = Trainer::get();

        return view('search', compact('trainers'));
    }

    public function profile()
    {
        return view('profile');
    }

    public function profile_post(Request $request)
    {
        $user = auth('trainers')->user();
        if ($request->has('name')) {
            $user->name = $request->get('name');
        }

        if ($request->has('email')) {
            $user->email = $request->get('email');
        }

        if ($request->has('phone')) {
            $user->phone = $request->get('phone');
        }

        if ($request->has('address')) {
            $user->address = $request->get('address');
        }

        if ($request->has('bio')) {
            $user->bio = $request->get('bio');
        }

        if ($request->has('password')) {
            $user->password = Hash::make($request->get('password'));
        }

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store('user', ['disk' => 'public']);
            $user->image = $path;
        }

        if ($request->hasFile('video')) {
            $file = $request->file('video');
            $path = $file->store('user', ['disk' => 'public']);
            $user->video = $path;
        }

        $user->save();
        return redirect()->back();
    }

    public function category($category_id, $type)
    {
        if ($type == 'car') {
            $category = Category::where('id', $category_id)->where('type', 1)->first();
            $data = Car::where('category_id', $category_id)->get();
        } elseif ($type == 'bike') {
            $category = Category::where('id', $category_id)->where('type', 0)->first();
            $data = Bike::where('category_id', $category_id)->get();
        }
        return view('category', compact('category', 'data', 'type'));
    }

    public function contact(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        return Mail::to("email@email.com")->send(new Contact($request->all()));
    }

    public function contact_us(Request $request)
    {
        return view('contact');
    }

    public function trainer_show($trainer_id)
    {
        $trainer = Trainer::find($trainer_id);

        return view('trainer', compact('trainer'));
    }

    public function training_show($training_id)
    {
        $course = Training::find($training_id);

        return view('course', compact('course'));
    }

    public function lesson_show($lesson_id)
    {
        $lesson = Lesson::find($lesson_id);

        return view('lesson', compact('lesson'));
    }

    public function post_review(Request $request, $training_id)
    {
        $user = auth('trainees')->user();

        $request->validate([
            'review' => 'required|integer',
            'body' => 'required|string',
        ]);

        $request = $request->except('_token');

        TrainingReviews::create($request + [
                'training_id' => $training_id,
                'trainee_id' => $user->id
            ]);
        $course = Training::find($training_id);
        $course->rating = TrainingReviews::where('training_id', $training_id)->avg('review');
        $course->save();
        $course->refresh();

        return view('course', compact('course'));
    }

    public function chat()
    {
        $conversation_id = request()->get('conversation_id') ?? null;

        $user = auth('trainees')->user();
        $conversations = Conversation::whereHas('trainee_messages', function($q) use ($user) {
            $q->where('trainee_id', $user->id);
        })->get();

        if (!$conversation_id) {
            $conversation_id = $conversations->first()->id ?? null;
        }
        $messages = TraineeMessage::where('trainee_id',  $user->id)->where('conversation_id', $conversation_id)->get();
        if ($messages->count()) {
            $trainer_messages = TrainerMessage::where('conversation_id', $conversation_id)->get();

            $messages = $messages->merge($trainer_messages)->sortBy('created_at');
        }
        $conversation = Conversation::find($conversation_id);
        if ($conversation) {
            $trainer_id = $conversation->trainer_id;
        } else {
            $trainer_id = 0;
        }

        return view('chat', compact('conversations', 'messages', 'trainer_id'));
    }

    public function chatTrainer()
    {
        $conversation_id = request()->get('conversation_id') ?? null;

        $user = auth('trainers')->user();
        $conversations = Conversation::where('trainer_id', $user->id)->get();

        if (!$conversation_id) {
            $conversation_id = $conversations->first()->id ?? null;
        }
        $messages = TraineeMessage::where('conversation_id',  $conversation_id)->get();
        if ($messages->count()) {
            $trainee_messages = TrainerMessage::where('conversation_id', $conversation_id)->get();

            $messages = $messages->merge($trainee_messages)->sortBy('created_at');
        }
        $conversation = Conversation::find($conversation_id);
        if ($conversation) {
            $trainee_id = $conversation->trainee_id;
        } else {
            $trainee_id = 0;
        }

        return view('chatTrainer', compact('conversations', 'messages', 'trainee_id'));
    }

    public function send_message($target_id, Request $request)
    {
        $request->validate([
            'message' => 'required|string',
        ]);

        if (auth('trainees')->check()) {
            $user = auth('trainees')->user();
            $conversation = Conversation::where([
                'trainee_id' => $user->id,
                'trainer_id' => $target_id,
            ])->first();

            if (!$conversation) {
                $conversation = Conversation::create([
                    'trainee_id' => $user->id,
                    'trainer_id' => $target_id,
                ]);
            }
            $message = TraineeMessage::create([
                'trainee_id' => $user->id,
                'conversation_id' => $conversation->id,
                'message' => $request->message,
            ]);
            return redirect()->route('chat');
        } else {
            $user = auth('trainers')->user();
            $conversation = Conversation::where([
                'trainer_id' => $user->id,
                'trainee_id' => $target_id,
            ])->first();

            if (!$conversation) {
                $conversation = Conversation::create([
                    'trainer_id' => $user->id,
                    'trainee_id' => $target_id,
                ]);
            }
            $message = TrainerMessage::create([
                'trainer_id' => $user->id,
                'conversation_id' => $conversation->id,
                'message' => $request->message,
            ]);
            return redirect()->route('chatTrainer');
        }


    }
}
