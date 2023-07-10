<?php
@extends('layouts.admin')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Редактировать источник</h1>
    </div>
    @if ($errors->any())
        @foreach($errors->all() as $error)
            <x-alert type="danger" :message="$error"></x-alert>
        @endforeach
    @endif
    <form method="post"
          action="{{ route('admin.data-sources.update', ['data_source' => $data_source]) }}"
          enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="name">Заголовок</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $data_source->name }}"/>
            @error('name') <strong style="color:red" type="danger" >{{$message}}</strong> @enderror
        </div>
        <div class="form-group">
            <label for="description">Описание</label>
            <textarea class="form-control" name="description" id="description">{!! $data_source->description !!}</textarea>
        </div>
        <br />
        <button type="submit" class="btn btn-success">Cохранить</button>
    </form>
@endsection
