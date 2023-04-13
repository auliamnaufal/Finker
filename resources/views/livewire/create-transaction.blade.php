<div class="px-6 py-5">

    <h3 class="mb-5 text-lg text-center font-medium text-gray-900 dark:text-white">Create new transaction</h3>
    <ul class="grid w-full gap-6 md:grid-cols-2">
        <li>
            <input type="radio" id="expense" name="type" value="expense" class="hidden peer" required checked>
            <label for="expense" class="inline-flex items-center justify-center w-full p-3 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:bg-blue-600 peer-checked:text-white hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                <div class="block">
                    <span>Expense</span>
                </div>
            </label>
        </li>
        <li>
            <input type="radio" id="income" name="type" value="income" class="hidden peer">
            <label for="income" class="inline-flex items-center justify-center w-full p-3 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:bg-blue-600 peer-checked:text-white hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                <div class="block">
                    <span>Income</span>
                </div>
            </label>
        </li>
    </ul>


</div>
