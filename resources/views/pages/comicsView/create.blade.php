@extends('layouts.app')

@section('title', 'Create new product')

@section('main')
<main>
    <h1 class="pageHeader">Create new product</h1>
    @if ($errors->any())
    <div class="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <form action="{{route('comics.store')}}" method="POST">
        @csrf
        <div>
            <label for="ComicTitle">Comic Title</label>
           <input type="text" name="title" id="ComicTitle" required>

        </div>
        <div>
            <label for="description">Comic Desc.</label>
           <input type="text" name="description" id="description">

        </div>
<div>
    <label for="thumb">Comic Image</label>
   <input type="text" name="thumb" id="thumb" placeholder="e.g https://www.thisformat" required>

</div>
<div>
    <label for="price">Comic Price</label>
   <input type="number" name="price" id="price" min="0.01" placeholder="e.g 10.99" step="0.01" required>

</div>
<div>
    <label for="series">Comic Serie</label>
    <input type="text" name="series" id="series" placeholder="e.g Batman">

</div>
<div>
    <label for="sale_date">Data Uscita: </label>
   <input type="text" name="sale_date" placeholder="YYYY-MM-DD" pattern="\d{4}-\d{2}-\d{2}" title="sale_date" required>

</div>
<div>
    <label for="type">Comic Type</label>
    <input type="text" name="type" id="type" placeholder="e.g Graphic Novel">

</div>

        <button type="submit">Inserisci</button>
    </form>
</main>
@endsection