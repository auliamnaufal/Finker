<div>
    @forelse($transactions as $transaction)
        <x-transaction-item :amount="$transaction->amount" :type="$transaction->type"
                            :name="$transaction->name"
                            :date="date_format($transaction->created_at, 'D, d M Y')"
                            :logo="$transaction->category->logo"
        />
    @empty
        <p class="text-gray-400 text-sm">No transaction yet...</p>
    @endforelse
</div>
