@extends('layouts.base')

@section('pageContent')

    <div class="container">
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
                    <th>{{$product->title}}</th>
                    <th>{{$product->type}}</th>
                    <th>{{$product->description}}</th>
                    <th>{{$product->series}}</th>
                </tr>
    
                @endforeach
              
            </tbody>
        </table>
    </div>

@endsection