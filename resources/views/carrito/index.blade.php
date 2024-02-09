@extends('plantilla')

@section('titulo', 'Carrito de compra')

@section('contenido')
    <h1>Carrito</h1>

    @if(isset($errorMessage))
        <p>{{$errorMessage}}</p>
    @else
        @if(isset($carrito) && !empty($carrito))
            @forelse($carrito as $prodCarrito)
                @forelse($productos as $producto)
                    @if ($producto->id == $prodCarrito['idProducto'])
                        <div>
                            <img src={{asset("img/$producto->foto")}} class="image-product" />
                            <p>ID Producto: {{$prodCarrito['idProducto']}} Cantidad: {{$prodCarrito['cantidad']}}</p>
                        </div>
                    @endif
                @empty
                    <p>Error en la carga de los productos</p>
                @endforelse
            @empty
                <p>No se encontraron productos</p>
            @endforelse
        @else
            <p>El carrito está vacío</p>
        @endif
    @endif
@endsection