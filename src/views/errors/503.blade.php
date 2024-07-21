@extends('errors::layout')

@section('page-title', '503::'.__(config('laravel-error-views.title.503')))

@section('title', __(config('laravel-error-views.title.503')))

@section('logo')
    <img src="{{ asset('vendor/laravel-error-views/svg/503.svg') }}" alt="503" class="mb-4">
@endsection

@section('message', __(config('laravel-error-views.message.503')))