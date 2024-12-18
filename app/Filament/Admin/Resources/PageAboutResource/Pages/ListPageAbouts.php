<?php

namespace App\Filament\Admin\Resources\PageAboutResource\Pages;

use Filament\Actions;
use App\Models\PageAbout;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Admin\Resources\PageAboutResource;

class ListPageAbouts extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = PageAboutResource::class;

    protected function getHeaderActions(): array
    {

        $pageExists = PageAbout::exists();

        return array_filter([

            !$pageExists ? Actions\CreateAction::make() : null,
            Actions\LocaleSwitcher::make(),
        ]);
    }
}
