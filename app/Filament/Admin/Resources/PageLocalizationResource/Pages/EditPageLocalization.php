<?php

namespace App\Filament\Admin\Resources\PageLocalizationResource\Pages;

use App\Filament\Admin\Resources\PageLocalizationResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPageLocalization extends EditRecord
{    use EditRecord\Concerns\Translatable;

    protected static string $resource = PageLocalizationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make(),
        ];
    }
}
