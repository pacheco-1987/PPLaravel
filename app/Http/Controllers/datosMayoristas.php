<?php

namespace App\Http\Controllers;

use App\Models\datosMayoristas;
use Illuminate\Http\Request;

class datosMayoristasController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $datosmayoristas = new datosMayoristas();
        $datosmayoristas->nombre_mayorista = $request->post('nombre_mayorista');
        $datosmayoristas->company = $request->post('company');
        $datosmayoristas->email = $request->post('email');
        $datosmayoristas->phone = $request->post('phone');
        $datosmayoristas->discount = $request->post('discount');
        $datosmayoristas->nombre_contacto = $request->post('nombre_contacto');
        $datosmayoristas->direccion = $request->post('direccion');
        $datosmayoristas->CP = $request->post('CP');
        $datosmayoristas->colonia = $request->post('colonia');
        $datosmayoristas->ciudad = $request->post('ciudad');
        $datosmayoristas->estado = $request->post('estado');
        $datosmayoristas->correo_electronico = $request->post('correo_electronico');
        $datosmayoristas->telefono = $request->post('telefono');
        $datosmayoristas->CFDI = $request->post('CFDI');
        $datosmayoristas->RFC = $request->post('RFC');
        $datosmayoristas->razon_social = $request->post('razon_social');
        $datosmayoristas->save();
        return redirect()->route('mayoristas.index')->with("success", "Agregado con Exito!");
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
