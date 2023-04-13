<?php

namespace App\Http\Livewire;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class CreateTransaction extends ModalComponent
{
  public function render()
  {
    return view('livewire.create-transaction');
  }
}
