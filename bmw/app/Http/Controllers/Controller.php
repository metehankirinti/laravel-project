<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function store(Request $request)
    {
        $request->validate([
            'brand_id' => 'required',
            'name' => 'required',
        ]);

        Model::create([
            'brand_id' => $request->brand_id,
            'name' => $request->name,
        ]);

        return redirect('/models')->with('success', 'Model created successfully');
    }
}
