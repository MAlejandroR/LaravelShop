@extends ("welcome")

@section ("contenido")
    <div class="btn-group">

        <a href="{{ route('Producto.create') }}" class="btn btn-info" >Añadir Producto</a>
    </div>
    <h2>Total {{sizeof($productos)}} Productos encontrados</h2>
    <hr />
    <table class="table table-striped table-bordered">
        <thead>
        <th>Código</th>
        <th>Nombre</th>
        <th>Precio</th>
        <th></th>
        <th></th>
        <th></th>

        </thead>

        @foreach ($productos as $producto)
            <tr>
                <td>
                    {{$producto->cod}}
                    <input type="hidden" name="cod" value="{{$producto->cod}}">
                </td>
                <td>
                    {{$producto->nombre_corto}}
                </td>
                <td>
                    {{$producto->PVP}} euros
                </td>

                <td>
                    <a href="{{route (["Producto.edit",$producto->cod])}}" role="button" class="btn btn-secondary"> Editar</a>
                </td>
                <td>
                    <a href="{{route ("Producto.destroy")}}" role="button" class="btn btn-secondary"> Borrar</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection



