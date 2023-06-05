<div>
    @forelse($transactionsByDay as $day => $transactions)
        <p class="text-black font-bold pb-2">
            {{ $day }}
        </p>
        <hr>

        @foreach ($transactions as $transaction)

            <x-transaction-item :amount="$transaction->amount" :type="$transaction->type" :name="$transaction->name"
                                :date="date_format($transaction->created_at, 'D, d M Y : H.m a')"
                                :logo="$transaction->category->logo"/>

        @endforeach
    @empty
        <p class="text-black mt-6 font-bold pb-2">
            No transactions created
        </p>
    @endforelse

</div>
