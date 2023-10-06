@extends('layouts.app')
@section('body')
<div class ="d-flex aling-items-center justify-content-between">
    <h1 class="md-0">Lista de productos</h1>
    <a href="{{ route('product.create') }}" class="btn btn-primary">Agregar Nuevo Producto</a>
</div>
<hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
@endsection
