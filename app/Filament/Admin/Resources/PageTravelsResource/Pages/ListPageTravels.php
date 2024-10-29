<?php

namespace App\Filament\Admin\Resources\PageTravelsResource\Pages;

use App\Filament\Admin\Resources\PageTravelsResource;
use App\Models\PageTravels;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPageTravels extends ListRecords
{    use ListRecords\Concerns\Translatable;

    protected static string $resource = PageTravelsResource::class;

    protected function getHeaderActions(): array
    {

        $pageExists = PageTravels::exists();

        return array_filter([

            !$pageExists ? Actions\CreateAction::make() : null,
            Actions\LocaleSwitcher::make(),
        ]);
    }
}
