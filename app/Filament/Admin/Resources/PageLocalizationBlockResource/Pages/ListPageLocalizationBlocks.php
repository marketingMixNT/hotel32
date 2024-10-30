<?php

namespace App\Filament\Admin\Resources\PageLocalizationBlockResource\Pages;

use App\Filament\Admin\Resources\PageLocalizationBlockResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPageLocalizationBlocks extends ListRecords
{    use ListRecords\Concerns\Translatable;

    protected static string $resource = PageLocalizationBlockResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
        ];
    }
}
