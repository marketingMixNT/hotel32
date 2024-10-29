<?php

namespace App\Filament\Admin\Resources\PageTravelsResource\Pages;

use App\Filament\Admin\Resources\PageTravelsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPageTravels extends EditRecord
{
    use EditRecord\Concerns\Translatable;
    protected static string $resource = PageTravelsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make(),

        ];
    }
}
