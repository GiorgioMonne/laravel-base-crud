@extends('layouts.base')


@section('pageContent')

    <div class="container mt-5">

        <h1>MODIFICA VALORI COMIC {{$product->title}}</h1>

        <form action="{{route("products.update", $product->id)}}" method="post">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title">Titolo</label>
                <input type="text" class="form-control @error("title") is-invalid @enderror" id="title" name="title"  placeholder="Inserisci il fumetto" value="{{old("title") ? old("title") : $product->title}}">
                @error('title')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="type">Tipo fumetto</label>
                <select class="form-control @error("type") is-invalid @enderror" id="type" name="type"  placeholder="Tipologia fumetto" value="{{old("type") ? old("type") : $product->type}}">
                    <option value="book" {{$product->type == "book" ? "selected" : ""}}>Comic Book</option>
                    <option value="novel" {{$product->type == "novel" ? "selected" : ""}}>Graphic Novel </option>
                </select>
                @error('type')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="series">Serie</label>
                <input type="text" class="form-control @error("series") is-invalid @enderror" id="series"  name="series"  placeholder="Inserisci serie di appartenenza" value="{{old("series") ? old("series") : $product->series}}" >
                @error('series')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="sale_date">Data uscita</label>
                <input type="date" class="form-control @error("sale_date") is-invalid @enderror" id="sale_date"  name="sale_date"  placeholder="Inserisci la data d'uscita" value="{{old("sale_date") ? old("sale_date") : $product->sale_date}}" >
                @error('sale_date')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="description">Descrizione</label>
                <textarea class="form-control @error("description") is-invalid @enderror" name="description" id="description" rows="8"  placeholder="Descrizione...">{{old("description") ? old("description") : $product->description}}" </textarea>
                @error('description')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="price">Prezzo</label>
                <input type="number" class="form-control @error("price") is-invalid @enderror" id="price"  name="price"  placeholder="Digita il prezzo" value="{{old("price") ? old("price") : $product->price}}" >
                @error('price')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="image">Immagine</label>
                <input type="text" class="form-control" id="image"  name="image"  placeholder="Inserisci l'url dell'immagine" value="{{old("image") ? old("image") : $product->imaage}}">
                @error('image')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
            
            <button type="submit" class="btn btn-primary">Modifica</button>
        </form>

        <a href="{{route("products.index")}}"><button type="button" class="btn btn-secondary">Torna indietro</button></a>
        
    </div>
@endsection