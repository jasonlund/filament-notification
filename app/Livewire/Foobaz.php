<?php

namespace App\Livewire;

use Filament\Notifications\Notification;
use Livewire\Component;

class Foobaz extends Component
{
    public function render()
    {
        return view('livewire.foobaz');
    }

    public function submit()
    {
        Notification::make()
            ->title('I wanna get lost')
            ->success()
            ->send();

        $this->dispatch('an-event');
    }
}
