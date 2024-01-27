<?php

namespace App\Filament\Resources\AboutResource\Pages;

use App\Filament\Resources\AboutResource;
use App\Models\About;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Storage;

class EditAbout extends EditRecord
{
    protected static string $resource = AboutResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()->after(
                function(About $record) {
                    if ($record->gambar_1) {
                        Storage::disk('public')->delete($record->gambar_1);
                    }
                    if ($record->gambar_2) {
                        Storage::disk('public')->delete($record->gambar_2);
                    }
                }
            ),
        ];
    }
}
