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

            <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                <ul class="grid grid-cols-3 -mb-px text-sm font-medium text-center dark:text-gray-400" id="tabExample" role="tablist">
                    <li role="presentation">
                        <button class="w-full p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="all-tab" type="button" role="tab" aria-controls="all" aria-selected="false">All</button>
                    </li>
                    <li role="presentation">
                        <button class="w-full p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="expenses-tab" type="button" role="tab" aria-controls="expenses" aria-selected="false">Expenses</button>
                    </li>
                    <li role="presentation">
                        <button class="w-full p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="incomes-tab" type="button" role="tab" aria-controls="incomes" aria-selected="false">Incomes</button>
                    </li>
                </ul>
            </div>
            <div id="tabContentExample">
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="all" role="tabpanel" aria-labelledby="all-tab">
                    <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Profile tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
                </div>
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="expenses" role="tabpanel" aria-labelledby="expenses-tab">
                    <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Dashboard tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
                </div>
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="incomes" role="tabpanel" aria-labelledby="incomes-tab">
                    <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Settings tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
