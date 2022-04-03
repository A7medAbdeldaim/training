<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Trainer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use function abort;
use function redirect;
use function view;

class TrainersController extends Controller {
    public function index() {
        $trainers = Trainer::all();
        return view('admin.Trainers.trainers', ['trainers' => $trainers]);
    }

    public function create() {
        return view('admin.Trainers.add_trainer');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|string',
            'lat' => 'required|string',
            'lng' => 'required|string',
            'email' => 'required|string|unique:trainers,email',
            'password' => 'required|string|max:255|confirmed',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        if ($request->has('image')) {
            $fileName = $this->uploadImage($request->image);
        }

        $pass = Hash::make($request->get('password'));
        $request = $request->except('password', '_token', 'image');

        Trainer::create($request + [
                'image' => ($fileName ?? ''),
                'password' => $pass
            ]);

        return redirect()->route('admin.trainers')->with(['status' => 'success', 'message' => 'Trainer Added Successfully']);
    }

    public function edit($id){
        $trainer = Trainer::find($id);
        return view('admin.Trainers.edit_trainer', compact('trainer'));
    }

    public function update(Request $request, $id) {
        $trainer = Trainer::find($id);

        if (!$trainer) {
            abort(404);
        }

        $request->validate([
            'name' => 'required|string',
            'lat' => 'required|string',
            'lng' => 'required|string',
            'email' => 'required|string|unique:trainers,email,' . $trainer->id,
            'password' => 'required|string|max:255|confirmed',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        if ($request->has('image')) {
            $fileName = $this->uploadImage($request->image);
        }

        $pass = Hash::make($request->get('password'));
        $request = $request->except('password', '_token', 'image');

        $trainer->update($request + [
                'image' => ($fileName ?? $trainer->image),
                'password' => $pass
            ]);

        return redirect()->route('admin.trainers')->with(['status' => 'success', 'message' => 'Trainer Edited Successfully']);
    }

    public function destroy($id) {
        $trainer = Trainer::find($id);

        if (!$trainer) {
            abort(404);
        }
        $trainer->delete();

        return redirect()->route('admin.trainers')->with(['status' => 'success', 'message' => 'Trainer Deleted Successfully']);
    }

    public function uploadImage($file): string
    {
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
