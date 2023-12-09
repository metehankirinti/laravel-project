<?php

namespace App\Http\Controllers;

use App\Models\Car; // Car modelini ekleyin
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function cars()
    {
        $cars = Car::all(); // Tüm araçları veritabanından çekin

        return view('pages.cars', compact('cars')); // cars.blade.php'ye araçları gönderin
    }
}
