<?php

namespace App\Filament\Admin\Resources\PrivacyPolicyResource\Pages;

use App\Filament\Admin\Resources\PrivacyPolicyResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePrivacyPolicy extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = PrivacyPolicyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),

        ];
    }
}
