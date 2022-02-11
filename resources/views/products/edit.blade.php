@extends('layouts.base')


@section('pageContent')

    <div class="container mt-5">

        <h1>MODIFICA VALORI COMIC {{$product->title}}</h1>

        <form action="{{route("products.update", $product->id)}}" method="post">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title">Titolo</label>
                <input type="text" class="form-control" id="title" name="title"  placeholder="Inserisci il fumetto" value="{{$product->title}}">
            </div>

            <div class="form-group">
                <label for="type">Tipo fumetto</label>
                <select class="form-control" id="type" name="type"  placeholder="Tipologia fumetto" value="{{$product->type}}">
                    <option value="comic book" {{$product->type == "comic book" ? "selected" : ""}}>Comic Book</option>
                    <option value="graphic novel" {{$product->type == "graphic novel" ? "selected" : ""}}>Graphic Novel </option>
                </select>
            </div>

            <div class="form-group">
                <label for="series">Serie</label>
                <input type="text" class="form-control" id="series"  name="series"  placeholder="Inserisci serie di appartenenza" value="{{$product->series}}">
            </div>

            <div class="form-group">
                <label for="sale_date">Data uscita</label>
                <input type="date" class="form-control" id="sale_date"  name="sale_date"  placeholder="Inserisci la data d'uscita" value="{{$product->sale_date}}">
            </div>

            <div class="form-group">
                <label for="description">Descrizione</label>
                <textarea class="form-control" name="description" id="description" rows="8"  placeholder="Descrizione...">{{$product->description}}</textarea>
            </div>

            <div class="form-group">
                <label for="price">Prezzo</label>
                <input type="number" class="form-control" id="price"  name="price"  placeholder="Digita il prezzo" value="{{$product->price}}">
            </div>

            <div class="form-group">
                <label for="image">Immagine</label>
                <input type="text" class="form-control" id="image"  name="image"  placeholder="Inserisci l'url dell'immagine" value="{{$product->image}}">
            </div>
            
            <button type="submit" class="btn btn-primary">Modifica</button>
        </form>

        <a href="{{route("products.index")}}"><button type="button" class="btn btn-secondary">Torna indietro</button></a>
        
    </div>
@endsection