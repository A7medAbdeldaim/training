<?php

namespace App\Http\Controllers\Trainer;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Trainer;
use App\Models\Training;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use function abort;
use function redirect;
use function view;

class TrainingsController extends Controller {
    public function index() {
        $trainings = Training::where('trainer_id', auth('trainers')->user()->id)->get();
        return view('trainer.Trainings.trainings', ['trainings' => $trainings]);
    }

    public function create() {
        $categories = Category::all();
        $trainers = Trainer::where('id', auth('trainers')->user()->id)->get();

        return view('trainer.Trainings.add_training', compact('categories', 'trainers'));
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'trainer_id' => 'required|numeric',
            'category_id' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        if ($request->has('image')) {
            $fileName = $this->uploadImage($request->image);
        }

        $request = $request->except('_token', 'image');

        Training::create($request + ['image' => $fileName ?? null]);

        return redirect()->route('trainers.trainings')->with(['status' => 'success', 'message' => 'Training Added Successfully']);
    }

    public function edit($id){
        $training = Training::find($id);
        $categories = Category::all();
        $trainers = Trainer::where('id', auth('trainers')->user()->id)->get();

        return view('trainer.Trainings.edit_training', compact('training', 'categories', 'trainers'));
    }

    public function update(Request $request, $id) {
        $training = Training::find($id);

        if (!$training) {
            abort(404);
        }

        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'trainer_id' => 'required|numeric',
            'category_id' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        if ($request->has('image')) {
            $fileName = $this->uploadImage($request->image);
        }

        $request = $request->except('_token', 'image');

        $training->update($request + ['image' => $fileName ?? $training->image]);

        return redirect()->route('trainers.trainings')->with(['status' => 'success', 'message' => 'Training Edited Successfully']);
    }

    public function destroy($id) {
        $training = Training::find($id);

        if (!$training) {
            abort(404);
        }
        $training->delete();

        return redirect()->route('trainers.trainings')->with(['status' => 'success', 'message' => 'Training Deleted Successfully']);
    }

    public function uploadImage($file) {
        $extension = '.' . $file->extension();
        $fileName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $fileName = str_replace(' ', '-', $fileName);
        $fileName = str_replace('_', '-', $fileName);
        $fileName = str_replace('+', '-', $fileName);

        $fileName .= '-' . base_convert(microtime(true) * 10000, 10, 32);

        $fileName .= $extension != '.' ? $extension : '';
        Storage::putFileAs('/', $file, $fileName);

        return $fileName;
    }
}
