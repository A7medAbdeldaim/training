<?php

namespace App\Http\Controllers;

use App\Models\Bike;
use Illuminate\Http\Request;

class BikeController extends Controller
{
    public function index() {
        return view('Bikes.index');
    }

    public function show($bike) {
        $bike = Bike::find($bike);
        return view('bike', compact('bike'));
    }

    public function get() {
        $data = Bike::all();
        return view('admin.Bikes.bikes', compact('data'));
    }

    public function create() {
        $data = Bike::all();
        return view('admin.Bikes.add_bike', compact('data'));
    }

    public function store(Request $request) {
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store('bikes', ['disk' => 'public']);
        }

        $request = $request->except('_token', 'image');

        Bike::create($request + ['image' => $path ?? '', 'user_id' => auth()->id()]);

        return redirect()->route('admin.bikes.all')->with(['status' => 'success', 'message' => 'Bike Added Successfully']);
    }

    public function edit($id){
        $bike = Bike::find($id);
        return view('admin.Bikes.edit_bike', compact('bike'));
    }

    public function update(Request $request, $id) {
        $bike = Bike::find($id);

        if (!$bike) {
            abort(404);
        }

        $bike->update($request->all());

        return redirect()->route('admin.bikes.all')->with(['status' => 'success', 'message' => 'Bike Edited Successfully']);
    }

    public function destroy($id) {
        $bike = Bike::find($id);

        if (!$bike) {
            abort(404);
        }
        $bike->delete();

        return redirect()->route('admin.bikes.all')->with(['status' => 'success', 'message' => 'Bike Edited Successfully']);
    }

    public function rent($id) {
        $bike = Bike::find($id);

        if (!$bike) {
            abort(404);
        }
        $bike->update(['status' => 0]);

        return view('bike', compact('bike'));
    }
}
