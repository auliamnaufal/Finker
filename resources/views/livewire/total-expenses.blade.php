<div class="bg-red-200 rounded-lg p-4">
    <div class="flex justify-center items-center bg-red-400 rounded-full w-8 h-8">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 text-white">
            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 01.75.75v11.25a.75.75 0 01-1.5 0V6.31L5.03 20.03a.75.75 0 01-1.06-1.06L17.69 5.25H8.25a.75.75 0 010-1.5z" clip-rule="evenodd" />
        </svg>
    </div>
    <h3 class="font-light text-sm text-gray-600 mb-4 mt-2">Total Expense</h3>
    <div class="flex items-center space-x-1">
        <span class="font-light text-sm text-gray-500">$</span>
        <h4 class="text-2xl font-bold text-black">{{ number_format($total, 2) }}</h4>
    </div>
</div>
