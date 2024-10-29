<?php

namespace App\Filament\Admin\Resources\PageRestaurantResource\Pages;

use App\Filament\Admin\Resources\PageRestaurantResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePageRestaurant extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = PageRestaurantResource::class;
    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),

        ];
    }
}
