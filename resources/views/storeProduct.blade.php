@extends('layouts.app')

@section('content')
<div class="display-3">Creando producto</div>
<form action="{{route('products.store')}}" method="post" class="container">
    @foreach ($errors->all() as $item)
        <div class="alert alert-danger" role="alert">
            {{$item}}
        </div>
    @endforeach
        @csrf
        <div class="form-group">
          <label for="name">Nombre</label>
          <input type="text" class="form-control" name="name" id="" aria-describedby="helpId" placeholder="NOmbre del producto">
        </div>
        <div class="form-group">
            <label for="">Descripcion</label>
            <textarea type="text" class="form-control" name="description" id="name" aria-describedby="helpId" placeholder="NOmbre del producto"></textarea>
        </div>
        <div class="form-group">
            <label for="slug">Etiqueta</label>
            <input type="text" class="form-control" name="slug" id="slug" aria-describedby="helpId" placeholder="NOmbre del producto">
          </div>

          <div class="form-group">
            <label for="price">Precio</label>
            <input type="number" class="form-control" name="price" id="" aria-describedby="helpId" placeholder="NOmbre del producto">
          </div>

          <button type="submit" class="btn btn-primary mt-2">Guardar</button>
    </form>
@endsection
