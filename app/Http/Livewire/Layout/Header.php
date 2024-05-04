<?php

namespace App\Http\Livewire\Layout;
use Livewire\Component;
use Livewire\Attributes\On;
use App\Http\Livewire\AlertModels;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Header extends AlertModels
{
    protected $listeners = ['exemple'];
    use LivewireAlert;

    #[On('userDeleted')]
    public function exemple($message)
    {
        $this->SuccesAlert($message);

    }

    public function render()
    {
        return view('livewire.header');
    }
}
