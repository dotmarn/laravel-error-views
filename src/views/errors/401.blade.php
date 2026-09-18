@extends('errors::layout')

@section('page-title', '401::'.__(config('laravel-error-views.title.401')))

@section('title', __(config('laravel-error-views.title.401')))

@section('logo')
    <img src="{{ asset('vendor/laravel-error-views/svg/401.svg') }}" alt="401" class="mb-4">
@endsection

@section('message', __(config('laravel-error-views.message.401')))
