<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Transaction;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class CreateTransaction extends ModalComponent
{
    public $type;
    public $time;
    public $amount;
    public $name;
    public $category;

    protected $rules = [
        'type' => 'required',
        'time' => 'required|date',
        'amount' => 'required',
        'name' => 'required',
        'category' => 'required',
    ];

    public function createTransaction()
    {
        $this->validate();

        Transaction::create([
            'user_id' => auth()->id(),
            'category_id' => $this->category,
            'name' => $this->name,
            'amount' => $this->amount,
            'type' => $this->type,
        ]);

        $this->closeModalWithEvents([
            'transactionCreated'
        ]);
    }

    public function render()
    {
        return view('livewire.create-transaction', [
            'categories' => Category::all()
        ]);
    }
}
