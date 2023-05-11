<?php

namespace App\Http\Livewire;

use App\Models\Transaction;
use Illuminate\Support\Carbon;
use Livewire\Component;

class TransactionList extends Component
{
    public $type;
    public $transactionsByDay;

    protected $listeners = ['transactionCreated' => 'updateTransaction'];


    public function mount()
    {
        $this->transactionsByDay = $this->type == 'all' ?
            collect(Transaction::orderBy('created_at', 'DESC')
                ->get()
                ->groupBy(function ($val) {
                    return Carbon::parse($val->created_at)->format('D, d M Y');
                })) :
            collect(Transaction::where('type', $this->type)
                ->orderBy('created_at', 'DESC')
                ->get()
                ->groupBy(function ($val) {
                    return Carbon::parse($val->created_at)->format('D, d M Y');
                }));

    }

    public function updateTransaction()
    {
        $this->transactionsByDay = $this->type == 'all' ?
            collect(Transaction::orderBy('created_at', 'DESC')
                ->get()
                ->groupBy(function ($val) {
                    return Carbon::parse($val->created_at)->format('D, d M Y');
                })) :
            collect(Transaction::where('type', $this->type)
                ->orderBy('created_at', 'DESC')
                ->get()
                ->groupBy(function ($val) {
                    return Carbon::parse($val->created_at)->format('D, d M Y');
                }));
    }


    public function render()
    {
        return view('livewire.transaction-list');
    }
}
