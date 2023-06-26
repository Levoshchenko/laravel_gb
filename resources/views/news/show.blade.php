@extends('layouts.main')
@section('title')| {{ $article['title'] }} @stop
@section('content')
<article class="blog-post">
    <h2 class="display-5 link-body-emphasis mb-1">{{ $article['title'] }}</h2>
    <p>{{ $article['short_description'] }}</p>
    <hr>
    <p>{{ $article['description'] }}</p>
</article>
@endsection
