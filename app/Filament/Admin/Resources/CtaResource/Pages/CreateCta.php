<?php

namespace App\Filament\Admin\Resources\CtaResource\Pages;

use App\Filament\Admin\Resources\CtaResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCta extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = CtaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),

        ];
    }
}
