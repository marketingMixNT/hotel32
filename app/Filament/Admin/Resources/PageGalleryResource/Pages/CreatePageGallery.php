<?php

namespace App\Filament\Admin\Resources\PageGalleryResource\Pages;

use App\Filament\Admin\Resources\PageGalleryResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePageGallery extends CreateRecord
{    use CreateRecord\Concerns\Translatable;

    protected static string $resource = PageGalleryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),

        ];
    }
}
