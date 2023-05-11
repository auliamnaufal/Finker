<div class="px-6 py-5">

    <h3 class="mb-5 text-lg text-center font-medium text-gray-900 dark:text-white">Create new transaction</h3>
    <ul class="grid w-full gap-6 grid-cols-2">
        <li>
            <input type="radio" wire:model="type" id="expense" name="type" value="expense" class="hidden peer" required checked>
            <label for="expense" class="inline-flex items-center justify-center w-full p-3 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:bg-blue-600 peer-checked:text-white hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                <div class="block">
                    <span>Expense</span>
                </div>
            </label>
        </li>
        <li>
            <input type="radio" wire:model="type" id="income" name="type" value="income" class="hidden peer">
            <label for="income" class="inline-flex items-center justify-center w-full p-3 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:bg-blue-600 peer-checked:text-white hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                <div class="block">
                    <span>Income</span>
                </div>
            </label>
        </li>
    </ul>

    <div class="mt-5">
        <label for="time" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Time</label>
        <div class="relative w-full">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-500 dark:text-gray-400">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                </svg>

            </div>
            <input type="datetime-local" id="time" name="time"
                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                   placeholder="Select date" wire:model="time">
        </div>
    </div>

    <div class="mt-5">
        <label for="amount" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Amount</label>
        <div class="relative w-full">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-500 dark:text-gray-400">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
            <input type="number" id="amount" name="amount"
                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                   placeholder="Insert amount" wire:model="amount">
        </div>
    </div>

    <div class="mt-5">
        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
        <div class="relative w-full">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-500 dark:text-gray-400">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 15.75l-2.489-2.489m0 0a3.375 3.375 0 10-4.773-4.773 3.375 3.375 0 004.774 4.774zM21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
            <input type="text" id="name" name="name"
                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                   placeholder="Name" wire:model="name">
        </div>
    </div>

    <div class="mt-5">
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>

        <div class="flex justify-start items-center py-4 px-2 overflow-x-auto gap-5">
            @foreach($categories as $category)

                <div class="flex flex-col justify-center items-center">
                    <input type="radio" id="{{ $category->name }}" wire:model="category" name="category" value="{{ $category->id }}" class="hidden peer">
                    <label for="{{ $category->name }}" class="inline-flex items-center justify-center w-12 h-12 mb-1 bg-blue-300 rounded-lg ring-2 ring-offset-1 ring-transparent peer-checked:ring-blue-300 hover:cursor-pointer">
                        <div class="block text-blue-500">
                            {!! $category->logo !!}
                        </div>
                    </label>
                    <p class="text-sm">{{ $category->name }}</p>
                </div>

            @endforeach

        </div>

    </div>

    <div class="mt-10">
        <button type="button" wire:click.prevent="createTransaction()" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add transaction</button>
    </div>

</div>
