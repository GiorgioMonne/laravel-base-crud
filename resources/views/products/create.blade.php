@extends('layouts.base')


@section('pageContent')

    <div class="container mt-5">

        <h1>CREA UN NUOVO COMIC</h1>

        <form action="{{route("products.store")}}" method="post">
            @csrf
            <div class="form-group">
                <label for="title">Titolo</label>
                <input type="text" class="form-control @error("title") is-invalid @enderror" id="title"  name="title"  placeholder="Inserisci il fumetto" value="{{old("title")}}">
                @error('title')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="type">Tipo fumetto</label>
                <select class="form-control @error("title") is-invalid @enderror" id="type"  name="type"  placeholder="Tipologia fumetto" value="{{old("type")}}">
                    <option value="book" {{old("type" == "book" ? "selected" : null)}}>Comic Book</option>
                    <option value="novel" {{old("type" == "novel" ? "selected" : null)}}>Graphic Novel</option>
                </select>
                @error('type')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="series">Serie</label>
                <input type="text" class="form-control @error("title") is-invalid @enderror" id="series"   name="series"  placeholder="Inserisci serie di appartenenza" value="{{old("series")}}">
                @error('series')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="sale_date">Data uscita</label>
                <input type="date" class="form-control @error("title") is-invalid @enderror" id="sale_date"   name="sale_date"  placeholder="Inserisci la data d'uscita" value="{{old("sale_date")}}">
                @error('sale_date')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="description">Descrizione</label>
                <textarea class="form-control @error("title") is-invalid @enderror" name="description"  id="description" rows="8"  placeholder="Descrizione...">{{old("description")}}</textarea>
                @error('description')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="price">Prezzo</label>
                <input type="number" class="form-control @error("title") is-invalid @enderror" id="price"   name="price"  placeholder="Digita il prezzo" value="{{old("price")}}">
                @error('price')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="image">Immagine</label>
                <input type="text" class="form-control @error("title") is-invalid @enderror" id="image"   name="image"  placeholder="Inserisci l'url dell'immagine" value="{{old("image")}}">
                @error('image')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
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