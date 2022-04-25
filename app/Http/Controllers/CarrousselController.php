<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carroussel;

class CarrousselController extends Controller
{

    public function store(Request $request)
    {
        // dd($request->all());
        $carroussel = Carroussel::create([      
           'user_id' =>auth()->user()->id,
        ]+ $request->all());

        if($request->file('image')) {
            $carroussel->image = $request->file('image')->store('carroussel', 'public');
            $carroussel->save();
        }

        return back()->with('status', 'Guardado con éxito');
    }
      
    public function edit()
    {
        return view('carousel_edit');
    }

    public function create()
    {
        return view('carrousel_add');
    }
}