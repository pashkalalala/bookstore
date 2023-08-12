<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>bookstore</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
</head>
<body>
<div class="h-screen w-screen bg-gray-50 flex items-center">
    <div class="container ml-16 flex flex-col md:flex-row items-center justify-between px-5 text-gray-700">
        <div class="w-full lg:w-1/2 mx-8">
            <div class="text-7xl text-purple-600 font-dark font-extrabold mb-8"> 404</div>
            <p class="text-2xl md:text-3xl font-light leading-normal mb-8">
                {{ $exception->getMessage() }}
            </p>
            <a href="{{ route('home') }}" class="px-5 inline py-3 text-sm font-medium leading-5 shadow-2xl text-white transition-all duration-400 border border-transparent rounded-lg focus:outline-none bg-purple-600 active:bg-red-600 hover:bg-red-700">Back to homepage</a>
        </div>
        <div class="w-full lg:flex lg:justify-end lg:w-1/2 mx-5 my-12">
            <img src="https://user-images.githubusercontent.com/43953425/166269493-acd08ccb-4df3-4474-95c7-ad1034d3c070.svg" class="" alt="Page not found">
        </div>

    </div>
</div>

</body>
</html>
