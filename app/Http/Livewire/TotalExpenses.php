<?php

namespace App\Http\Livewire;

use App\Models\Transaction;
use Livewire\Component;

class TotalExpenses extends Component
{
  public function render()
  {
    return view('livewire.total-expenses', [
        'total' => Transaction::where('type', 'expense')->sum('amount')
    ]);
  }
}
