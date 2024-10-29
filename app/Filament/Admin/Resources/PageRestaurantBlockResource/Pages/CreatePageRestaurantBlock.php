<?php

namespace App\Filament\Admin\Resources\PageRestaurantBlockResource\Pages;

use App\Filament\Admin\Resources\PageRestaurantBlockResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePageRestaurantBlock extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = PageRestaurantBlockResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),

        ];
    }
}
