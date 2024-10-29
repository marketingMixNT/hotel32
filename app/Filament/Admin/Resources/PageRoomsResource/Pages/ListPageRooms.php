<?php

namespace App\Filament\Admin\Resources\PageRoomsResource\Pages;

use Filament\Actions;
use App\Models\PageRooms;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Admin\Resources\PageRoomsResource;

class ListPageRooms extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = PageRoomsResource::class;

    protected function getHeaderActions(): array
    {

        $privacyPolicyExists = PageRooms::exists();

        return array_filter([

            !$privacyPolicyExists ? Actions\CreateAction::make() : null,
            Actions\LocaleSwitcher::make(),
        ]);
    }
}
