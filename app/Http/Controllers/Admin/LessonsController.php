<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lesson;
use App\Models\Training;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use function abort;
use function redirect;
use function view;

class LessonsController extends Controller {
    public function index($training_id) {
        $lessons = Lesson::where('training_id', $training_id)->get();
        $training = Training::find($training_id);
        return view('admin.Lessons.lessons', ['lessons' => $lessons, 'training' => $training]);
    }

    public function create($training_id) {
        $training = Training::find($training_id);

        return view('admin.Lessons.add_lesson', compact('training'));
    }

    public function store(Request $request, $training_id) {
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'video' => 'required|file',
        ]);

        if ($request->has('image')) {
            $fileName = $this->uploadImage($request->image);
        }

        if ($request->has('video')) {
            $videoName = $this->uploadImage($request->video);
        }

        $request = $request->except('_token', 'image', 'video');

        Lesson::create($request + [
            'image' => $fileName ?? null,
            'video' => $videoName ?? null,
            'training_id' => $training_id,
        ]);

        return redirect()->route('admin.lessons', ['training_id' => $training_id])->with(['status' => 'success', 'message' => 'Lesson Added Successfully']);
    }

    public function edit($training_id, $id){
        $lesson = Lesson::find($id);
        $training = Training::find($training_id);

        return view('admin.Lessons.edit_lesson', compact('lesson', 'training'));
    }

    public function update(Request $request, $training_id, $id) {
        $lesson = Lesson::find($id);

        if (!$lesson) {
            abort(404);
        }

        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'video' => 'required|file',
        ]);

        if ($request->has('image')) {
            $fileName = $this->uploadImage($request->image);
        }

        if ($request->has('video')) {
            $videoName = $this->uploadImage($request->video);
        }

        $request = $request->except('_token', 'image', 'video');

        $lesson->update($request + [
            'image' => $fileName ?? $lesson->image,
            'video' => $videoName ?? $lesson->video,
            'training_id' => $training_id,
        ]);

        return redirect()->route('admin.lessons')->with(['status' => 'success', 'message' => 'Lesson Edited Successfully']);
    }

    public function destroy($training_id, $id) {
        $lesson = Lesson::find($id);

        if (!$lesson) {
            abort(404);
        }
        $lesson->delete();

        return redirect()->route('admin.lessons')->with(['status' => 'success', 'message' => 'Lesson Deleted Successfully']);
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
