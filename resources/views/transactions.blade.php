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
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" x-data="{ tab: 'all-tab' }">
            <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                <ul class="grid grid-cols-3 -mb-px text-sm font-medium text-center dark:text-gray-400">
                    <li>
                        <button
                            class="w-full p-4 border-b-2 rounded-t-lg"
                            id="all-tab" type="button"
                            :class="{
                                'border-blue-400 text-blue-400 hover:border-blue-600 hover:text-blue-600': tab === 'all-tab',
                                'border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300': tab !== 'all-tab'
                            }"
                            x-on:click.prevent="tab = 'all-tab'">All
                        </button>
                    </li>
                    <li>
                        <button
                            class="w-full p-4 border-b-2 rounded-t-lg"
                            id="expenses-tab" type="button"
                            :class="{
                                'border-blue-400 text-blue-400 hover:border-blue-600 hover:text-blue-600': tab === 'expenses-tab',
                                'border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300': tab !== 'expenses-tab'
                            }"
                            x-on:click.prevent="tab = 'expenses-tab'">
                            Expenses
                        </button>
                    </li>
                    <li role="presentation">
                        <button
                            class="w-full p-4 border-b-2 rounded-t-lg"
                            id="incomes-tab" type="button"
                            :class="{
                                'border-blue-400 text-blue-400 hover:border-blue-600 hover:text-blue-600': tab === 'incomes-tab',
                                'border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300': tab !== 'incomes-tab'
                            }"
                            x-on:click.prevent="tab = 'incomes-tab'">
                            Incomes
                        </button>
                    </li>
                </ul>
            </div>
            <div>
                <div x-show="tab === 'all-tab'"
                     class="p-4 rounded-lg bg-gray-50 dark:bg-gray-800 space-y-4 divide-y divide-gray-200"
                     id="all">

                    <livewire:transaction-list type="all" />

                </div>
                <div x-show="tab === 'expenses-tab'"
                     class="p-4 rounded-lg bg-gray-50 dark:bg-gray-800 space-y-4 divide-y divide-gray-200"
                     id="expenses">

                    <livewire:transaction-list type="expense" />


                </div>
                <div x-show="tab === 'incomes-tab'"
                     class="p-4 rounded-lg bg-gray-50 dark:bg-gray-800 space-y-4 divide-y divide-gray-200"
                     id="incomes">

                    <livewire:transaction-list type="income" />

                </div>
            </div>
        </div>

        <div>

        </div>
    </div>
</x-app-layout>
