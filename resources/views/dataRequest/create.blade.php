@extends('layouts.main')
@section('title')| Запрос данных @stop
@section('content')
    <h1>Найти статью</h1>
    <form action="/request/store" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Имя</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="phone">Телефон</label><br>
            <input type="tel" name="phone" id="phone" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Почта</label><br>
            <input type="email" name="email" id="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="description">Описание</label><br>
            <textarea name="description" id="description" class="form-control"></textarea>
        </div>
        <input type="submit" value="Найти" class="btn btn-success">
    </form>
@endsection
