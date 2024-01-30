<nav>
  <div class="logo-container">
    <h5>A&T</h5><p>Nutrition</p>
  </div>
  <div class="rutas-container">
    <a href="{{ route('inicio') }}"><p>Inicio</p></a>
    @if(auth()->check())
      <a href="{{ route('tienda.index') }}"><p>Productos</p></a>
      <a href="{{ route('inicio') }}"><p>Carrito</p></a>
      <a href="{{ route('logout') }}"><p>Cerrar Sesión</p></a>
    @else
      <a href="{{ route('login') }}"><p>Acceder</p></a>
    @endif
    
  </div>
  
</nav>