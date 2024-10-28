<?php

namespace App\Filament\Admin\Resources\CtaResource\Pages;

use App\Models\Cta;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Admin\Resources\CtaResource;

class ListCtas extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = CtaResource::class;

    protected function getHeaderActions(): array
    {

        $privacyPolicyExists = Cta::exists();

        return array_filter([

            !$privacyPolicyExists ? Actions\CreateAction::make() : null,
            Actions\LocaleSwitcher::make(),
        ]);
    }
}
