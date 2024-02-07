@extends('plantilla')

@section('titulo', 'A&T Nutrition')

@section('contenido')
  <div class="inicio-container">
    <div class="img-container">
      <img src={{asset("img/left.jpg")}} class="image-product" />
    </div>
    <div class="text-container">
      <div class="logo-container-init">
        <p>A&T</p><h1>Nutrition</h1>
      </div>
      <p>¡Bienvenido/a a nuestra página web dedicada a la nutrición y el bienestar! En A&T Nutrition, estamos comprometidos/as en ayudarte a alcanzar tus objetivos de salud a través de una alimentación equilibrada y sostenible. Nuestra misión es proporcionarte los recursos y productos necesarios para que logres un estilo de vida saludable y lleno de energía.</p>
      <div class="textos-cont">
        <div>
          <h3>Nuestros productos</h3>
          <p>Descubre nuestra selección de productos cuidadosamente seleccionados para apoyar tu viaje hacia una mejor salud. Desde suplementos nutricionales hasta alimentos saludables y deliciosos, ofrecemos opciones que se adaptan a tus necesidades y preferencias. Nos enorgullece brindar productos de alta calidad, respaldados por la ciencia y diseñados para potenciar tu bienestar.</p>
        </div>
        <div>
          <h3>Dietas Personalizadas</h3>
          <p>Creemos en la importancia de abordar la nutrición de manera individualizada. Nuestro equipo de expertos en nutrición trabaja contigo para crear planes alimenticios personalizados que se adapten a tu estilo de vida, objetivos y preferencias alimenticias. Ya sea que estés buscando perder peso, ganar masa muscular o simplemente mejorar tu salud general, estamos aquí para guiarte en cada paso del camino.</p>
        </div>
        <div>
          <h3>Recetas Saludables</h3>
          <p>Explora nuestra sección de recetas saludables, donde encontrarás inspiración culinaria para preparar comidas deliciosas y nutritivas. Desde desayunos energéticos hasta cenas equilibradas, nuestras recetas están diseñadas para hacer que la nutrición sea accesible y deliciosa.</p>
        </div>
        <div>
          <h3>Blog de Nutrición</h3>
          <p>Mantente actualizado/a con las últimas tendencias en nutrición, consejos de estilo de vida saludable y noticias relacionadas con el bienestar en nuestro blog. Nuestro objetivo es brindarte información valiosa y confiable para que tomes decisiones informadas sobre tu salud y alimentación.</p>
        </div>
      </div>
    </div>
    <div class="img-container">
      <img src={{asset("img/right.jpg")}} class="image-product" />
    </div>
  </div>
@endsection