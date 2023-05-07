<?php

namespace App\Http\Livewire;

use App\Models\Transaction;
use Carbon\Carbon;
use Livewire\Component;

class TodaysTransaction extends Component
{
    public function render()
    {
        return view('livewire.todays-transaction', [
            'transactions' => Transaction::with('category')->whereDate('created_at', Carbon::today())->orderBy('created_at', 'DESC')->get()
        ]);
    }
}
