<nav>
  <div class="logo-container">
    <h5>A&T</h5><p>Nutrition</p>
  </div>
  <div class="rutas-container">
    <a href="{{ route('inicio') }}"><p>Inicio</p></a>
    @if(auth()->check())
      <a href="{{ route('tienda.index') }}"><p>Productos</p></a>
      <a href="{{ route('carrito.index') }}">
        <div class="carrito-button">
          <img src={{asset("img/carrito.png")}} class="image-product" />
          @php
            $cantidadProductos = app('App\Http\Controllers\CarritoController')->cantidadProductos();
          @endphp
          @if ($cantidadProductos > 0)
            <div class="cant-prod">{{ $cantidadProductos }}</div>
          @endif
        </div>
      </a>
      @if(auth()->user()->rol === 'admin')
        <a href="{{ route('user.index') }}"><p>Gestión</p></a>
      @endif
      <a href="{{ route('logout') }}"><p>Cerrar Sesión</p></a>
    @else
      <a href="{{ route('login') }}"><p>Acceder</p></a>
    @endif
    
  </div>
  
</nav>