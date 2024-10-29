<?php

namespace App\Filament\Admin\Resources\PageLocalizationResource\Pages;

use App\Filament\Admin\Resources\PageLocalizationResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePageLocalization extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = PageLocalizationResource::class;
    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),

        ];
    }
}
