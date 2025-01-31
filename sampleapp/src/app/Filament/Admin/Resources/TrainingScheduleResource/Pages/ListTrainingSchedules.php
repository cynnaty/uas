<?php

namespace App\Filament\Admin\Resources\TrainingScheduleResource\Pages;

use App\Filament\Admin\Resources\TrainingScheduleResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTrainingSchedules extends ListRecords
{
    protected static string $resource = TrainingScheduleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
