@extends('layouts.main')
@section('title')| Главная @stop
@section('content')
    <h1>Это сайт новостей</h1>
    <x-alert :type="request()->get('type', 'danger')" message="Сайт в процессе разработки"></x-alert>
    <x-alert type="warning" message="Пользуйтесь аккуратно=)"></x-alert>
@endsection
