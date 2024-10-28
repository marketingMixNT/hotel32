<?php

namespace App\Filament\Admin\Resources\RoomResource\Pages;

use App\Filament\Admin\Resources\RoomResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateRoom extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = RoomResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),

        ];
    }
}
