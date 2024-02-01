@extends('plantilla')

@section('titulo', 'Editar usuario - '.$usuario->name)

@section('contenido')
  <h1>{{$usuario->name}}</h1>
  <div class="form-edit-user">
    <form action="{{ route('user.update', $usuario['id']) }}" method="POST">
      @csrf
      @method('PUT')
      <label>Nuevo nombre</label>
      <input type="text" name="name" value="{{$usuario->name}}"/>
      <label>Nuevo correo electrónico</label>
      <input type="text" name="email" value="{{$usuario->email}}"/>
      <label>Nuevo rol</label>
      <select name="rol">
        <option value="admin">Administrador</option>
        <option value="user">Usuario</option>
    </select>
    <div class="align-button-box">
      <input class="button" type="submit" name="enviar" value="Editar usuario">
    </div>
    </form>
  </div>
@endsection