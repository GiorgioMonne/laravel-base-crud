@extends('layouts.base')


@section('pageContent')

    <div class="container mt-5">

        <h1>CREA UN NUOVO COMIC</h1>

        <form action="{{route("products.store")}}" method="post">
            @csrf
            <div class="form-group">
                <label for="title">Titolo</label>
                <input type="text" class="form-control" id="title" name="title"  placeholder="Inserisci il fumetto">
            </div>

            <div class="form-group">
                <label for="type">Tipo fumetto</label>
                <select class="form-control" id="type" name="type"  placeholder="Tipologia fumetto">
                    <option>Comic Book</option>
                    <option>Graphic Novel</option>
                </select>
            </div>

            <div class="form-group">
                <label for="series">Serie</label>
                <input type="text" class="form-control" id="series"  name="series"  placeholder="Inserisci serie di appartenenza">
            </div>

            <div class="form-group">
                <label for="sale_date">Data uscita</label>
                <input type="date" class="form-control" id="sale_date"  name="sale_date"  placeholder="Inserisci la data d'uscita">
            </div>

            <div class="form-group">
                <label for="description">Descrizione</label>
                <textarea class="form-control" name="description" id="description" rows="8"  placeholder="Descrizione..."></textarea>
            </div>

            <div class="form-group">
                <label for="price">Prezzo</label>
                <input type="number" class="form-control" id="price"  name="price"  placeholder="Digita il prezzo">
            </div>

            <div class="form-group">
                <label for="image">Immagine</label>
                <input type="text" class="form-control" id="image"  name="image"  placeholder="Inserisci l'url dell'immagine">
            </div>
            
            <button type="submit" class="btn btn-primary">Crea</button>

            <a href="{{route("products.index")}}"><button type="button" class="btn btn-secondary">Torna indietro</button></a>
        </form>

        @if ($errors->any())

            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </div>
            
        @endif
        
    </div>
@endsection