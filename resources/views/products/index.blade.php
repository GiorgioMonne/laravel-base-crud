@extends('layouts.base')

@section('pageContent')

    <h1>LISTA FUMETTI</h1>
    <a href="{{route("products.create")}}"><button type="button" class="btn btn-success">Aggiungi un nuovo comic</button></a>

    <div class="container mt-5">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Titolo</th>
                <th scope="col">Tipo</th>
                <th scope="col">Descrizione</th>
              </tr>
            </thead>
    
            <tbody>
    
                @foreach ($products as $product)
    
                <tr>
                    <th>{{$product->id}}</th>
                    <th>{{$product->title}}</th>
                    <th>{{$product->type}}</th>
                    <th>{{$product->description}}</th>
                    <th>{{$product->series}}</th>

                    <th><a href="{{route("products.show", $product->id)}}"><button type="button" class="btn btn-primary">Visualizza</button></a></th>
                    <th><a href="{{route("products.edit", $product->id)}}"><button type="button" class="btn btn-primary">Modifica</button></a></th>
                    
                    <th>
                        <form action="{{route('products.destroy', $product->id)}}" method="POST">
                        
                        @csrf
                        @method("DELETE")
                        <button type="submit" class="btn btn-danger">Elimina</button>

                        </form>
                    </th>

                </tr>
    
                @endforeach
              
            </tbody>
        </table>
    </div>

@endsection