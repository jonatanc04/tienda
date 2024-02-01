@extends('plantilla')

@section('titulo', 'Gestión de usuarios')

@section('contenido')
  <h1>Gestión de usuarios</h1>

  <div class="user-admin-cnt">
    <div class="form-crear-usuarios">
        <h2>Creación de usuarios</h2>
        <form action="{{ route('user.store') }}" method="POST">
            @csrf
            <label>Nombre</label>
            <input type="text" name="name">
            @if ($errors->has('name'))
                <div class="textdanger">
            {{ $errors->first('name') }}
                </div>
            @endif
            <label>Correo electrónico</label>
            <input type="text" name="email">
            @if ($errors->has('email'))
                <div class="textdanger">
            {{ $errors->first('email') }}
                </div>
            @endif
            <label>Contraseña</label>
            <input type="password" name="password">
            @if ($errors->has('password'))
                <div class="textdanger">
            {{ $errors->first('password') }}
                </div>
            @endif
            <label>Rol</label>
            <select name="rol">
                <option value="admin">Administrador</option>
                <option value="user">Usuario</option>
            </select>
        
            <div class="align-button-box">
                <input class="button" type="submit" name="enviar" value="Crear usuario">
            </div>
          </form>
    </div>
  
    <div class="listado-users-gestion">
        <table>
            <thead>
                <tr>
                    <td class="title-table">Email</td>
                    <td class="title-table">Rol</td>
                    <td></td>
                    <td></td>
                </tr>
            </thead>
            <tbody>
                @forelse ($usuarios as $usuario)
                    <tr>
                        <td class="correo">{{$usuario->email}}</td>
                        <td class="rol-box">{{$usuario->rol}}</td>
                        <td class="editar"><a href="{{ route('user.edit', $usuario['id']) }}">Editar</a></td>
                        <td class="borrar"><form action="{{ route('user.destroy', $usuario['id']) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button>Borrar</button>
                          </form></td>
                    </tr>
                @empty
                    <p>No se encontraron usuarios<p>
                @endforelse
            </tbody>
        </table>
    </div>
  </div>

@endsection