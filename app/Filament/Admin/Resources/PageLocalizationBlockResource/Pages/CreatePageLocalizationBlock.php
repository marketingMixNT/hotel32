<?php

namespace App\Filament\Admin\Resources\PageLocalizationBlockResource\Pages;

use App\Filament\Admin\Resources\PageLocalizationBlockResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePageLocalizationBlock extends CreateRecord
{    use CreateRecord\Concerns\Translatable;

    protected static string $resource = PageLocalizationBlockResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),

        ];
    }
}
