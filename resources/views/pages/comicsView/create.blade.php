@extends('layouts.app')

@section('title', 'Create new product')

@section('main')
<main>
    <h1>Create new product</h1>
    <form action="{{route('comics.store')}}" method="POST">
        @csrf
        <label for="ComicTitle">Comic Title</label>
       <input type="text" name="title" id="ComicTitle">

        <label for="description">Comic Desc.</label>
       <input type="text" name="description" id="description">

        <label for="thumb">Comic Image</label>
       <input type="text" name="thumb" id="thumb" placeholder="e.g https://www.thisformat">

        <label for="price">Comic Price</label>
       <input type="number" name="price" id="price" min="1.00" placeholder="e.g 10.99" required>

       <label for="series">Comic Serie</label>
       <input type="text" name="series" id="series" placeholder="e.g Batman">

        <label for="sale_date">Data Uscita: </label>
       <input type="text" name="sale_date" placeholder="YYYY-MM-DD" pattern="\d{4}-\d{2}-\d{2}" title="sale_date" required>

       <label for="type">Comic Type</label>
       <input type="text" name="type" id="type" placeholder="e.g Graphic Novel">

        <button type="submit">Inserisci</button>
    </form>
</main>
@endsection