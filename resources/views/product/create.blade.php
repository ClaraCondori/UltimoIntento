@extends('layouts.app')
 
@section('body')
    <h1 class="mb-0">Añadir nuevo</h1>
    <hr />
    <form action="{{ route('product.store') }}" method="POST">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="nombre" class="form-control" placeholder="Nombre">
            </div>
            <div class="col">
                <textarea type="text" name="descripcion" class="form-control" placeholder="descripcion"></textarea>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="cod_prod" class="form-control" placeholder="código">
            </div>
            <div class="col">
                <input class="form-control" name="precio" placeholder="precio">
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </form>
@endsection