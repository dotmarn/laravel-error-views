@extends('errors::layout')

@section('page-title', '404::'.config('laravel-error-views.title.404'))

@section('title', __(config('laravel-error-views.title.404')))

@section('logo')
    <img src="{{ asset('vendor/laravel-error-views/svg/404.svg') }}" alt="404" class="mb-4">
@endsection

@section('message', __(config('laravel-error-views.message.404')))