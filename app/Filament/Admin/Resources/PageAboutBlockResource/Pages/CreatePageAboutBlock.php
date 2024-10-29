<?php

namespace App\Filament\Admin\Resources\PageAboutBlockResource\Pages;

use App\Filament\Admin\Resources\PageAboutBlockResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePageAboutBlock extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = PageAboutBlockResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),

        ];
    }
}
