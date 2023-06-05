<x-app-layout>
    <x-slot name="header">
        <div class="font-medium dark:text-white">
            <div>{{ $user->name }}</div>
            <div class="text-sm text-gray-500 dark:text-gray-400">Last Activity
                in {{ $user->transactions->last() ? date_format($user->transactions->last()->created_at, 'D, d M Y : H.m a') : '-' }}</div>
        </div>
    </x-slot>

    @can('isPro')
        <div class="pb-20">
            <div class="max-w-7xl mx-auto px-6 lg:px-8" x-data="{ tab: 'all-tab' }">
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
                         x-transition
                         x-transition:enter.duration.500ms
                         x-transition:leave.duration.200ms
                         class="p-4 rounded-lg bg-gray-50 dark:bg-gray-800 space-y-4 divide-y divide-gray-200"
                         id="all">

                        <livewire:transaction-list type="all"/>

                    </div>
                    <div x-show="tab === 'expenses-tab'"
                         x-transition
                         x-transition:enter.duration.500ms
                         x-transition:leave.duration.200ms
                         class="p-4 rounded-lg bg-gray-50 dark:bg-gray-800 space-y-4 divide-y divide-gray-200"
                         id="expenses">

                        <livewire:transaction-list type="expense"/>


                    </div>
                    <div x-show="tab === 'incomes-tab'"
                         x-transition
                         x-transition:enter.duration.500ms
                         x-transition:leave.duration.200ms
                         class="p-4 rounded-lg bg-gray-50 dark:bg-gray-800 space-y-4 divide-y divide-gray-200"
                         id="incomes">

                        <livewire:transaction-list type="income"/>

                    </div>
                </div>
            </div>

        </div>

    @else
        <div class="flex justify-center items-center flex-col mt-64">
            <h2 class="text-center text-lg font-medium mb-5">If you wanna use this features upgrade to pro!</h2>
            <a href="{{ route('settings') }}" class="bg-sky-400 rounded-md px-5 py-2 text-white hover:bg-sky-500 ">Upgrade
                Now</a>
        </div>

    @endcan


</x-app-layout>
