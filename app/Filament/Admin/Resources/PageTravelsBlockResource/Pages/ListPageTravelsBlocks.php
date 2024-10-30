<?php

namespace App\Filament\Admin\Resources\PageTravelsBlockResource\Pages;

use App\Filament\Admin\Resources\PageTravelsBlockResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPageTravelsBlocks extends ListRecords
{    use ListRecords\Concerns\Translatable;

    protected static string $resource = PageTravelsBlockResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
        ];
    }
}
