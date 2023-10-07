@extends('layouts.app')
 
@section('body')
    <h1 class="mb-0">Detalles de producto</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Detalles</label>
            <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $product->title }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Descricion</label>
            <textarea type="text" name="descripcion" class="form-control" placeholder="descrpcion" readonly="{{ $product->descripcion}}" readonly></textarea>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Codigo</label>
            <input type="text" name="cod_prod" class="form-control" placeholder="Codigo" value="{{ $product->cod_prod }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Precio</label>
            <input class="form-control" name="precio" placeholder="Precio" value="{{ $product->precio }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $product->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $product->updated_at }}" readonly>
        </div>
    </div>
@endsection