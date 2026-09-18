<!DOCTYPE html>
@php
    $navigation = config('laravel-error-views.navigation', []);
    $previousUrl = url()->previous();
    $previousHost = parse_url($previousUrl, PHP_URL_HOST);
    $isSameOrigin = $previousHost === request()->getHost();
    $isCurrentPage = rtrim($previousUrl, '/') === rtrim(request()->fullUrl(), '/');
    $showBackLink = $navigation['show_back_link'] ?? true;
    $legacyColors = [
        'text-gray-700' => '#374151',
        'text-gray-500' => '#6B7280',
        'text-purple-600' => '#9333EA',
    ];
    $titleColor = config('laravel-error-views.theme.title_color')
        ?: ($legacyColors[config('laravel-error-views.colors.text.title')] ?? '#374151');
    $messageColor = config('laravel-error-views.theme.message_color')
        ?: ($legacyColors[config('laravel-error-views.colors.text.message')] ?? '#6B7280');
    $accentColor = config('laravel-error-views.theme.accent_color')
        ?: ($legacyColors[config('laravel-error-views.colors.button.text')] ?? '#9333EA');
@endphp
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page-title')</title>
    <link rel="stylesheet" href="{{ asset('vendor/laravel-error-views/error-views.css') }}">
    <style>
        :root {
            --laravel-error-views-title-color: {{ $titleColor }};
            --laravel-error-views-message-color: {{ $messageColor }};
            --laravel-error-views-accent-color: {{ $accentColor }};
        }
    </style>
</head>

<body>
    <main class="laravel-error-views-page">
        <section class="laravel-error-views-content" aria-labelledby="error-title">
            @yield('logo')
            <div class="laravel-error-views-copy">
                <h1 id="error-title" class="laravel-error-views-title">@yield('title')</h1>

                <p class="laravel-error-views-message">@yield('message')</p>

                <nav class="laravel-error-views-navigation" aria-label="{{ __('laravel-error-views::errors.navigation.home') }}">
                    @if ($navigation['show_home_link'] ?? true)
                        <a href="{{ $navigation['home_url'] ?? '/' }}" class="laravel-error-views-link">
                            {{ __($navigation['home_label'] ?? 'laravel-error-views::errors.navigation.home') }}
                        </a>
                    @endif

                    @if ($showBackLink && $isSameOrigin && ! $isCurrentPage)
                        <a href="{{ URL::previous() }}"
                            class="laravel-error-views-link">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                            </svg>
                            <span>{{ __($navigation['back_label'] ?? 'laravel-error-views::errors.navigation.back') }}</span>
                        </a>
                    @endif
                </nav>
            </div>
        </section>
    </main>
</body>

</html>
