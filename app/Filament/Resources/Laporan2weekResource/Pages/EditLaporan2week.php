<?php

namespace App\Filament\Resources\Laporan2weekResource\Pages;

use App\Filament\Resources\Laporan2weekResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLaporan2week extends EditRecord
{
    protected static string $resource = Laporan2weekResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
