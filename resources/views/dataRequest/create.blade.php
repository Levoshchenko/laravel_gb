@extends('layouts.main')
@section('title')| Request data @stop
@section('content')
    <h1>Create article</h1>
    <form action="/request/store" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="phone">Phone</label><br>
            <input type="tel" name="phone" id="phone" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Email</label><br>
            <input type="email" name="email" id="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="description">Description</label><br>
            <textarea name="description" id="description" class="form-control"></textarea>
        </div>
        <input type="submit" value="Create" class="btn btn-success">
    </form>
@endsection
