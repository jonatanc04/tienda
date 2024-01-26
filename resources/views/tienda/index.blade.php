@extends('plantilla')

@section('titulo', 'A&T Nutrition - Productos')

@section('contenido')
  <h1>Listado de Productos</h1>

  <div class='container-products'>
    @forelse($productos as $producto)
      <a href="{{ route('tienda.show', $producto->id) }}">
        <div class='product'>
          <div class="image-product">
            <h2>{{ $producto->precio }}€</h2>
          </div>
          <p>{{ $producto->nombre }}</p>
        </div>
      </a>
    @empty
      <p>No se encontraron productos<p>
    @endforelse
  </div>

@endsection