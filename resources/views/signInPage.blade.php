@extends('layouts.main')
@section('title')| Войти @stop
@section('content')
<link href="{{ asset('assets/css/sign-in.css') }}" rel="stylesheet">
<div class="d-flex align-items-center py-4 form-signin">
    <form action="/signin">
        <h1 class="h3 mb-3 fw-normal">Войти</h1>

        <div class="form-floating">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Логин</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Пароль</label>
        </div>

        <div class="form-check text-start my-3">
            <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                Запомнить
            </label>
        </div>
        <input class="btn btn-primary w-100 py-2" type="submit" value="Войти">
    </form>
</div>
@endsection
