<?php

namespace App\Filament\Admin\Resources\PageRestaurantResource\Pages;

use App\Filament\Admin\Resources\PageRestaurantResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPageRestaurant extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = PageRestaurantResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make(),

        ];
    }
}
