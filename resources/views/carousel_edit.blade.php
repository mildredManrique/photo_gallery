@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-header">
                <h2>Editar Carrousel </h2>
            </div>
            <div class="card-header card2">
                <form class="row g-3">
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Título</label>
                        <input type="email" class="form-control" id="inputEmail4">
                    </div>
                    <div class="col-md-6 gato">
                        <img  src="assets/img/gallery/gallery4.png" class="card-img-top" alt="...">
                        <input class="form-control mt-3" type="file" id="formFile">
                    </div>
                    <div class="col-md-6">
                        <label for="exampleFormControlTextarea1" class="form-label">Descripción</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                    </div>
                    <!-- <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                                Check me out
                            </label>
                        </div>
                    </div> -->
                    <div class="col-12 botones d-grid gap-2 d-md-flex justify-content-md-end">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        <button type="submit" class="btn btn-warning">Desactivar</button>
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

<style>
    img{
        max-width:200px;
        max-height:200px;
        margin-left: 80px;

    }

    .gato{
        height:80px;
        width: 80px;
    }

    .botones{
        padding-top: 50;
    }  

    .card2{
        box-shadow: 5px 10px 5px 5px gray;
    }

    #formFile{
        width:17em;
        margin-left:60px;
    }

</style>