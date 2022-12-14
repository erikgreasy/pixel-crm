<?php

namespace App\Filament\Resources\TaskResource\Pages;

use Filament\Pages\Actions;
use App\Filament\Resources\TaskResource;
use Filament\Resources\Pages\ManageRecords;
use Illuminate\Database\Eloquent\Builder;

class ManageTasks extends ManageRecords
{
    protected static string $resource = TaskResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getTableQuery(): Builder
    {
        return parent::getTableQuery()->latest();
    }
}
