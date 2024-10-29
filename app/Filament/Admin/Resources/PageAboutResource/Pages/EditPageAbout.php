<?php

namespace App\Filament\Admin\Resources\PageAboutResource\Pages;

use App\Filament\Admin\Resources\PageAboutResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPageAbout extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = PageAboutResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make(),
        ];
    }
}
