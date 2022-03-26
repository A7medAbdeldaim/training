<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Trainee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use function abort;
use function redirect;
use function view;

class TraineesController extends Controller {
    public function index() {
        $trainees = Trainee::all();
        return view('admin.Trainees.trainees', ['trainees' => $trainees]);
    }

    public function create() {
        return view('admin.Trainees.add_trainee');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|unique:trainees,email',
            'password' => 'required|string|max:255|confirmed',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        if ($request->has('image')) {
            $fileName = $this->uploadImage($request->image);
        }

        $pass = Hash::make($request->get('password'));
        $request = $request->except('password', '_token', 'image');

         Trainee::create($request + [
             'image' => ($fileName ?? ''),
             'password' => $pass
         ]);

        return redirect()->route('admin.trainees')->with(['status' => 'success', 'message' => 'Trainee Added Successfully']);
    }

    public function edit($id){
        $trainee = Trainee::find($id);
        return view('admin.Trainees.edit_trainee', compact('trainee'));
    }

    public function update(Request $request, $id) {
        $trainee = Trainee::find($id);

        if (!$trainee) {
            abort(404);
        }

        $request->validate([
            'name' => 'required|string',
            'password' => 'required|string|max:255|confirmed',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        if ($request->has('image')) {
            $fileName = $this->uploadImage($request->image);
        }

        $pass = Hash::make($request->get('password'));
        $request = $request->except('password', '_token', 'image');

        $trainee->update($request + [
                'image' => ($fileName ?? $trainee->image),
                'password' => $pass
        ]);

        return redirect()->route('admin.trainees')->with(['status' => 'success', 'message' => 'Trainee Edited Successfully']);
    }

    public function destroy($id) {
        $trainee = Trainee::find($id);

        if (!$trainee) {
            abort(404);
        }
        $trainee->delete();

        return redirect()->route('admin.trainees')->with(['status' => 'success', 'message' => 'Trainee Deleted Successfully']);
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
