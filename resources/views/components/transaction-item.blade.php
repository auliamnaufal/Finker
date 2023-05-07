@props([
  'amount',
  'name',
  'date',
  'type',
  'logo'
])

<div class="grid grid-cols-6 items-center pt-4">
    <div class="w-12 h-12 bg-blue-300 rounded-lg flex justify-center items-center ">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
             class="w-6 h-6 text-blue-500">
            <path d="M12 9a3.75 3.75 0 100 7.5A3.75 3.75 0 0012 9z"/>
            <path fill-rule="evenodd"
                  d="M9.344 3.071a49.52 49.52 0 015.312 0c.967.052 1.83.585 2.332 1.39l.821 1.317c.24.383.645.643 1.11.71.386.054.77.113 1.152.177 1.432.239 2.429 1.493 2.429 2.909V18a3 3 0 01-3 3h-15a3 3 0 01-3-3V9.574c0-1.416.997-2.67 2.429-2.909.382-.064.766-.123 1.151-.178a1.56 1.56 0 001.11-.71l.822-1.315a2.942 2.942 0 012.332-1.39zM6.75 12.75a5.25 5.25 0 1110.5 0 5.25 5.25 0 01-10.5 0zm12-1.5a.75.75 0 100-1.5.75.75 0 000 1.5z"
                  clip-rule="evenodd"/>
        </svg>
        {{ $logo ?? '' }}
    </div>

    <div class="col-span-3">
        <h3 class="font-bold text-black">{{ $name }}</h3>
        <p class="font-light text-sm text-gray-500">{{ $date }}</p>
    </div>
    <div class="col-span-2 flex justify-end items-center">
        <p class="font-semibold {{ $type == 'expense' ? 'text-red-400' : 'text-green-400' }} mr-4">
            {{ $type == 'expense' ? '-' : '+' }} ${{ $amount }}
        </p>

        @if ($type == 'expense')
            <div class="flex justify-center items-center bg-red-400 rounded-full w-6 h-6">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                     class="w-3 h-3 text-white">
                    <path fill-rule="evenodd"
                          d="M8.25 3.75H19.5a.75.75 0 01.75.75v11.25a.75.75 0 01-1.5 0V6.31L5.03 20.03a.75.75 0 01-1.06-1.06L17.69 5.25H8.25a.75.75 0 010-1.5z"
                          clip-rule="evenodd"/>
                </svg>
            </div>

        @else
            <div class="flex justify-center items-center bg-green-400 rounded-full w-6 h-6">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                     stroke-width="1.5" stroke="currentColor" class="w-3 h-3 text-white">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M19.5 4.5l-15 15m0 0h11.25m-11.25 0V8.25"/>
                </svg>
            </div>
        @endif

    </div>
</div>
