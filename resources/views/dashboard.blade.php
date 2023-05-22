<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center space-x-4">
            <div class="font-medium dark:text-white">
                <div>{{ $user->name }}</div>
                <div class="text-sm text-gray-500 dark:text-gray-400">Last Activity in {{ $user->transactions->last() == null ? '' : date_format($user->transactions->last()->created_at, 'D, d M Y : H.m a') }}</div>
            </div>
        </div>
    </x-slot>

    <div class="pb-20">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="mt-2">
                <h2 class="text-xl font-bold text-center mb-2">Breakdown</h2>
                <livewire:dashboard-breakdown/>

                <div class="mt-2 grid grid-cols-2 gap-5">
                    <livewire:total-incomes />
                    <livewire:total-expenses />
                </div>
            </div>

            <div class="mt-8">
                <h2 class="text-xl font-bold">Today's Transaction</h2>

                <div class="mt-4 space-y-4 divide-y divide-gray-200">

                    <livewire:todays-transaction />

                </div>
            </div>

        </div>
    </div>
</x-app-layout>
