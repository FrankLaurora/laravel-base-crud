@extends('layout.base')
@section('pageContent')
    <main class="container">
        <form action="{{route('comics.update', $comic->id)}}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" value="{{old('title') ? old('title') : $comic->title}}" placeholder="Inserisci il nome dell'albo">
                @error('title')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" id="description" name="description" rows="3" placeholder="Inserisci la descrizione">{{old('description') ? old('description') : $comic->description}}</textarea>
                @error('description')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">URL cover</label>
                <input type="text" class="form-control" id="thumb" name="thumb" value="{{old('thumb') ? old('thumb') : $comic->thumb}}" placeholder="inserisci l'indirizzo dell'immagine">
                @error('thumb')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>  
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="number" class="form-control" id="price" name="price" value="{{old('price') ? old('price') : $comic->price}}" placeholder="Inserisci il prezzo">
                @error('price')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control" id="series" name="series" value="{{old('series') ? old('series') : $comic->series}}" placeholder="Inserisci il nome della serie">
                @error('series')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Data d'uscita</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{old('sale_date') ? old('sale_date') : $comic->sale_date}}">
                @error('sale_date')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Tipo di albo</label>
                <input type="text" class="form-control" id="type" name="type" value="{{old('type') ? old('type') : $comic->type}}" placeholder="Inserisci il tipo di prodotto">
                @error('type')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Modifica</button>
        </form>
    </main>
@endsection