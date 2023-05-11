<?php

namespace App\Http\Livewire;

use App\Models\Transaction;
use Livewire\Component;

class TotalExpenses extends Component
{
    public $total;

    protected $listeners = ['transactionCreated' => 'updateTotal'];


    public function mount()
    {
        $this->total = Transaction::where('type', 'expense')->sum('amount');
    }

    public function updateTotal()
    {
        $this->total = Transaction::where('type', 'expense')->sum('amount');
    }

    public function render()
    {
        return view('livewire.total-expenses');
    }
}
