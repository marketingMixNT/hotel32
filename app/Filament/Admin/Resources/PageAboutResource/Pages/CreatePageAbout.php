<?php

namespace App\Filament\Admin\Resources\PageAboutResource\Pages;

use App\Filament\Admin\Resources\PageAboutResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePageAbout extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = PageAboutResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),

        ];
    }
}
