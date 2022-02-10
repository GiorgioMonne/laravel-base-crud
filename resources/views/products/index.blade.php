@extends('layouts.base')

@section('pageContent')

    <ul>
        @foreach ($products as $product)

        <li>
            {{$product->title}}
        </li>

        @endforeach  
    </ul>

@endsection