<?php

namespace App\Filament\Admin\Resources\PageRestaurantBlockResource\Pages;

use App\Filament\Admin\Resources\PageRestaurantBlockResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPageRestaurantBlocks extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = PageRestaurantBlockResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
        ];
    }
}
