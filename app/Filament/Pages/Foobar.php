<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Livewire\Attributes\On;

class Foobar extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.foobar';

    #[On('an-event')]
    public function event()
    {
        // event
    }
}
