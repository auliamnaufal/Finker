<div>
    @foreach($transactions as $transaction)
        <x-transaction-item :amount="$transaction->amount" :type="$transaction->type"
                            :name="$transaction->name"
                            :date="date_format($transaction->created_at, 'D, d M Y')"
                            :logo="$transaction->category->logo"
        />
    @endforeach
</div>
