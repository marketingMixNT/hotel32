<?php

namespace App\Filament\Admin\Resources\PageGalleryResource\Pages;

use App\Filament\Admin\Resources\PageGalleryResource;
use App\Models\PageGallery;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPageGalleries extends ListRecords
{    use ListRecords\Concerns\Translatable;

    protected static string $resource = PageGalleryResource::class;

    protected function getHeaderActions(): array
    {

        $pageExists = PageGallery::exists();

        return array_filter([

            !$pageExists ? Actions\CreateAction::make() : null,
            Actions\LocaleSwitcher::make(),
        ]);
    }
    
}
