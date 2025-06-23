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

    public function withEvent()
    {
        \Log::info('Notification with Event');

        Notification::make()
            ->title('With Event')
            ->success()
            ->send();

        $this->dispatch('an-event');
    }

    public function withoutEvent()
    {
        \Log::info('Notification without Event');

        Notification::make()
            ->title('Without Event')
            ->success()
            ->send();
    }
}
