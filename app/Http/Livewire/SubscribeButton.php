<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SubscribeButton extends Component
{

    public function updateSubscription() {
        auth()->user()->update([
            'is_pro' => !auth()->user()->is_pro
        ]);

    }

    public function render()
    {
        return view('livewire.subscribe-button');
    }
}
