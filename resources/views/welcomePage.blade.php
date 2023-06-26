@extends('layouts.main')
@section('title')| Main @stop
@section('content')
    <h1>This is the main page of this news platform</h1>
    <x-alert :type="request()->get('type', 'danger')" message="This website is in development stage"></x-alert>
    <x-alert type="warning" message="Please use with caution"></x-alert>
@endsection
