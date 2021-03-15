@extends("estudiantes.layout")
@section("opciones")
    <a class="btn btn-danger" href="{{route('estudiante.create')}}">GUARDAR</a>
    <a class="btn btn-danger" href="{{route('estudiante.index')}}">CANCELAR</a>

@endsection

@section("contenido")
<form action="{{route('estudiante.store')}}" method="POST">
    @csrf
    <label for id="nombre">nombre</label>
    <input type="text" name="nombre"  id="nombre"><br/>
    <label for id="direccion">direccion</label>
    <input type="text" name="direccion"  id="direccion"><br/>
    <label for id="telefono">telefono</label>
    <input type="text" name="telefono"  id="telefono"><br/>
    <label for id="DNI">DNI</label>
    <input type="text" name="DNI"  id="DNI"><br/>
    <button  type="submit" class="btn btn-danger">GUARDAR</button>
</form>
@endsection
    <?php
