@extends ("welcome")

@section ("contenido")
    {{--
    <form action="{{route("Producto.store")}}" class="container" method="POST">
        @csrf
    <table class="container">

            <tr>
                <td>
                    <label for="cod">Código</label>
                </td>
                <td>
                    <input type="text" name="cod" value="">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="nombre">Nombre</label>
                </td>
                <td>
                    <input type="text" name="nombre" value="">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="nombre_corto">Nombre corto</label>
                </td>
                <td>
                    <input type="text" name="nombre_corto" value="">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="descripcion">Descripción</label>
                </td>
                <td>
                    <input type="text" name="descripcion" value="">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="PVP">Precio de venta al público</label>
                </td>
                <td>
                    <input type="text" name="PVP" value="">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="familia">Familia</label>
                </td>
                <td>
                    <input type="text" name="familia" value="">
                </td>
            </tr>
    </table>

                    <input type="submit" class="btn btn-secondary" value='Guardar' name="submit">
    </form>
    --}}
    {!!  Form::model($producto, ['route' => ['Producto.update', $producto->cod]])!!}
    {!! Form::close() !!}


@endsection



