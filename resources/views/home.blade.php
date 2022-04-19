@extends('layouts.app')

@section('content')
<div class="container">
    <!--Carroulse-->
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-header">
                <h2>Carrousel <a href="/carrousel_add"><button type="submit" class="btn btn-outline-primary">Agregar
                            imagen</button></a></h2>
            </div>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-100 ">
                        <img src="assets/img/gallery/gallery4.png" class="card-img-top" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <a href="/carousel_edit">
                                <input type="button" class="btn btn-outline-success" value="Editar">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 ">
                        <img src="assets/img/gallery/gallery3.png" class="card-img-top" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <a href="/carousel_edit">
                                <input type="button" class="btn btn-outline-success" value="Editar">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 ">
                        <img src="assets/img/gallery/gallery4.png" class="card-img-top" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <a href="/carousel_edit">
                                <input type="button" class="btn btn-outline-success" value="Editar">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/Carrousel-->


    <!--Testimonio -->
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <div class="card-header">
                <h2>Testimonios <input type="button" class="btn btn-outline-primary" value="Agregar"></h2>
            </div>
            <div class="card-group">
                <div class="card">
                    <img src="assets/img/elements/p1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                        <input type="button" class="btn btn-outline-success" value="Editar">
                        <input type="button" class="btn btn-outline-danger" value="Eliminar">
                    </div>
                </div>
                <div class="card">
                    <img src="assets/img/elements/p3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional
                            content.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="assets/img/elements/p2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This card has even longer content than the first to show that equal
                            height action.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <div class="card-header">
                <h2>Acerca de mi <input type="button" class="btn btn-outline-success" value="Editar"></h2>
            </div>
            <div class="card mb-6">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="assets/img/elements/p4" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Acerca de mi</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer. This is a wider card with
                                supporting text below as a natural lead-in to additional content. This content is a
                                little bit longer. This is a wider card with supporting text below as a natural lead-in
                                to additional content. This content is a little bit longer</p>
                            <p class="card-text"><small class="text-muted">Nombre Apellido</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection