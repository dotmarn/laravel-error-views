@extends('errors::layout')

@section('title', '503 - '.config('laravel-error-views.title.503'))

@section('logo')
    <img src="{{ asset('vendor/laravel-error-views/svg/503.svg') }}" alt="503" class="mb-4">
@endsection

@section('message', config('laravel-error-views.message.503'))