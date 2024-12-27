<?php

namespace App\Filament\Admin\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use App\Models\PageLocalizationBlock;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use Filament\Resources\Concerns\Translatable;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use App\Filament\Admin\Resources\PageLocalizationBlockResource\Pages;
use App\Filament\Admin\Resources\PageLocalizationBlockResource\RelationManagers;

class PageLocalizationBlockResource extends Resource
{

    use Translatable;

    public static function getTranslatableLocales(): array
    {
        return ['pl', 'en'];
    }
    protected static ?string $model = PageLocalizationBlock::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Lokalizacja';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            FileUpload::make('image')
                ->label('Obraz')
                ->directory('pageAbout')
                ->getUploadedFileNameForStorageUsing(
                    callback: fn(TemporaryUploadedFile $file): string => 'lokalizacja-' . now()->format('H-i-s') . '-' . str_replace([' ', '.'], '', microtime()) . '.' . $file->getClientOriginalExtension()
                )
                ->maxSize(8192)
                ->columnSpanFull()
                ->required(),

            RichEditor::make('text')
                ->label('Tekst')
                ->disableToolbarButtons([
                    'blockquote',
                    'strike',
                    'codeBlock',
                    

                ])
                ->required()
                ->columnSpanFull(),

                Select::make('page_localization_id')
                ->label('id strony')
                ->columns(1)
                ->relationship('pageLocalization', 'id')
                ->required()
       
                ->default(function () {
                   
                    return \App\Models\PageLocalization::first()->id ?? null;
                }),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->reorderable('sort')
        ->defaultSort('sort', 'desc')
        ->columns([
            Tables\Columns\TextColumn::make('sort')
                ->label('#')
                ->sortable(),
            Tables\Columns\ImageColumn::make('image')
                ->label('Banner'),

            Tables\Columns\TextColumn::make('text')
                ->label('Treść')
                ->limit(40)
                ->formatStateUsing(function ($state) {
                    return Str::limit(strip_tags($state), 40);
                }),
            Tables\Columns\TextColumn::make('created_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
            Tables\Columns\TextColumn::make('updated_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
        ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),

            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPageLocalizationBlocks::route('/'),
            'create' => Pages\CreatePageLocalizationBlock::route('/create'),
            'edit' => Pages\EditPageLocalizationBlock::route('/{record}/edit'),
        ];
    }

    public static function getNavigationLabel(): string
    {
        return ('Bloki');
    }
    public static function getPluralLabel(): string
    {
        return ('Bloki');
    }

    public static function getLabel(): string
    {
        return ('Bloki');
    }
}
