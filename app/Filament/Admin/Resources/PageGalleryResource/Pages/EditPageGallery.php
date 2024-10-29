<?php

namespace App\Filament\Admin\Resources\PageGalleryResource\Pages;

use App\Filament\Admin\Resources\PageGalleryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPageGallery extends EditRecord
{    use EditRecord\Concerns\Translatable;

    protected static string $resource = PageGalleryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make(),

        ];
    }
}
