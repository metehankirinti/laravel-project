<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    public function create()
    {
        return view('cars.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'make' => 'required',
            'model' => 'required',
            'year' => 'required|integer|min:1900|max:' . (date('Y') + 1),
        ]);

        Car::create($request->all());

        return redirect('/cars')->with('success', 'Araç başarıyla eklendi.');
    }

    public function edit(Car $car)
    {
        return view('cars.edit', compact('car'));
    }

    public function update(Request $request, Car $car)
    {
        $request->validate([
            'make' => 'required',
            'model' => 'required',
            'year' => 'required|integer|min:1900|max:' . (date('Y') + 1),
        ]);

        $car->update($request->all());

        return redirect('/cars')->with('success', 'Araç başarıyla güncellendi.');
    }

    public function destroy(Car $car)
    {
        $car->delete();

        return redirect('/cars')->with('success', 'Araç başarıyla silindi.');
    }

    public function index()
    {
        $cars = Car::all();
        return view('pages.index', compact('cars'));
    }
    
}
