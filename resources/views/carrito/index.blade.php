@extends('plantilla')

@section('titulo', 'Carrito de compra')

@section('contenido')
    @php
        $cantidadTotal = 0;
    @endphp
    <h1 class="hola">Carrito</h1>

    @if(isset($errorMessage))
        <p>{{$errorMessage}}</p>
    @else
        @if(isset($carrito) && !empty($carrito))
            @forelse($carrito as $prodCarrito)
                @forelse($productos as $producto)
                    @if ($producto->id == $prodCarrito['idProducto'])
                        <div class="prod-carrito">
                            <img src={{asset("img/$producto->foto")}} class="image-product" />
                            <div class="texto-produc">
                                <h2>{{$producto['nombre']}}</h2>
                                <p class="descrip-prod ">{{$producto['descripcion']}}</p>
                                <p class="precio-total">Precio total:<b> {{$prodCarrito['cantidad'] * $producto['precio']}} €</b></p>
                                @php
                                    $cantidadTotal+= $prodCarrito['cantidad'] * $producto['precio']
                                @endphp
                            </div>
                            <div class="edit-delete">
                                <div class="controlador-prod">
                                    <form action="{{ route('carrito.update', $prodCarrito['id']) }}" method="POST">
                                        @method('PUT')
                                        @csrf
                                        <div class="cant-mod">
                                            <label>Cantidad:</label>
                                            <input type="number" name="cantidad" value="{{$prodCarrito['cantidad']}}" min="1" max="99">
                                        </div>
                                        <input class="act-prod" type="submit" value="Actualizar">
                                    </form>
                                    <form action="{{ route('carrito.destroy', $prodCarrito['id']) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <input class="del-prod" type="submit" value="Eliminar">
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endif
                @empty
                    <p>Error en la carga de los productos</p>
                @endforelse
            @empty
                <p>No se encontraron productos</p>
            @endforelse
            <div class="finalizar-compra">
                <p>Precio total: {{$cantidadTotal}} €</p>
                <form action="{{ route('confirmar')}}" method="GET">
                    @csrf
                    <input class="button" type="submit" value="Realizar compra">
                </form>                
            </div>
        @else
            <p>El carrito está vacío</p>
        @endif
    @endif
@endsection