<x-app-layout>
    <x-slot name="header">
        <div class="font-medium dark:text-white">
            <div>{{ $user->name }}</div>
            <div class="text-sm text-gray-500 dark:text-gray-400">Last Activity
                in {{ $user->transactions->last() ? date_format($user->transactions->last()->created_at, 'D, d M Y : H.m a') : '-' }}</div>
        </div>
    </x-slot>

    <div class="pb-20">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-4 sm:p-8 rounded-lg bg-gray-50">
                <div class="flex items-start flex-col gap-3">
                    <h3 class="text-lg font-medium text-gray-900">User Subscription</h3>
                    <p class="text-sm text-gray-600 mb-6">Subscribe your account to access all of feature this app
                        gives</p>
                    <livewire:subscribe-button />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
