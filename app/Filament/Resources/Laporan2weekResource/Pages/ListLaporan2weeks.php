<?php

namespace App\Filament\Resources\Laporan2weekResource\Pages;

use App\Filament\Resources\Laporan2weekResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLaporan2weeks extends ListRecords
{
    protected static string $resource = Laporan2weekResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
