@extends("estudiantes.layout")
@section("opciones")
    <a class="btn btn-danger" href="{{route('estudiante.create')}}">INSERTAR</a>

@endsection

@section("contenido")


    <table class="">
    <tr>
        <th>Nombre</th>
        <th>Direccion</th>
        <th>Telefono</th>
        <th>DNI</th>
        <th>Editar</th>
        <th>Borrar</th>

    </tr>
        @foreach($estudiante as $estudiante){
            <tr>
                <td>{{$estudiante->nombre}}</td>
                <td>{{$estudiante->direccion}}</td>
                <td>{{$estudiante->telefono}}</td>
                <td>{{$estudiante->dni}}</td>
                <td><a href="{{route("estudiante.edit",$estudiante)}}">EDITAR</a> </td>
                <td><form action="{{route("estudiante.destroy",$estudiante)}}" method="POST">BORRAR</form>
                    @csrf
                    @method("DELETE");
                    <button class="btn-danger">BORRAR</button>
                </td>

            </tr>
        @endforeach
    </table>
