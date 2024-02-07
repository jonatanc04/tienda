@extends('plantilla')

@section('titulo', 'Carrito de compra')

@section('contenido')
    <h1>Carrito</h1>

    @if(isset($errorMessage))
        <p>{{$errorMessage}}</p>
    @else
        @if(isset($carrito) && !empty($carrito))
            @forelse($carrito as $prodCarrito)
                <p>{{$prodCarrito['id']}}</p>
            @empty
                <p>No se encontraron productos</p>
            @endforelse
        @else
            <p>El carrito está vacío</p>
        @endif
    @endif
@endsection
