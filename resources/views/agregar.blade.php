@extends('layout/plantilla')

@section("tituloPagina", "Crear un nuevo registro")

@section('contenido')
<div class="card">
    <h5 class="card-header">Nuevo Mayorista</h5>
    <div class="card-body">
        <form action = {{ route('mayoristas.store') }} method="POST" class="row g-3">
            @csrf
        <div class="col-12" style="text-align:right;">
            <button class="btn btn-primary" type="submit">Crear Mayorista</button>
            <a href={{route("mayoristas.index")}} class="btn btn-primary" style="background-color:red";>Cancelar</a>
            
        </div>
        <br>
        <h6 class="card-header">Informacion Mayorista</h6>
        
        <div class="col-md-6">
            <label for="nombre_mayorista" class="form-label">Nombre*</label>
            <input type="text" class="form-control" id="nombre_mayorista" placeholder="Nombre del Mayorista" required>
        </div>
        <div class="col-md-6">
            <label for="company" class="form-label">Empresa*</label>
            <input type="text" class="form-control" id="company" placeholder="Nombre de la Empresa" required>
        </div>
        <div class="col-6">
            <label for="email" class="form-label">Correo Electronico*</label>
            <input type="email" class="form-control" id="email" placeholder="example@example.com" required>
        </div>
        <div class="col-6">
            <label for="phone" class="form-label">Numero de Telefono*</label>
            <input type="text" class="form-control" id="phone" placeholder="111-222-3333" required>
        </div>
        <div class="col-md-6">
            <label for="discount" class="form-label">Porcentaje de Descuento</label>
            <input type="text" class="form-control" id="discount" placeholder="%%%%">
        </div>
        

        <br>
        <h6 class="card-header">Direccion Envio</h6>
        
            
        <div class="col-md-6">
            <label for="nombre_contacto" class="form-label">Nombre de Contacto</label>
            <input type="text" class="form-control" id="nombre_contacto" placeholder="Nombre del Contacto">
        </div>
            <div class="col-md-6">
            <label for="direccion" class="form-label">Direccion</label>
            <input type="text" class="form-control" id="direccion" placeholder="Direccion">
        </div>
        <div class="col-6">
            <label for="CP" class="form-label">Codigo Postal</label>
            <input type="text" class="form-control" id="CP" placeholder="CP">
        </div>
        <div class="col-6">
            <label for="colonia" class="form-label">Colonia</label>
            <input type="text" class="form-control" id="colonia" placeholder="Colonia">
        </div>
        <div class="col-md-6">
            <label for="ciudad" class="form-label">Ciudad</label>
            <input type="text" class="form-control" id="ciudad" placeholder="Colonia">
        </div>
        <div class="col-md-6">
            <label for="estado" class="form-label">Estado</label>
            <input type="text" class="form-control" id="estado" placeholder="Estado">
        </div>
        <div class="col-md-6">
            <label for="correo_electronico" class="form-label">Correo Electronico</label>
            <input type="email" class="form-control" id="correo_electronico" placeholder="example@example.com">
        </div>
        <div class="col-md-6">
             <label for="telefono" class="form-label">Telefono</label>
            <input type="text" class="form-control" id="telefono" placeholder="111-222-3333">
        </div>
        </form>

        <br>
        <h6 class="card-header">Direccion Facturacion</h6>
        <div class="col-12" style="display:flex; justify-content:flex-end; width:100%; padding:0;">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="gridCheck">
              <label class="form-check-label" for="gridCheck">
                Usar Direccion de Envio
              </label>
            </div>
          </div>
          
            <div class="col-md-6">
              <label for="nombre_contacto" class="form-label">Nombre de Contacto</label>
              <input type="text" class="form-control" id="nombre_contacto" placeholder="Nombre del Contacto">
            </div>
            <div class="col-md-6">
              <label for="direccion" class="form-label">Direccion</label>
              <input type="text" class="form-control" id="direccion" placeholder="Direccion">
            </div>
            <div class="col-6">
              <label for="CP" class="form-label">Codigo Postal</label>
              <input type="text" class="form-control" id="CP" placeholder="CP">
            </div>
            <div class="col-6">
              <label for="colonia" class="form-label">Colonia</label>
              <input type="text" class="form-control" id="colonia" placeholder="Colonia">
            </div>
            <div class="col-md-6">
                <label for="ciudad" class="form-label">Ciudad</label>
                <input type="text" class="form-control" id="ciudad" placeholder="Colonia">
            </div>
            <div class="col-md-6">
              <label for="estado" class="form-label">Estado</label>
              <input type="text" class="form-control" id="estado" placeholder="Estado">
            </div>
            <div class="col-md-6">
              <label for="correo_electronico" class="form-label">Correo Electronico</label>
              <input type="email" class="form-control" id="correo_electronico" placeholder="example@example.com">
            </div>
            <div class="col-md-6">
              <label for="telefono" class="form-label">Telefono</label>
              <input type="text" class="form-control" id="telefono" placeholder="111-222-3333">
            </div>
          </form>


          <br>
          <h6 class="card-header">Datos Facr¡turacion</h6>
          
            
            <div class="col-md-6">
              <label for="razon_social" class="form-label">Razon Social</label>
              <input type="text" class="form-control" id="razon_social" placeholder="Razon Social">
            </div>
            <div class="col-md-6">
              <label for="CFDI" class="form-label">Uso del CFDI</label>
              <input type="text" class="form-control" id="CFDI" placeholder="CFDI">
            </div>
            <div class="col-6">
              <label for="RFC" class="form-label">RFC</label>
              <input type="text" class="form-control" id="RFC" placeholder="RFC">
            </div>
          </form>
        
    </div>
</div>
@endsection