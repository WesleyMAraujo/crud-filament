<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;
use App\Models\Status;

class KanbanClientes extends Widget
{
    protected static string $view = 'filament.widgets.kanban-clientes';

    public function getStatuses()
    {
        return Status::with('clientes')->get();
    }

    public function getColumnSpan(): string
    {
        return 'full';
    }
}
