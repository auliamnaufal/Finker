<?php

namespace App\Http\Livewire;

use App\Models\Transaction;
use Illuminate\Support\Carbon;
use Livewire\Component;

class TransactionList extends Component
{
    public $type;

    public function render()
    {
        $transactions = $this->type == 'all' ?
            Transaction::orderBy('created_at', 'DESC')
                ->get()
                ->groupBy(function ($val) {
                    return Carbon::parse($val->created_at)->format('D, d M Y');
                }) :
            Transaction::where('type', $this->type)
                ->orderBy('created_at', 'DESC')
                ->get()
                ->groupBy(function ($val) {
                    return Carbon::parse($val->created_at)->format('D, d M Y');
                });

        return view('livewire.transaction-list', [
            'transactionsByDay' => $transactions
        ]);
    }
}
