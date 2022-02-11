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

                    <th><a href="{{route("products.show", $product->id)}}"><button type="button" class="btn btn-primary">Cerca</button></a></th>
                </tr>
    
                @endforeach
              
            </tbody>
        </table>
    </div>

@endsection