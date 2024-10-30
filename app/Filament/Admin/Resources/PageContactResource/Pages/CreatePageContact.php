<?php

namespace App\Filament\Admin\Resources\PageContactResource\Pages;

use App\Filament\Admin\Resources\PageContactResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePageContact extends CreateRecord
{    use CreateRecord\Concerns\Translatable;

    protected static string $resource = PageContactResource::class;
    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),

        ];
    }
}
