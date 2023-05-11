<div class="bg-green-200 rounded-lg p-4">
    <div class="flex justify-center items-center bg-green-400 rounded-full w-8 h-8">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-white">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 4.5l-15 15m0 0h11.25m-11.25 0V8.25" />
        </svg>
    </div>
    <h3 class="font-light text-sm text-gray-600 mb-4 mt-2">Total Income</h3>
    <div class="flex items-center space-x-1">
        <span class="font-light text-sm text-gray-500">$</span>
        <h4 class="text-2xl font-bold text-black">{{ number_format($total, 2) }}</h4>
    </div>
</div>
