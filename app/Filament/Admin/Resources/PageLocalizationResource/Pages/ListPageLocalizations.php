<?php

namespace App\Filament\Admin\Resources\PageLocalizationResource\Pages;

use App\Filament\Admin\Resources\PageLocalizationResource;
use App\Models\PageLocalization;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPageLocalizations extends ListRecords
{    use ListRecords\Concerns\Translatable;

    protected static string $resource = PageLocalizationResource::class;

    protected function getHeaderActions(): array
    {

        $pageExists = PageLocalization::exists();

        return array_filter([

            !$pageExists ? Actions\CreateAction::make() : null,
            Actions\LocaleSwitcher::make(),
        ]);
    }
}
