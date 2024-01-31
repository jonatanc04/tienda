@extends('plantilla')

@section('titulo', 'Gestión de usuarios')

@section('contenido')
  <h1>Gestión de usuarios</h1>

  <div class="user-admin-cnt">
    <div class="form-crear-usuarios">
    
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
                        <td class="editar"><a href="#">Editar</a></td>
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