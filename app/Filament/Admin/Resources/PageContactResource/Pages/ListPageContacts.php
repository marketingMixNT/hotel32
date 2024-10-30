<?php

namespace App\Filament\Admin\Resources\PageContactResource\Pages;

use App\Filament\Admin\Resources\PageContactResource;
use App\Models\PageContact;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPageContacts extends ListRecords
{    use ListRecords\Concerns\Translatable;

    protected static string $resource = PageContactResource::class;

    protected function getHeaderActions(): array
    {

        $pageExists = PageContact::exists();

        return array_filter([

            !$pageExists ? Actions\CreateAction::make() : null,
            Actions\LocaleSwitcher::make(),
        ]);
    }
}
