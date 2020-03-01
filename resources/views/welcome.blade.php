@extends ("layouts.layout")

@section("menu")
    @foreach(config('admin.menu') as $opcion)
        <a  class="btn btn-primary navbar" href="{{action('Tienda@'.strtolower($opcion))}}" role='button' >{{$opcion}}</a>
    @endforeach
@endsection


