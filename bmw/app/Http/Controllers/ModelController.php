<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model;

class ModelController extends Controller
{
    public function index()
    {
        $models = Model::all();
        return view('models.index', compact('models'));
    }

    public function show($id)
    {
        $model = Model::findOrFail($id);
        return view('models.show', compact('model'));
    }

    // Diğer metodları da ekleyebilirsiniz (create, edit, update, destroy vb.).
}
