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

<body class="min-h-screen bg-no-repeat bg-gradient-to-l from-blue-300 to-white bg-fill bg-center max-w-7xl mx-auto">
    <div class="">

        <nav class=" p-1 bg-transparent flex justify-between items-center">
            <div class="">
                <img class=" h-14 ml-8 mt-6 lg:h-28 md:h-20 sm:h-16" src="{{ asset('img/logo.png') }}" alt="">
            </div>

            @auth
            <div class=" h-1 mr-5 lg:mr-20 lg:h-16  md:mr-12 md:h-12 sm:mb-8 sm:mr-7 md:mt-8  grid grid-cols-2 ">
                    <button class="px-5 py-2 mt-3 text-white text-xs sm:text-sm  font-semibold font-inter block  hover:text-slate-100 flex-1 m-1  ">
                    <a href="{{ route('dashboard') }}">Dashboard</a></button>
                </div>
            @else
                <div class=" h-1 mr-5 lg:mr-20 lg:h-16  md:mr-12 md:h-12 sm:mb-8 sm:mr-7 md:mt-8  grid grid-cols-2 ">
                    <button class="px-5 py-2 mt-3 text-white text-xs sm:text-sm  font-semibold font-inter block  hover:text-slate-100 flex-1 m-1  ">
                    <a href="{{ route('login') }}">Log In</a></button>
        
                    <button
                        class="px-5 py-2 border border-white rounded-lg  text-white text-xs sm:text-sm  hover:text-slate-300 hover:bg-white hover:duration-500 transition-all ease-linear font-semibold font-inter block flex-1 m-1">
                        <a href="{{ route('register') }}">Sign Up</a></button>
                </div>

            @endauth
    
    
    
        </nav>
        <section class="grid grid-cols-2 mt-5 justify-items-center sm:justify-normal">
            <div class="flex flex-col items-center sm:items-start col-span-2 sm:col-span-1 mt-10">
                <h1 class="text-center sm:text-left w-2/3 mx-auto md:text-4xl sm:text-2xl text-xl font-bold  lg:mt-28 lg:ml-28 md:mt-16 md:ml-20 sm:ml-16 sm:mt-10 text-slate-700 "> Save money,without thinking about it.
                </h1>
                <p class="text-center sm:text-left mt-5 ml-5 lg:mt-10 lg:ml-28 text-light text-slate-400 md:mt-8 md:ml-20 sm:mt-8 sm:ml-16 text-xs sm:text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Aspernatur inventore <br> enim provident corrupti facilis assumenda totam laborum nesciunt nostrum, <br>
                    quaerat rerum obcaecati nisi, illum quibusdam. Dicta nesciunt qui facilis delectus.</p>
                <button
                    class="w-40 mt-5 ml-5 bg-sky-400 px-5 py-2 md:text-xs rounded-full text-white font-semibold font-inter transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-110 hover:bg-sky-500 duration-300 lg:ml-28 lg:mt-10 md:mt-8 md:ml-20 sm:ml-16 sm:mt-5">
                    <a href="{{ route('register') }}">Sign Up Now</a> </button>
            </div>
            <div class="mt-20 flex justify-center col-span-2 sm:col-span-1">
                <img class="w-2/3 object-contain object-center" src="{{ asset('img/gambar.png') }}" alt="">
            </div>
        </section>
    </div>
</body>



</html>