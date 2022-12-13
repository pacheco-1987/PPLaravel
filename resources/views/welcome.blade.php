@extends('layout/plantilla')

@section('tituloPagina', 'Prueba trabajo')
 
@section('contenido')
<br><br>
    <div class="card">
        <h5 class="card-header">Mayoristas</h5>
        <p>
            <a href={{route("mayoristas.create")}} class="btn btn-primary">Agregar Nuevo Mayorista</a>
        </p>
        <hr>
        <div class="table table-responsive">
            <table class="table table-sm table-bordered">
                <thead>
                    <th>Nombre</th>
                    <th>Empresa</th>
                    <th>Email</th>
                    <th>Correo Electronico</th>
                    <th>% Descuento</th>
                    <th># Total Cotizaciones</th>
                    <th># Total Ordenes</th>
                    <th># Cotizaciones Status</th>
                </thead>
                <tbody>
                @foreach ($datos as $item)
                    <tr>
                        <td>{{ $item->name}}</td>
                        <td>{{ $item->company}}</td>
                        <td>{{ $item->email}}</td>
                        <td>{{ $item->phone}}</td>
                        <td>{{ $item->discount}}</td>
                        <td>{{ $item->total_cotizaciones}}</td>
                        <td>{{ $item->total_ordenes}}</td>
                        <td>{{ $item->status}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

