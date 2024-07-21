<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com?plugins=typography,aspect-ratio"></script>
</head>

<body class="bg-white">
    <div class="container mx-auto">
        <div class="grid h-screen place-items-center mx-4">
            <div class="text-center">
                @yield('logo')
                <div class="space-y-5">
                    <h2 class="font-semibold text-xl {{ config('laravel-error-views.colors.text.title') }}">
                        @yield('title')</h2>

                    <p class="font-normal {{ config('laravel-error-views.colors.text.message') }}">@yield('message')</p>

                    <div class="flex justify-center">
                        <a href="{{ URL::previous() }}"
                            class="{{ config('laravel-error-views.colors.button.text') }} flex items-center space-x-1 font-semibold">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                            </svg>
                            <span>
                                {{ __('Go Back') }}
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
