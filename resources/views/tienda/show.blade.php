@extends('plantilla')

@section('titulo', 'A&T Nutrition - '.$producto->nombre)

@section('contenido')

  <h1>{{$producto->nombre}}</h1>
  <div class='container-unique-product'>
    <div class="product-info">
      <p>{{$producto->descripcion}}</p>
      <div class='formulario-compra'>
        <p>Cantidad</p>
        <div class="cantidad-container">
          <form action="{{ route('carrito.store') }}" method="POST">
            @csrf
            <input type="hidden" name='idCliente' value={{auth()->user()->id}}>
            <input type="hidden" name='idProducto' value={{$producto->id}}>
            <input type="number" name="cantidad" value="1" min="1" max="99">
            <input type="submit" name="anyade" value="Añadir al carrito">
          </form>  
        </div>
      </div>
    </div>
    <div class="image-container">
      <img src="{{asset("img/$producto->foto")}}"/>
    </div>
  </div>
  
@endsection