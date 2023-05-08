<?php

namespace App\Http\Livewire;

use App\Models\Transaction;
use Livewire\Component;

class TransactionList extends Component
{
    public $type;

    public function render()
    {
        $transactions = $this->type == 'all' ? Transaction::orderBy('created_at', 'DESC')->get() : Transaction::where('type', $this->type)->orderBy('created_at', 'DESC')->get();
        return view('livewire.transaction-list', [
            'transactions' => $transactions
        ]);
    }
}
