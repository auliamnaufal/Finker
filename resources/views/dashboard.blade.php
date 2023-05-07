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

                    <x-transaction-item amount="20" type="expense" name="Baju Uniqlo" date="Wed, 12 Apr 2023" />
                    <x-transaction-item amount="12" type="income" name="Baju Uniqlo" date="Wed, 12 Apr 2023" />


                </div>
            </div>

        </div>
    </div>
</x-app-layout>
