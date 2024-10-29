<?php

namespace App\Filament\Admin\Resources\PageTravelsBlockResource\Pages;

use App\Filament\Admin\Resources\PageTravelsBlockResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePageTravelsBlock extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = PageTravelsBlockResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),

        ];
    }
}
