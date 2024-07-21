@extends('errors::layout')

@section('page-title', '403::'.config('laravel-error-views.title.403'))

@section('title', __(config('laravel-error-views.title.403')))

@section('logo')
    <img src="{{ asset('vendor/laravel-error-views/svg/403.svg') }}" alt="403" class="mb-4">
@endsection

@section('message', __(config('laravel-error-views.message.403')))