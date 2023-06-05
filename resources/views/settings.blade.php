<x-app-layout>
    <x-slot name="header">
        <div class="font-medium dark:text-white">
            <div>{{ $user->name }}</div>
            <div class="text-sm text-gray-500 dark:text-gray-400">Last Activity in {{ $user->transactions->last() ? date_format($user->transactions->last()->created_at, 'D, d M Y : H.m a') : '-' }}</div>
        </div>
    </x-slot>

    <div class="pb-20">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

        </div>
    </div>
</x-app-layout>
