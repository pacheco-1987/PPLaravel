<?php

namespace App\Http\Controllers;

use App\Models\Mayoristas;
use Illuminate\Http\Request;

class MayoristasController extends Controller
{
   
    public function index()
    {
        $datos = Mayoristas::all();
        return view('welcome', compact('datos'));
    }

    public function create()
    {
        return view('agregar');
    }

    public function store(Request $request)
    {
        
    }

    public function show(Mayoristas $mayoristas)
    {
        //
    }

    public function edit(Mayoristas $mayoristas)
    {
        return "aqui se actualiza";
    }

    public function update(Request $request, Mayoristas $mayoristas)
    {
        //
    }

    public function destroy(Mayoristas $mayoristas)
    {
        //
    }
}
