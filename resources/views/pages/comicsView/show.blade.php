@extends('layouts.app')

@section('title' , 'DC Comics / Read Show')

@section('main')
<main>
    <div class="card">
        <img src="{{$comics['thumb']}}" alt="{{$comics['thumb']}}">
        <a href="{{route('comics.show', ['comic' => $comics['id']])}}">
            <h2>{{$comics['title']}}</h2>
        </a>
        <p>{{$comics['description']}}</p>
        <h3>{{$comics['series']}}</h3>
        <h3>{{$comics['price']}}</h3>
    </div>
</main>
@endsection