<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset ("css/app.css")}}">
    <link rel="stylesheet" href="{{asset ("css/estilo.css")}}">
    <title>Gestión de tienda</title>
</head>
<body>
<div class="container">
    <header>
        <img src="{{asset("images/logo.jpeg")}}" alt="Logo de empresa">
        <h1 class="nav-fill">EMPRESA DE PRODUCTOS ÚLTIMA GENERACIÓN</h1>
    </header>

    <div >
    <section class="menu">
        <nav class="nav btn-block ">
            @yield ("menu")
        </nav>
    </section>
    </div>
    <section class="contenido container">
    @yield("contenido_listado")<!--Que traiga una línea para separar-->
    @yield("contenido")

    </section>
</div>
    <footer class="navbar fixed-button">
        @section("foot")
            El cliente, nuestra meta!!!!&copy &reg
    </footer>

</body>
