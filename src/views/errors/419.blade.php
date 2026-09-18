@extends('errors::layout')

@section('page-title', '419::'.__(config('laravel-error-views.title.419')))

@section('title', __(config('laravel-error-views.title.419')))

@section('logo')
    <img src="{{ asset('vendor/laravel-error-views/svg/419.svg') }}" alt="419" class="mb-4">
@endsection

@section('message', __(config('laravel-error-views.message.419')))
