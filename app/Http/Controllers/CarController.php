<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CarController extends Controller
{
    public function index() {
        return view('Cars.index');
    }

    public function get() {
        $data = Car::all();
        return view('admin.Cars.cars', compact('data'));
    }

    public function show(Request $request, $car) {
        $car = Car::find($car);
        return view('car', compact('car'));
    }

    public function create() {
        return view('admin.Cars.add_car');
    }

    public function store(Request $request) {
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $file_path = $file->store('cars', ['disk' => 'public']);
        }

        $request = $request->except('_token', 'image');

        Car::create($request + ['image' => $file_path ?? '', 'user_id' => auth()->id()]);

        return redirect()->route('admin.cars.all')->with(['status' => 'success', 'message' => 'Car Added Successfully']);
    }

    public function edit($id){
        $car = Car::find($id);
        return view('admin.Cars.edit_car', compact('car'));
    }

    public function update(Request $request, $id) {
        $car = Car::find($id);

        if (!$car) {
            abort(404);
        }

        $car->update($request->all());

        return redirect()->route('admin.cars.all')->with(['status' => 'success', 'message' => 'Car Edited Successfully']);
    }

    public function destroy($id) {
        $car = Car::find($id);

        if (!$car) {
            abort(404);
        }
        $car->delete();

        return redirect()->route('admin.cars.all')->with(['status' => 'success', 'message' => 'Car Edited Successfully']);
    }

    public function rent($id) {
        $car = Car::find($id);

        if (!$car) {
            abort(404);
        }
        $car->update(['status' => 0]);

        return view('car', compact('car'));
    }
}
