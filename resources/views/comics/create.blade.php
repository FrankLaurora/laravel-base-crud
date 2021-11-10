@extends('layout.base')
@section('pageContent')
    <main class="container">
        <form action="{{route('comics.store')}}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci il nome dell'albo">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" id="description" name="description" rows="3" placeholder="Inserisci la descrizione"></textarea>
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">URL cover</label>
                <input type="text" class="form-control" id="thumb" name="thumb" placeholder="inserisci l'indirizzo dell'immagine">
            </div>  
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="number" class="form-control" id="price" name="price" placeholder="Inserisci il prezzo">
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control" id="series" name="series" placeholder="Inserisci il nome della serie">
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Data d'uscita</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date">
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Tipo di albo</label>
                <input type="text" class="form-control" id="type" name="type" placeholder="Inserisci il tipo di prodotto">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </main>
@endsection