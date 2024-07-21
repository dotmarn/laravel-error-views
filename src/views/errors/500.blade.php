@extends('errors::layout')

@section('title', '500 - '.config('laravel-error-views.title.500'))

@section('logo')
    <img src="{{ asset('vendor/laravel-error-views/svg/500.svg') }}" alt="500" class="mb-4">
@endsection

@section('message', config('laravel-error-views.message.500'))