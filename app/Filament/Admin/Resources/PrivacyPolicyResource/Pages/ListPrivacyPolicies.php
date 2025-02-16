<?php

namespace App\Filament\Admin\Resources\PrivacyPolicyResource\Pages;

use App\Filament\Admin\Resources\PrivacyPolicyResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPrivacyPolicies extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = PrivacyPolicyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Actions\LocaleSwitcher::make(),

        ];
    }
}
