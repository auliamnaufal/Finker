<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-start items-center space-x-5">
            <img src="{{ asset('assets/images/avatar.jpg') }}" alt="" class="w-14 h-14 object-cover object-center rounded-full shadow-lg">
            <h1 class="text-lg font-bold">Muhammad Naufal Aulia</h1>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-5 border border-gray-100 dark:bg-gray-800 overflow-hidden shadow-lg sm:rounded-lg space-y-2">
               <p class="text-sm font-light">Available Balance</p>
                <div class="w-full flex justify-start items-center space-x-2">
                    <p class="text-xl font-bold text-gray-800">$</p>
                    <h2 class="text-3xl font-extrabold text-black">5,000.00</h2>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
