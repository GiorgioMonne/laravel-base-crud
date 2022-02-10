@extends('layouts.base')

@section('pageContent')

    <div class="container">
        <h1>{{$product->title}}</h1>
        <img src="{{$product->image}}" alt="{{$product->title}}">

        <p>{{!!$product->description!!}}</p>

        <h5>Costo Fumetto :{{$product->price}} $</h5>

        <div>
            <a href="{{route("products.index")}}"><button type="button" class="btn btn-primary">Torna indietro</button></a>
        </div>
    </div>
    
@endsection