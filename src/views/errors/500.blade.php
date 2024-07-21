@extends('errors::layout')

@section('page-title', '500::'.__(config('laravel-error-views.title.500')))

@section('title', __(config('laravel-error-views.title.500')))

@section('logo')
    <img src="{{ asset('vendor/laravel-error-views/svg/500.svg') }}" alt="500" class="mb-4">
@endsection

@section('message', __(config('laravel-error-views.message.500')))