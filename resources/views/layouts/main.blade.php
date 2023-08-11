<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>bookstore</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">


</head>
<body>


<div class="bg-gray-100 font-sans w-full min-h-0 m-0">
    <div class="bg-dark shadow">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between py-4">

                <div>
                    <a href="{{ route('home') }}"><h1 class="font-bold text-3xl text-purple-600">bookstore</h1></a>
                </div>

                {{--<div class="hidden sm:flex sm:items-center">--}}
                {{--    <a href="{{ route('home') }}" class="text-gray-800 text-lg font-bold hover:text-purple-600 mr-6">Home</a>--}}
                {{--    <a href="{{ route('dashboard') }}" class="text-gray-800 text-lg font-bold hover:text-purple-600 mr-6">Dashboard</a>--}}
                {{--</div>--}}

                <div class="hidden sm:flex sm:items-center">
                    @auth
                        <a href="{{ route('dashboard') }}"
                           class="text-gray-800 text-lg font-semibold hover:text-purple-600 mr-4">Profile</a>
                        <a href="{{ route('logout') }}"
                           class="text-gray-800 text-lg font-semibold border px-4 py-2 rounded-lg hover:text-purple-600 hover:border-purple-600">Log out</a>
                    @else
                        <a href="{{ route('login') }}"
                           class="text-gray-800 text-lg font-semibold hover:text-purple-600 mr-4">Sign in</a>
                        <a href="{{ route('register') }}"
                           class="text-gray-800 text-lg font-semibold border px-4 py-2 rounded-lg hover:text-purple-600 hover:border-purple-600">Sign up</a>
                    @endauth
                </div>

                <div class="sm:hidden cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-purple-600" viewBox="0 0 24 24">
                        <path fill="currentColor"
                              d="M12.9499909,17 C12.7183558,18.1411202 11.709479,19 10.5,19 C9.29052104,19 8.28164422,18.1411202 8.05000906,17 L3.5,17 C3.22385763,17 3,16.7761424 3,16.5 C3,16.2238576 3.22385763,16 3.5,16 L8.05000906,16 C8.28164422,14.8588798 9.29052104,14 10.5,14 C11.709479,14 12.7183558,14.8588798 12.9499909,16 L20.5,16 C20.7761424,16 21,16.2238576 21,16.5 C21,16.7761424 20.7761424,17 20.5,17 L12.9499909,17 Z M18.9499909,12 C18.7183558,13.1411202 17.709479,14 16.5,14 C15.290521,14 14.2816442,13.1411202 14.0500091,12 L3.5,12 C3.22385763,12 3,11.7761424 3,11.5 C3,11.2238576 3.22385763,11 3.5,11 L14.0500091,11 C14.2816442,9.85887984 15.290521,9 16.5,9 C17.709479,9 18.7183558,9.85887984 18.9499909,11 L20.5,11 C20.7761424,11 21,11.2238576 21,11.5 C21,11.7761424 20.7761424,12 20.5,12 L18.9499909,12 Z M9.94999094,7 C9.71835578,8.14112016 8.70947896,9 7.5,9 C6.29052104,9 5.28164422,8.14112016 5.05000906,7 L3.5,7 C3.22385763,7 3,6.77614237 3,6.5 C3,6.22385763 3.22385763,6 3.5,6 L5.05000906,6 C5.28164422,4.85887984 6.29052104,4 7.5,4 C8.70947896,4 9.71835578,4.85887984 9.94999094,6 L20.5,6 C20.7761424,6 21,6.22385763 21,6.5 C21,6.77614237 20.7761424,7 20.5,7 L9.94999094,7 Z M7.5,8 C8.32842712,8 9,7.32842712 9,6.5 C9,5.67157288 8.32842712,5 7.5,5 C6.67157288,5 6,5.67157288 6,6.5 C6,7.32842712 6.67157288,8 7.5,8 Z M16.5,13 C17.3284271,13 18,12.3284271 18,11.5 C18,10.6715729 17.3284271,10 16.5,10 C15.6715729,10 15,10.6715729 15,11.5 C15,12.3284271 15.6715729,13 16.5,13 Z M10.5,18 C11.3284271,18 12,17.3284271 12,16.5 C12,15.6715729 11.3284271,15 10.5,15 C9.67157288,15 9,15.6715729 9,16.5 C9,17.3284271 9.67157288,18 10.5,18 Z"/>
                    </svg>
                </div>
            </div>

            <div class="block sm:hidden bg-white border-t-2 py-2">
                <div class="flex flex-col">
                    {{--<a href="{{ route('home') }}" class="text-gray-800 text-sm font-semibold hover:text-purple-600 mb-1">Home</a>--}}
                    {{--<a href="{{ route('dashboard') }}" class="text-gray-800 text-sm font-semibold hover:text-purple-600 mb-1">Dashboard</a>--}}
                    <div class="flex justify-between items-center border-t-2 pt-2">
                        <a href="{{ route('login') }}" class="text-gray-800 text-sm font-semibold hover:text-purple-600 mr-4">Sign in</a>
                        <a href="{{ route('register') }}"
                           class="text-gray-800 text-sm font-semibold border px-4 py-1 rounded-lg hover:text-purple-600 hover:border-purple-600">Sign
                            up</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{ $slot }}

<!-- Foooter -->
<section class="bg-gray-100 mt-6">
    <div class="bg-gray-100  max-w-screen-xl px-4 py-12 mx-auto space-y-8 overflow-hidden sm:px-6 lg:px-8">
        <nav class="flex flex-wrap justify-center -mx-5 -my-2">
            {{--<div class="px-5 py-2">--}}
            {{--    <a href="{{ route('home') }}" class="text-base font-bold leading-6 text-gray-500 hover:text-purple-600">--}}
            {{--        Home--}}
            {{--    </a>--}}
            {{--</div>--}}
            {{--<div class="px-5 py-2">--}}
            {{--    <a href="{{ route('dashboard') }}" class="text-base font-bold leading-6 text-gray-500 hover:text-purple-600">--}}
            {{--        Dashboard--}}
            {{--    </a>--}}
            {{--</div>--}}
        </nav>
        <div class="flex justify-center mt-8 space-x-6">
            <a href="#" class="text-gray-400 hover:text-gray-500">
                <span class="sr-only">Facebook</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd"
                          d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                          clip-rule="evenodd"></path>
                </svg>
            </a>
            <a href="#" class="text-gray-400 hover:text-gray-500">
                <span class="sr-only">GitHub</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd"
                          d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                          clip-rule="evenodd"></path>
                </svg>
            </a>
        </div>
        <p class="mt-3 text-base leading-6 text-center text-gray-400">
            © 2023 bookstore by Pasha :)
        </p>
    </div>
</section>

</body>
</html>
