@extends ("welcome")

@section("contenido_listado")
    <div class="navbar;">
        @foreach (config("admin.tablas") as $tabla)
            <a class="btn btn-info" href="{{$tabla}}" role='button'>{{$tabla}}</a>
        @endforeach
    </div>
@endsection
<hr />


