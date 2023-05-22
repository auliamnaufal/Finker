<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Landing Page</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css'])

    <!-- Styles -->
    <style>

    </style>
</head>

<body class="bg-gradient-to-l from-blue-300 to-white">
    <nav class="p-1 bg-transparent grid grid-cols-2 ">

        <div>
            <img class="h-28 ml-20" src="{{ asset('img/logo.png') }}" alt="">
        </div>

        <div class="flex mt-6 ml-96 mr-20 h-16 ">
            <button class=" px-5 py-2  text-white font-semibold font-inter block  hover:text-slate-100 flex-1 m-1">
               <a href="{{ route('login') }}">Log In</a></button>

            <button
                class="px-5 border border-white rounded-lg  text-white hover:text-slate-300 hover:bg-white hover:duration-500 transition-all ease-linear font-semibold font-inter block flex-1 m-1">
                 <a href="{{ route('register') }}">Sign Up</a></button>

        </div>


    </nav>
    <section class="grid grid-cols-2">
        <div>
            <h1 class="text-4xl font-bold  mt-28 ml-28 text-slate-700 "> Save money,<br> without thinking <br> about it.
            </h1>
            <p class="mt-10 ml-28 text-light text-slate-400">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Aspernatur inventore <br> enim provident corrupti facilis assumenda totam laborum nesciunt nostrum, <br>
                quaerat rerum obcaecati nisi, illum quibusdam. Dicta nesciunt qui facilis delectus.</p>
            <button
                class="bg-sky-400 px-5 py-2  rounded-full text-white font-semibold font-inter block  transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-110 hover:bg-sky-500 duration-300 ml-28 mt-10">
                <a href="{{ route('register') }}">Sign Up Now</a> </button>
        </div>
        <div>
            <img class="  ml-28 " src="{{ asset('img/gambar.png') }}" alt="">
        </div>
    </section>
</body>

</html>