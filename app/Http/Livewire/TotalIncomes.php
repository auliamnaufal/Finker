<?php

namespace App\Http\Livewire;

use App\Models\Transaction;
use Carbon\Carbon;
use Livewire\Component;

class TotalIncomes extends Component
{
    public $total;

    protected $listeners = ['transactionCreated' => 'updateTotal'];

    public function mount() {
        $this->total = Transaction::where('type', 'income')->sum('amount');
    }

    public function updateTotal() {
        $this->total = Transaction::where('type', 'income')->sum('amount');
    }

    public function render()
    {
        return view('livewire.total-incomes');
    }
}
