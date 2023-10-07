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
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Código</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @if($product->count() > 0)
                @foreach($product as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->nombre }}</td>
                        <td class="align-middle">{{ $rs->descripcion }}</td>
                        <td class="align-middle">{{ $rs->cod_prod }}</td>
                        <td class="align-middle">{{ $rs->precio }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('product.show', $rs->id) }}" type="button" class="btn btn-secondary">Detalle</a>
                                <a href="{{ route('product.edit', $rs->id)}}" type="button" class="btn btn-warning">Editar</a>
                                <form action="{{ route('product.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('¿Eliminar?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Eliminar</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Producto no encontrado</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
