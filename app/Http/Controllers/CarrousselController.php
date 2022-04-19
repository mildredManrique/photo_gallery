<?php

namespace App\Http\Controllers;


use App\Http\Requests\CarrousselRequest;
use App\Models\Carroussel;

class CarrousselController extends Controller
{

    public function store(CarrousselRequest $request)
    {
        dd($request->all());
        $carroussel = Carroussel::create([      
           'user_id' =>auth()->user->id
        ]+ $request->all());

        if($request->file('file')) {
            $carroussel->image = $request->file('file')->store('carroussel', 'public');
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