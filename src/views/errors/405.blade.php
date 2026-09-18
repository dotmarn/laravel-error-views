@extends('errors::layout')

@section('page-title', '405::'.__(config('laravel-error-views.title.405')))

@section('title', __(config('laravel-error-views.title.405')))

@section('logo')
    <img src="{{ asset('vendor/laravel-error-views/svg/405.svg') }}" alt="405" class="mb-4">
@endsection

@section('message', __(config('laravel-error-views.message.405')))
