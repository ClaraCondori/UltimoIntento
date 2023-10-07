@extends('layouts.app')
 
@section('body')
    <h1 class="mb-0">Editar producto</h1>
    <hr />
    <form action="{{ route('product.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Eitar</label>
                <input type="text" name="nombre" class="form-control" placeholder="nombre" value="{{ $product->nombre }}" >
            </div>
            <div class="col mb-3">
            <label class="form-label">Descripcion</label>
                <textarea class="form-control" name="descripcion" placeholder="Descripcion" >{{ $product->descripcion }}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Product Code</label>
                <input type="text" name="cod_prod" class="form-control" placeholder="Codigo" value="{{ $product->cod_prod }}" >
            </div>
            <div class="col mb-3">
            <label class="form-label">Price</label>
                <input type="text" name="precio" class="form-control" placeholder="Precio" value="{{ $product->precio }}" >
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Actualizar</button>
            </div>
        </div>
    </form>
@endsection