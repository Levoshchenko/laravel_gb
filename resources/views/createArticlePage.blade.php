@extends('layouts.main')
@section('title')| Create article @stop
@section('content')
<h1>Create article</h1>
<form action="/create">
    <label>Title
        <input type="text">
    </label><br>
    <label>Description
        <textarea></textarea>
    </label><br>
    <label>Short description
        <textarea></textarea>
    </label><br>
    <label>Category
        <select>
            <option>Sports</option>
            <option>Video games</option>
            <option>Movies</option>
            <option>Tech</option>
            <option>Memes</option>
        </select>
    </label><br>
    <input type="submit" value="Create">
</form>
@endsection
