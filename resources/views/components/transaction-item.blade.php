@props([
  'amount',
  'name',
  'date',
  'type',
  'logo'
])

<div class="grid grid-cols-6 items-center pt-6">
    <div class="w-12 h-12 bg-blue-300 text-blue-500 rounded-lg flex justify-center items-center ">
        {!! $logo ?? '' !!}
    </div>

    <div class="col-span-3">
        <h3 class="font-semibold text-black">{{ $name }}</h3>
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
