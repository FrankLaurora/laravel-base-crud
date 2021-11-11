@extends('layout.base')

@section('pageContent')
<main class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Serie</th>
                <th scope="col">Titolo</th>
                <th scope="col">Data d'uscita</th>
                <th scope="col">Descrizione</th>
                <th scope="col">Prezzo</th>
                <th scope="col">Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)    
                <tr>
                    <td>{{$comic['series']}}</td>
                    <td>{{$comic['title']}}</td>
                    <td>{{$comic['sale_date']}}</td>
                    <td>{{$comic['description']}}</td>
                    <td>{{$comic['price']}}</td>
                    <td>
                        <a href="{{route('comics.show', $comic['id'])}}"><button type="button" class="btn btn-success">Visualizza</button></a>
                        <a href="{{route('comics.edit', $comic['id'])}}"><button type="button" class="btn btn-warning">Modifica</button></a>
                        <form action="{{route('comics.destroy', $comic['id'])}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input class="btn btn-danger" type="submit" value="Elimina">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</main>
@endsection