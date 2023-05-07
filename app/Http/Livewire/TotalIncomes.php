<?php

namespace App\Http\Livewire;

use App\Models\Transaction;
use Livewire\Component;

class TotalIncomes extends Component
{
  public function render()
  {
    return view('livewire.total-incomes', [
        'total' => Transaction::where('type', 'income')->sum('amount')
    ]);
  }
}
