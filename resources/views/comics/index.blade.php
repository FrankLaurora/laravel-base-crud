@extends('layout.base')

@section('pageContent')
<main class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Serie</th>
                <th scope="col">Titolo</th>
                <th scope="col">Data d'uscita</th>
                <th scope="col">Descrizione</th>
                <th scope="col">Prezzo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)    
                <tr>
                    <td><a href="{{route('comics.show', $comic['id'])}}">{{$comic['id']}}</a></td>
                    <td>{{$comic['series']}}</td>
                    <td>{{$comic['title']}}</td>
                    <td>{{$comic['sale_date']}}</td>
                    <td>{{$comic['description']}}</td>
                    <td>{{$comic['price']}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</main>
@endsection