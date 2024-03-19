@extends('layouts.app')

@section('title', 'Edit product')

@section('main')
<main>
    <h1 class="pageHeader">Edit product</h1>
    <form action="{{route('comics.update', $comic->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="ComicTitle">Comic Title</label>
           <input value="{{old('title') ?? $comic->title}}" type="text" name="title" id="ComicTitle">

        </div>
        <div>
            <label for="description">Comic Desc.</label>
           <textarea name="description" id="description" rows="3">
            {{old('description') ?? $comic->description}}
           </textarea>
        </div>
<div>
    <label for="thumb">Comic Image</label>
   <input value="{{old('thumb') ?? $comic->thumb}}" type="text" name="thumb" id="thumb" placeholder="e.g https://www.thisformat">

</div>
<div>
    <label for="price">Comic Price</label>
   <input value="{{old('price') ?? $comic->price}}" type="number" name="price" id="price" min="0.01" placeholder="e.g 10.99" step="0.01" required>

</div>
<div>
    <label for="series">Comic Serie</label>
    <input value="{{old('series') ?? $comic->series}}" type="text" name="series" id="series" placeholder="e.g Batman">

</div>
<div>
    <label for="sale_date">Data Uscita: </label>
   <input value="{{old('sale_date') ?? $comic->sale_date}}" type="text" name="sale_date" placeholder="YYYY-MM-DD" pattern="\d{4}-\d{2}-\d{2}" title="sale_date" required>

</div>
<div>
    <label for="type">Comic Type</label>
    <input  value="{{old('type') ?? $comic->type}}" type="text" name="type" id="type" placeholder="e.g Graphic Novel">

</div>

        <button type="submit">Inserisci</button>
    </form>
</main>
@endsection