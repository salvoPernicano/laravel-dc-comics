@extends('layouts.app')

@section('title' , 'DC Comics / Read Show')

@section('main')
<main>
    <div class="card">
            <h2>{{$comic['title']}}</h2>
        </a>
        <p>{{$comic['description']}}</p>

    </div>
</main>
@endsection