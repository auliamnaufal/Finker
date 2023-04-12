<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center space-x-4">
            <img class="w-10 h-10 rounded-full" src="{{ asset('assets/images/avatar.jpg')  }}" alt="">
            <div class="font-medium dark:text-white">
                <div>Naufal Aulia</div>
                <div class="text-sm text-gray-500 dark:text-gray-400">Last activity in 13.00 today</div>
            </div>
        </div>
    </x-slot>

    <div class="pb-20">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mt-2">
                <h2 class="text-xl font-bold text-center mb-2">Breakdown</h2>
                <livewire:dashboard-breakdown/>

                <div class="mt-2 grid grid-cols-2 gap-5">
                    <div class="bg-green-200 rounded-lg p-4">
                        <div class="flex justify-center items-center bg-green-400 rounded-full w-8 h-8">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 4.5l-15 15m0 0h11.25m-11.25 0V8.25" />
                            </svg>
                        </div>
                        <h3 class="font-light text-sm text-gray-600 mb-4 mt-2">Total Income</h3>
                        <div class="flex items-center space-x-1">
                            <span class="font-light text-sm text-gray-500">$</span>
                            <h4 class="text-2xl font-bold text-black">10000.00</h4>
                        </div>
                    </div>
                    <div class="bg-red-200 rounded-lg p-4">
                        <div class="flex justify-center items-center bg-red-400 rounded-full w-8 h-8">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 text-white">
                                <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 01.75.75v11.25a.75.75 0 01-1.5 0V6.31L5.03 20.03a.75.75 0 01-1.06-1.06L17.69 5.25H8.25a.75.75 0 010-1.5z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <h3 class="font-light text-sm text-gray-600 mb-4 mt-2">Total Expense</h3>
                        <div class="flex items-center space-x-1">
                            <span class="font-light text-sm text-gray-500">$</span>
                            <h4 class="text-2xl font-bold text-black">10000.00</h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-8">
                <h2 class="text-xl font-bold">Recent Transaction</h2>

                <div class="px-2 mt-4 space-y-4 divide-y divide-gray-200">

                    <div class="grid grid-cols-6 items-center pt-4">
                        <div class="w-12 h-12 bg-pink-300 rounded-lg flex justify-center items-center ">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-pink-500">
                                <path fill-rule="evenodd" d="M7.5 6v.75H5.513c-.96 0-1.764.724-1.865 1.679l-1.263 12A1.875 1.875 0 004.25 22.5h15.5a1.875 1.875 0 001.865-2.071l-1.263-12a1.875 1.875 0 00-1.865-1.679H16.5V6a4.5 4.5 0 10-9 0zM12 3a3 3 0 00-3 3v.75h6V6a3 3 0 00-3-3zm-3 8.25a3 3 0 106 0v-.75a.75.75 0 011.5 0v.75a4.5 4.5 0 11-9 0v-.75a.75.75 0 011.5 0v.75z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="col-span-4">
                            <h3 class="font-bold text-black">Jalan</h3>
                            <p class="font-light text-sm text-gray-500">Wed, 12 Apr 2023</p>
                        </div>
                        <p class="font-semibold text-black">
                            $20.00
                        </p>
                    </div>

                    <div class="grid grid-cols-6 items-center pt-4">
                        <div class="w-12 h-12 bg-blue-300 rounded-lg flex justify-center items-center ">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-blue-500">
                                <path d="M12 9a3.75 3.75 0 100 7.5A3.75 3.75 0 0012 9z" />
                                <path fill-rule="evenodd" d="M9.344 3.071a49.52 49.52 0 015.312 0c.967.052 1.83.585 2.332 1.39l.821 1.317c.24.383.645.643 1.11.71.386.054.77.113 1.152.177 1.432.239 2.429 1.493 2.429 2.909V18a3 3 0 01-3 3h-15a3 3 0 01-3-3V9.574c0-1.416.997-2.67 2.429-2.909.382-.064.766-.123 1.151-.178a1.56 1.56 0 001.11-.71l.822-1.315a2.942 2.942 0 012.332-1.39zM6.75 12.75a5.25 5.25 0 1110.5 0 5.25 5.25 0 01-10.5 0zm12-1.5a.75.75 0 100-1.5.75.75 0 000 1.5z" clip-rule="evenodd" />
                            </svg>

                        </div>
                        <div class="col-span-4">
                            <h3 class="font-bold text-black">Jajan</h3>
                            <p class="font-light text-sm text-gray-500">Wed, 12 Apr 2023</p>
                        </div>
                        <p class="font-semibold text-black">
                            $20.00
                        </p>
                    </div>

                    <div class="grid grid-cols-6 items-center pt-4">
                        <div class="w-12 h-12 bg-green-300 rounded-lg flex justify-center items-center ">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-green-500">
                                <path fill-rule="evenodd" d="M12.516 2.17a.75.75 0 00-1.032 0 11.209 11.209 0 01-7.877 3.08.75.75 0 00-.722.515A12.74 12.74 0 002.25 9.75c0 5.942 4.064 10.933 9.563 12.348a.749.749 0 00.374 0c5.499-1.415 9.563-6.406 9.563-12.348 0-1.39-.223-2.73-.635-3.985a.75.75 0 00-.722-.516l-.143.001c-2.996 0-5.717-1.17-7.734-3.08zm3.094 8.016a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="col-span-4">
                            <h3 class="font-bold text-black">Proteksi</h3>
                            <p class="font-light text-sm text-gray-500">Wed, 12 Apr 2023</p>
                        </div>
                        <p class="font-semibold text-black">
                            $20.00
                        </p>
                    </div>

                </div>
            </div>

        </div>
    </div>
</x-app-layout>
