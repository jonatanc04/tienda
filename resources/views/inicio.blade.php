@extends('plantilla')

@section('titulo', 'A&T Nutrition')

@section('contenido')
  <div class="inicio-container">
    <div class="img-container">
      <img src={{asset("img/left.jpg")}} class="image-product" />
    </div>
    <div class="text-container"></div>
    <div class="img-container">
      <img src={{asset("img/right.jpg")}} class="image-product" />
    </div>
  </div>
@endsection