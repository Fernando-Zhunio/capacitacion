@extends('layouts.app')

@section('content')
<div class="container mt-3">
    <a name="" id="" class="btn btn-primary" href="{{route('product.create')}}" role="button">Crear producto</a>
</div>
<table class="table container">
    <thead>
        <tr>
            <th>Name</th>
            <th>id</th>
            <th>Descripcion</th>
            <th>Slug</th>
            <th>Precio</th>
        </tr>
    </thead>
    <tbody>
            @foreach ($products as $product)
            <tr>
               <td>{{$product->id}}</td>
               <td>{{$product->name}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->slug}}</td>
                <td>{{$product->price}}</td>
                <td><div class="form-group">
                  <label for="">Tipo</label>
                  <select class="form-control" name="" id="">
                    <option>{{$product->slug}}</option>
                    <option>{{$product->price}}</option>
                    <option>Opcion 3</option>
                  </select>
                </div></td>
            </tr>
            @endforeach

        </tbody>
    </table>

    <div>
        Hola mundo
    </div>
@endsection
