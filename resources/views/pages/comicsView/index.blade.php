@extends('layouts.app')

@section('title', 'Comics Read Index')


@section('main')
<main>
    <h2 class="pageHeader">Lista Fumetti</h2>
    <div class="container">
        @foreach($comics as $element)
        <div class="card">
            <img src="{{$element['thumb']}}" alt="{{$element['thumb']}}">
            <a href="{{route('comics.show', ['comic' => $element['id']])}}">
                <h2>{{$element['title']}}</h2>
            </a>
            <div class="textContainer">
                <h5>Description: </h5>
                <p>{{$element['description']}}</p>

            </div>
            <h3>Serie: {{$element['series']}}</h3>
            <h3>${{$element['price']}}</h3>
            <form action="{{route('comics.destroy', $element->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </div>
        @endforeach
    </div>
        <a class="button" role="button" href="{{route('comics.create')}}">Inserisci nuovo</a>
</main>
@endsection