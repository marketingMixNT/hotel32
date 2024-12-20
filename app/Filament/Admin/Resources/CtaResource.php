<?php

namespace App\Filament\Admin\Resources;

use App\Models\Cta;
use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Filament\Forms\Components\Fieldset;
use Illuminate\Database\Eloquent\Builder;
use Filament\Resources\Concerns\Translatable;
use App\Filament\Admin\Resources\CtaResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Admin\Resources\CtaResource\RelationManagers;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;


class CtaResource extends Resource
{

    use Translatable;

    public static function getTranslatableLocales(): array
    {
        return ['pl', 'en'];
    }
    protected static ?string $model = Cta::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Sekcje globalne';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('image')
                    ->label('Zdjęcie')
                    ->directory('cta')
                    ->getUploadedFileNameForStorageUsing(
                        fn(TemporaryUploadedFile $file): string => 'cta-bg-' . now()->format('Ymd_His') . '.' . $file->getClientOriginalExtension()
                    )
                    ->optimize('webp')
                    ->maxSize(8192)
                    ->columnSpanFull()
                    ->required(),
                Fieldset::make('Treść')
                    ->schema([

                        Forms\Components\TextInput::make('title')
                            ->label('Nagłówek')
                            ->columnSpanFull()
                            ->required(),

                        Forms\Components\TextInput::make('subtitle')
                            ->label('Treść')
                            ->columnSpanFull()
                            ->required(),
                    ]),
              
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            Tables\Columns\ImageColumn::make('image')
            ->label('Zdjęcie'),
        Tables\Columns\TextColumn::make('title')
            ->label('Tekst')
            ->description(function (Cta $record) {
                return Str::limit(strip_tags($record->subtitle), 40);
            })
            ->searchable()
            ->sortable(),
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
            'index' => Pages\ListCtas::route('/'),
            'create' => Pages\CreateCta::route('/create'),
            'edit' => Pages\EditCta::route('/{record}/edit'),
        ];
    }

    public static function getNavigationLabel(): string
    {
        return ('Call to Action');
    }
    public static function getPluralLabel(): string
    {
        return ('Call to Action');
    }

    public static function getLabel(): string
    {
        return ('Call to Action');
    }
}
