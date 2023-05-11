<?php

namespace App\Http\Livewire;

use App\Models\Transaction;
use Carbon\Carbon;
use Livewire\Component;

class TodaysTransaction extends Component
{
    public $transactions;

    protected $listeners = ['transactionCreated' => 'updateTransaction'];

    public function mount()
    {
        $this->transactions = Transaction::with('category')->whereDate('created_at', Carbon::today())->orderBy('created_at', 'DESC')->get();
    }

    public function updateTransaction() {
        $this->transactions = Transaction::with('category')->whereDate('created_at', Carbon::today())->orderBy('created_at', 'DESC')->get();
    }

    public function render()
    {
        return view('livewire.todays-transaction');
    }
}
