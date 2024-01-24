<?php

namespace App\Filament\Resources\HomeResource\Pages;

use App\Filament\Resources\HomeResource;
use App\Models\Home;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Storage;

class EditHome extends EditRecord
{
    protected static string $resource = HomeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()->after(
                function(Home $record) {
                    if ($record->bg_image) {
                        Storage::disk('public')->delete($record->bg_image);
                    }
                }
            ),
        ];
    }
}
