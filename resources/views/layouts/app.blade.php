<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Forum') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/tailwind.css') }}" rel="stylesheet">
</head>
<body>
    <div class="h-screen" style="background-image:url({{asset('images/repeat-back.png')}}) ">
        <header class="px-64 bg-white shadow">
            <div class="flex items-baseline justify-between py-3">
                <div class="site-name">
                    <a href="#" class="inline-block bg-blue-900 text-white mx-auto w-12
                                text-center py-3 px-2 font-bold rounded-full">
                        {{__('B')}}
                    </a>
                </div>
                <div>
                    <a href="#" class="inline-block font-bold text-gray-900
                      border-r-2 pr-2 border-dotted border-gray-500 text-xs">Logout</a>
                    <a href="#" class="inline-block font-bold text-gray-900 pl-2 text-xs">Profile</a>
                </div>
            </div>
            <nav class="border-t py-3 text-xs font-bold text-gray-600">
                <a href="#" class="inline-block mr-3">Home</a>
                <a href="#" class="inline-block mr-3">Categories</a>
                <a href="#" class="inline-block mr-3">Tags</a>
                <a href="#" class="inline-block mr-3">Posts</a>
                <a href="#" class="inline-block mr-3">Users</a>
                <a href="#" class="inline-block mr-3">Settings</a>
                <a href="#" class="inline-block ">Trash</a>
            </nav>
        </header>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
