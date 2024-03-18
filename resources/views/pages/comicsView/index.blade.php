@extends('layouts.app')

@section('title', 'Comics Read Index')


@section('main')
<main>
    <h2>Index di Comics</h2>
    <div class="container">
        @foreach($comics as $element)
        <div class="card">
            <img src="{{$element['thumb']}}" alt="{{$element['thumb']}}">
            <h2>{{$element['title']}}</h2>
            <p>{{$element['description']}}</p>
            <h3>{{$element['series']}}</h3>
            <h3>{{$element['price']}}</h3>
        </div>
        @endforeach
    </div>
</main>
@endsection