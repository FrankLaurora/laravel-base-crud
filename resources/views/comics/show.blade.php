@extends('layout.base')

@section('pageContent')
    <h1>Titolo: {{$comic['title']}}</h1>
    <h2>Serie: {{$comic['series']}}</h2>
    <p><strong>Descrizione:</strong> {{$comic['description']}}</p>
    <h3>Data d'uscita: {{$comic['sale_date']}}</h3>
    <h3>Prezzo: {{$comic['price']}}</h3>
    <h4>Formato: {{$comic['type']}}</h4>
@endsection