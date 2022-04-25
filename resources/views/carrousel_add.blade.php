@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-header">
                <h2>Agregar Imagen</h2>

                <div class="card-header card2">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <form action="{{ route('carousel_store') }}" method="POST" enctype="multipart/form-data"
                        class="row g-3">
                        <div class="col-md-6">
                            <label for="input" class="form-label">Titulo *</label>
                            <input type="input" class="form-control" id="input" name="title" required>
                        </div>
                        <div class="col-md-6 gato">
                            <lable>Image *</lable>
                            <input class="form-control mt-3" type="file" name="image" required>
                        </div>
                        <div class="col-md-6">
                            <label for="exampleFormControlTextarea1" class="form-label">Descripción* </label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="body" rows="5"
                                required></textarea>
                        </div>
                        <div class="col-12 botones d-grid gap-2 d-md-flex justify-content-md-end">
                            @csrf
                            <input type="submit" class="btn btn-primary" value="Guardar">
                            <a href="/home">
                                <input type="button" class="btn btn-outline-dark" value="Regresar">
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection

    <style>
    img {
        max-width: 200px;
        max-height: 200px;
        margin-left: 80px;

    }

    .gato {
        height: 80px;
        width: 80px;
    }

    .botones {
        padding-top: 50;
    }

    .card2 {
        box-shadow: 5px 10px 5px 5px gray;
    }

    #formFile {
        width: 17em;
        margin-left: 60px;
    }
    </style>