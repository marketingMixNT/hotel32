<?php

namespace App\Filament\Admin\Resources\PageRestaurantResource\Pages;

use Filament\Actions;
use App\Models\PageRestaurant;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Admin\Resources\PageRestaurantResource;

class ListPageRestaurants extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = PageRestaurantResource::class;

    protected function getHeaderActions(): array
    {

        $pageExists = PageRestaurant::exists();

        return array_filter([

            !$pageExists ? Actions\CreateAction::make() : null,
            Actions\LocaleSwitcher::make(),
        ]);
    }
}
