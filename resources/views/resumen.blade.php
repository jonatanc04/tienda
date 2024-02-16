@extends('plantilla')

@section('titulo', 'Resumen del pedido')

@section('contenido')
  <h1>Resumen del pedido</h1>

  <table class="resumen-pedido">
    <thead>
        <tr>
            <td>Nombre del producto</td>
            <td>Cantidad</td>
            <td>Precio total</td>
        </tr>
    </thead>
    <tbody>
        @php
            $precioTotal = 0;   
        @endphp
        @foreach ($data as $item)
            @foreach ($productos as $producto)
                @if ($item['idProducto'] == $producto->id)
                <tr>
                    <td>{{ $producto->nombre }}</td>
                    <td class="cantidad">{{ $item['cantidad'] }}</td>
                    <td class="precio">{{ $producto->precio * $item['cantidad'] }} €</td>
                    @php
                        $precioTotal += $producto->precio * $item['cantidad'];
                    @endphp
                </tr>
                @endif
            @endforeach
        @endforeach
        <tr>
            <td></td>
            <td><b>Precio total:</b></td>
            <td class="precio">{{ $precioTotal }} €</td>
        </tr>
    </tbody>
  </table>
  <a class="final-comp" href="{{ route('tienda.index') }}">Volver al inicio</a>
@endsection