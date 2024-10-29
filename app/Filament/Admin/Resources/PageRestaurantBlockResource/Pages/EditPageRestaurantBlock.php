<?php

namespace App\Filament\Admin\Resources\PageRestaurantBlockResource\Pages;

use App\Filament\Admin\Resources\PageRestaurantBlockResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPageRestaurantBlock extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = PageRestaurantBlockResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make(),

        ];
    }
}
