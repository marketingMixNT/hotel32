<?php

namespace App\Filament\Admin\Resources\PageTravelsBlockResource\Pages;

use App\Filament\Admin\Resources\PageTravelsBlockResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPageTravelsBlock extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = PageTravelsBlockResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make(),
        ];
    }
}
