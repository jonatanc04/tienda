@extends('plantilla')

@section('titulo', 'Acceso')

@section('contenido')
    <h1>Iniciar Sesión</h1>

    <div class="form-container">
        <form action="{{ route('login') }}" method="POST">
        @csrf
    
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control"
                name="email" id="email" />
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control"
                name="password" id="password" />
            </div>
            <input type="submit" name="enviar" value="Enviar"
            class="log-button">
    
        </form>

        @if (!empty($error))
            <div class="error-mensaje">
                {{ $error }}
            </div>
        @endif
    </div>

@endsection