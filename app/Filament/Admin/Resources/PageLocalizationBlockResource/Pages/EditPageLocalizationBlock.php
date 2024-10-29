<?php

namespace App\Filament\Admin\Resources\PageLocalizationBlockResource\Pages;

use App\Filament\Admin\Resources\PageLocalizationBlockResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPageLocalizationBlock extends EditRecord
{    use EditRecord\Concerns\Translatable;

    protected static string $resource = PageLocalizationBlockResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make(),

        ];
    }
}
