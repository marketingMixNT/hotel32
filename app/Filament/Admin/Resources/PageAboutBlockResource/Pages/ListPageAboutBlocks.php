<?php

namespace App\Filament\Admin\Resources\PageAboutBlockResource\Pages;

use App\Filament\Admin\Resources\PageAboutBlockResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPageAboutBlocks extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = PageAboutBlockResource::class;

    protected function getHeaderActions(): array
    {
        return [
            
            Actions\LocaleSwitcher::make(),
            Actions\CreateAction::make()

        ];
    }
}
