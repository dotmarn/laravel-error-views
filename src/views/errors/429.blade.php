@extends('errors::layout')

@section('page-title', '429::'.__(config('laravel-error-views.title.429')))

@section('title', __(config('laravel-error-views.title.429')))

@section('logo')
    <img src="{{ asset('vendor/laravel-error-views/svg/429.svg') }}" alt="429" class="mb-4">
@endsection

@section('message', __(config('laravel-error-views.message.429')))
