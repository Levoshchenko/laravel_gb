@extends('layouts.main')
@section('title')| Создать статью @stop
@section('content')
<h1>Создать статью</h1>
<form action="/create">
    <label>Название
        <input type="text">
    </label><br>
    <label>Описание
        <textarea></textarea>
    </label><br>
    <label>Краткое описание
        <textarea></textarea>
    </label><br>
    <label>Категории
        <select>
            <option>Спорт</option>
            <option>Игры</option>
            <option>Фильмы</option>
            <option>Наука</option>
            <option>Культура</option>
        </select>
    </label><br>
    <input type="submit" value="Создать">
</form>
@endsection
