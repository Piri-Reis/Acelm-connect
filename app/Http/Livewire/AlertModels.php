<?php

namespace App\http\Livewire;

use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class AlertModels extends Component
{
    use LivewireAlert;

    public function SuccesAlert($message){
        $this->alert('success', $message, [
        'position' => 'top-end',
        'timer' => 3000,
        'toast' => false,
        'showConfirmButton' => false,
    ]);

    }
    public function render()
    {

    }
}
