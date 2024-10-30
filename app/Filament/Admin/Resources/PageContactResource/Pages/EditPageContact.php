<?php

namespace App\Filament\Admin\Resources\PageContactResource\Pages;

use App\Filament\Admin\Resources\PageContactResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPageContact extends EditRecord
{    use EditRecord\Concerns\Translatable;

    protected static string $resource = PageContactResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make(),
        ];
    }
}
