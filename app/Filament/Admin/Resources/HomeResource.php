<?php

namespace App\Filament\Admin\Resources;

use Filament\Forms;
use App\Models\Home;
use Filament\Tables;
use App\Models\Social;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Awcodes\Shout\Components\Shout;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Repeater;
use Illuminate\Database\Eloquent\Builder;
use Filament\Resources\Concerns\Translatable;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Admin\Resources\HomeResource\Pages;
use App\Filament\Admin\Resources\HomeResource\RelationManagers;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Schmeits\FilamentCharacterCounter\Forms\Components\TextInput;
use Livewire\Component as Livewire;
use Filament\Forms\Components\Component;

class HomeResource extends Resource
{
    use Translatable;

    public static function getTranslatableLocales(): array
    {
        return ['pl', 'en'];
    }
    protected static ?string $model = Home::class;



    protected static ?string $navigationIcon = 'heroicon-o-home';

    protected static ?string $navigationGroup = 'Strona główna';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Tabs::make('Tabs')
                    ->columnSpanFull()
                    ->tabs([

                        // MAIN INFO
                        Tabs\Tab::make('Główne informacje')
                            ->icon('heroicon-o-information-circle')
                            ->columns()
                            ->schema([

                                Forms\Components\FileUpload::make('logo')
                                    ->label('Logo')
                                    ->directory('home')
                                    ->getUploadedFileNameForStorageUsing(
                                        fn(TemporaryUploadedFile $file): string => 'logo-' . now()->format('H-i-s') . '-' . str_replace([' ', '.'], '', microtime()) . '.' . $file->getClientOriginalExtension()
                                    )
                                    ->maxSize(8192)
                                    ->columnSpanFull()
                                    ->required(),

                                Forms\Components\TextInput::make('title')
                                    ->label('Tytuł')
                                    ->placeholder('Hotel 32')
                                    ->columnSpanFull()
                                    ->required(),


                                Forms\Components\TextInput::make('bank')
                                    ->label('Bank'),

                                Forms\Components\TextInput::make('bank_account')
                                    ->label('Numer konta bankowego'),


                                Fieldset::make('Rezerwacja')
                                    ->schema([
                                        Forms\Components\TextInput::make('booking_link')
                                            ->label('Link do panelu rezerwacji')
                                            ->url()
                                            ->columnSpanFull()
                                            ->hint('Link jest inny dla wersji angielskiej!')
                                            ->required(),

                                        Forms\Components\TextInput::make('booking_script')
                                            ->label('Link do skryptu rezerwacyjnego')
                                            ->hint("Wpisz tylko link z src. Pamiętaj o usunięciu 'pl' tak jak w przykładzie poniżej. ")
                                            ->placeholder("https://wis.upperbooking.com/aparthoteljan/be-panel?locale=")
                                            ->minLength(3)
                                            ->maxLength(255)
                                            ->columnSpanFull()
                                            ->required(),
                                    ]),

                                Fieldset::make('Mapa')
                                    ->schema([

                                        Forms\Components\TextInput::make('map_link')
                                            ->label('Link go google maps')
                                            ->columnSpanFull()
                                            ->url()
                                            ->required(),

                                        Forms\Components\Textarea::make('map')
                                            ->label('Google Maps iFrame')
                                            ->placeholder("<iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2592.547169189393!2d20.00688517730142!3d49.474170357174515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4715e5905e21c0ed%3A0x159c133ae9b83572!2sMarketingMix!5e0!3m2!1spl!2spl!4v1727760651042!5m2!1spl!2spl' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade' title='apartament-willa' class='w-full'></iframe>")
                                            ->autosize()
                                            ->columnSpanFull()
                                            ->required(),



                                        Shout::make('so-important')
                                            ->content('Dodaj to mapy tagi:  title="nazwa-apartamentu" class="w-full"')
                                            ->color('warning')
                                            ->columnSpanFull(),
                                    ])

                            ]),

                        // CONTACT
                        Tabs\Tab::make('Dane kontaktowe')
                            ->icon('heroicon-o-phone')
                            ->columns()
                            ->schema([

                                Forms\Components\TextInput::make('address')
                                    ->label('Ulica')
                                    ->placeholder("Testowa 123")
                                    ->minLength(3)
                                    ->maxLength(255)
                                    ->required(),
                                Forms\Components\TextInput::make('city')
                                    ->label('Kod pocztowy i miejscowość')
                                    ->placeholder("123-34 Test")
                                    ->minLength(3)
                                    ->maxLength(255)
                                    ->required(),

                                Forms\Components\TextInput::make('phone')
                                    ->label('Telefon')
                                    ->prefix("+48")
                                    ->placeholder("123456789")
                                    ->minLength(3)
                                    ->maxLength(255)
                                    ->required(),
                                Forms\Components\TextInput::make('phone_second')
                                    ->label('Drugi Telefon')
                                    ->prefix("+48")
                                    ->placeholder("123456789")
                                    ->minLength(3)
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('phone_third')
                                    ->label('Trzeci Telefon')
                                    ->prefix("+48")
                                    ->placeholder("123456789")
                                    ->minLength(3)
                                    ->maxLength(255),


                                Forms\Components\TextInput::make('mail')
                                    ->label('Email')
                                    ->placeholder("test@gmail.com")
                                    ->minLength(3)
                                    ->maxLength(255)
                                    ->required(),

                                Fieldset::make('Social Media')
                                    ->schema([
                                        Repeater::make('socials')
                                            ->schema(Social::getForm())
                                            ->label('')
                                            ->relationship()
                                            ->columnSpanFull()
                                            ->itemLabel(fn(array $state): ?string => $state['name'] ?? null)
                                            ->addActionLabel('Dodaj social')
                                            ->collapsed()
                                            ->collapsible()
                                            ->grid(2)
                                            ->defaultItems(0)
                                    ])


                            ]),

                        // SLIDER
                        Tabs\Tab::make('Slider')
                            ->icon('heroicon-o-photo')
                            ->columns()
                            ->schema([
                                Shout::make('info')
                                    ->content('Wybierz zdjęcia oraz nagłówek wraz z paragrafem który pojawi się na stronie głównej')
                                    ->type('info')
                                    ->color('info')
                                    ->columnSpanFull(),

                                Forms\Components\TextInput::make('slider_title')
                                    ->label('Nagłówek')
                                    ->placeholder('Hotel Jan')
                                    ->columnSpanFull()
                                    ->required(),
                                Forms\Components\TextInput::make('slider_subtitle')
                                    ->label('Tekst')
                                    ->placeholder('Hotel inny niz wszystkie')
                                    ->columnSpanFull()
                                    ->required(),


                                Fieldset::make('')
                                    ->schema([
                                        Forms\Components\FileUpload::make(name: 'slider_images')
                                            ->label('Zdjęcia')
                                            ->directory('home')
                                            ->getUploadedFileNameForStorageUsing(
                                                fn(TemporaryUploadedFile $file): string => 'slide-' . now()->format('H-i-s') . '-' . str_replace([' ', '.'], '', microtime()) . '.' . $file->getClientOriginalExtension()
                                            )
                                            ->multiple()
                                            ->appendFiles()
                                            ->image()
                                            ->reorderable()
                                            ->maxSize(8192)
                                            ->optimize('webp')
                                            ->imageEditor()
                                            ->maxFiles(6)
                                            ->panelLayout('grid')
                                            ->imageEditorAspectRatios([
                                                null,
                                                '16:9',
                                                '4:3',
                                                '1:1',
                                            ])
                                            ->required()
                                            ->columnSpanFull(),
                                    ])



                            ]),

                        // SECTIONS
                        Tabs\Tab::make('Sekcje')
                            ->icon('heroicon-o-square-3-stack-3d')
                            ->columns()
                            ->schema([

                                // rooms
                                Section::make('Pokoje')
                                    ->collapsed()
                                    ->schema([
                                        Forms\Components\TextInput::make('rooms_heading')
                                            ->label('Nagłówek')
                                            ->columnSpanFull()

                                            ->required(),

                                        Forms\Components\RichEditor::make('rooms_text')
                                            ->label('Paragraf')
                                            ->toolbarButtons([
                                                'bold',
                                                'italic',
                                                'underline',
                                                'bulletList',
                                            ])
                                            ->required()
                                            ->columnSpanFull(),
                                    ]),

                                //about
                                Section::make('O nas')
                                    ->collapsed()
                                    ->schema([

                                        Fieldset::make('Blok 1')
                                            ->schema([
                                                Forms\Components\RichEditor::make('about_text_first')
                                                    ->label('Paragraf')
                                                    
                                                    ->required()
                                                    ->columnSpanFull(),
                                                Forms\Components\FileUpload::make(name: 'about_image_first')
                                                    ->label('Zdjęcie')
                                                    ->directory('home')
                                                    ->getUploadedFileNameForStorageUsing(
                                                        fn(TemporaryUploadedFile $file): string => 'o-nas-' . now()->format('H-i-s') . '-' . str_replace([' ', '.'], '', microtime()) . '.' . $file->getClientOriginalExtension()
                                                    )

                                                    ->appendFiles()
                                                    ->image()
                                                    ->reorderable()

                                                    ->maxSize(8192)
                                                    ->optimize('webp')
                                                    ->imageEditor()

                                                    ->imageEditorAspectRatios([
                                                        null,
                                                        '16:9',
                                                        '4:3',
                                                        '1:1',
                                                    ])
                                                    ->required()
                                                    ->columnSpanFull(),
                                            ]),

                                        Fieldset::make('Blok 2')
                                            ->schema([
                                                Forms\Components\RichEditor::make('about_text_second')
                                                    ->label('Paragraf')
                                                   
                                                    ->required()
                                                    ->columnSpanFull(),
                                                Forms\Components\FileUpload::make(name: 'about_image_second')
                                                    ->label('Zdjęcie')
                                                    ->directory('home')
                                                    ->getUploadedFileNameForStorageUsing(
                                                        fn(TemporaryUploadedFile $file): string => 'o-nas-' . now()->format('H-i-s') . '-' . str_replace([' ', '.'], '', microtime()) . '.' . $file->getClientOriginalExtension()
                                                    )

                                                    ->appendFiles()
                                                    ->image()
                                                    ->reorderable()

                                                    ->maxSize(8192)
                                                    ->optimize('webp')
                                                    ->imageEditor()

                                                    ->imageEditorAspectRatios([
                                                        null,
                                                        '16:9',
                                                        '4:3',
                                                        '1:1',
                                                    ])
                                                    ->required()
                                                    ->columnSpanFull(),
                                            ]),


                                    ]),

                                //restaurant
                                Section::make('Restauracja')
                                    ->collapsed()
                                    ->schema([

                                        Fieldset::make('Blok 1')
                                            ->schema([
                                                Forms\Components\RichEditor::make('restaurant_text_first')
                                                    ->label('Paragraf')
                                                    ->required()
                                                    ->columnSpanFull(),

                                                Forms\Components\FileUpload::make(name: 'restaurant_image_first')
                                                    ->label('Zdjęcie')
                                                    ->directory('home')
                                                    ->getUploadedFileNameForStorageUsing(
                                                        fn(TemporaryUploadedFile $file): string => 'restauracja-' . now()->format('H-i-s') . '-' . str_replace([' ', '.'], '', microtime()) . '.' . $file->getClientOriginalExtension()
                                                    )

                                                    ->appendFiles()
                                                    ->image()
                                                    ->reorderable()

                                                    ->maxSize(8192)
                                                    ->optimize('webp')
                                                    ->imageEditor()

                                                    ->imageEditorAspectRatios([
                                                        null,
                                                        '16:9',
                                                        '4:3',
                                                        '1:1',
                                                    ])
                                                    ->required()
                                                    ->columnSpanFull(),
                                            ]),

                                        Fieldset::make('Blok 2')
                                            ->schema([
                                                Forms\Components\RichEditor::make('restaurant_text_second')
                                                    ->label('Paragraf')
                                                    ->required()
                                                    ->columnSpanFull(),
                                            ]),


                                        Forms\Components\FileUpload::make(name: 'restaurant_image_second')
                                            ->label('Zdjęcie')
                                            ->directory('home')
                                            ->getUploadedFileNameForStorageUsing(
                                                fn(TemporaryUploadedFile $file): string => 'restauracja' . now()->format('H-i-s') . '-' . str_replace([' ', '.'], '', microtime()) . '.' . $file->getClientOriginalExtension()
                                            )

                                            ->appendFiles()
                                            ->image()
                                            ->reorderable()

                                            ->maxSize(8192)
                                            ->optimize('webp')
                                            ->imageEditor()

                                            ->imageEditorAspectRatios([
                                                null,
                                                '16:9',
                                                '4:3',
                                                '1:1',
                                            ])
                                            ->required()
                                            ->columnSpanFull(),

                                    ]),

                                

                                // testimonials
                                Section::make('Opinie')
                                    ->collapsed()
                                    ->schema([
                                        Shout::make('info')
                                            ->content('Aby dodać opinie przejdź do dedykowanej zakładki')
                                            ->type('info')
                                            ->color('info')
                                            ->columnSpanFull(),
                                        Forms\Components\TextInput::make('testimonials_heading')
                                            ->label('Nagłówek')
                                            ->columnSpanFull()

                                            ->required(),

                                        Forms\Components\RichEditor::make('testimonials_text')
                                            ->label('Paragraf')
                                            ->toolbarButtons([
                                                'bold',
                                                'italic',
                                                'underline',
                                                'bulletList',
                                            ])
                                            ->required()
                                            ->columnSpanFull(),


                                        Fieldset::make('google')
                                            ->schema([
                                                Forms\Components\TextInput::make('google_reviews')
                                                    ->label('Liczba opini w google')
                                                    ->placeholder('452')
                                                    ->numeric(),


                                                Forms\Components\TextInput::make('google_reviews_average')
                                                    ->label('Średnia ocen')
                                                    ->placeholder('4.6'),


                                                Forms\Components\TextInput::make('google_reviews_link')
                                                    ->label('Link do wizytówki google')
                                                    ->placeholder('https://maps.app.goo.gl/J68keyMP4o8iAR1C6')
                                                    ->url()
                                                    ->columnSpanFull(),

                                            ]),

                                        Fieldset::make('TripAdvisor')
                                            ->schema([


                                                Forms\Components\TextInput::make('tripadvisor_reviews')
                                                    ->label('Liczba opini w Trip Advisor')
                                                    ->placeholder('452')
                                                    ->numeric(),


                                                Forms\Components\TextInput::make('tripadvisor_reviews_average')
                                                    ->label('Średnia ocen')
                                                    ->placeholder('4.6'),


                                                Forms\Components\TextInput::make('tripadvisor_reviews_link')
                                                    ->label('Link do Trip Advisor')
                                                    ->placeholder('https://www.tripadvisor.com/Hotel_Review-g274772-d519743-Reviews-Hotel_Jan-Krakow_Lesser_Poland_Province_Southern_Poland.html')
                                                    ->url()
                                                    ->columnSpanFull(),





                                            ]),



                                    ]),

                                //travel
                                Section::make('Podróże i transfery ')
                                    ->collapsed()
                                    ->schema([
                                        Forms\Components\TextInput::make('travel_heading')
                                            ->label('Nagłówek')
                                            ->columnSpanFull()

                                            ->required(),

                                        Forms\Components\RichEditor::make('travel_text')
                                            ->label('Paragraf')
                                            ->toolbarButtons([
                                                'bold',
                                                'italic',
                                                'underline',
                                                'bulletList',
                                            ])
                                            ->required()
                                            ->columnSpanFull(),



                                        Fieldset::make('')
                                            ->schema([
                                                Forms\Components\FileUpload::make(name: 'travel_images')
                                                    ->label('Zdjęcia')
                                                    ->directory('home')
                                                    ->getUploadedFileNameForStorageUsing(
                                                        fn(TemporaryUploadedFile $file): string => 'podroze-' . now()->format('H-i-s') . '-' . str_replace([' ', '.'], '', microtime()) . '.' . $file->getClientOriginalExtension()
                                                    )
                                                    ->multiple()
                                                    ->appendFiles()
                                                    ->image()
                                                    ->reorderable()
                                                    ->hint("Dodaj trzy zdjęcia")
                                                    ->maxSize(8192)
                                                    ->optimize('webp')
                                                    ->imageEditor()
                                                    ->maxFiles(3)
                                                    ->minFiles(3)
                                                    ->panelLayout('grid')
                                                    ->imageEditorAspectRatios([
                                                        null,
                                                        '16:9',
                                                        '4:3',
                                                        '1:1',
                                                    ])
                                                    ->required()
                                                    ->columnSpanFull(),
                                            ])
                                    ]),
                            ]),

                        // META
                        Tabs\Tab::make('Meta')
                            ->icon('heroicon-o-globe-alt')
                            ->columns()
                            ->schema([


                                TextInput::make('meta_title')
                                    ->label('Tytuł Meta')
                                    ->placeholder('Meta title to tytuł strony internetowej wyświetlany w wynikach wyszukiwarek i na kartach przeglądarki.')
                                    ->characterLimit(60)
                                    ->minLength(10)
                                    ->maxLength(75)
                                    ->live(debounce: 1000)
                                    ->afterStateUpdated(function (Livewire $livewire, Component $component) {
                                        $validate = $livewire->validateOnly($component->getStatePath());
                                    })
                                    ->columnSpanFull()
                                    ->required(),

                                TextInput::make('meta_desc')
                                    ->label('Opis Meta')
                                    ->placeholder('Meta description to krótki opis strony internetowej wyświetlany w wynikach wyszukiwarek.')
                                    ->characterLimit(160)
                                    ->minLength(10)
                                    ->maxLength(180)
                                    ->live(debounce: 1000)
                                    ->afterStateUpdated(function (Livewire $livewire, Component $component) {
                                        $validate = $livewire->validateOnly($component->getStatePath());
                                    })
                                    ->columnSpanFull()
                                    ->required(),
                            ]),

                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('logo')
                    ->label('Logo'),
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
            'index' => Pages\ListHomes::route('/'),
            'create' => Pages\CreateHome::route('/create'),
            'edit' => Pages\EditHome::route('/{record}/edit'),
        ];
    }

    public static function getNavigationLabel(): string
    {
        return ('Treść');
    }
    public static function getPluralLabel(): string
    {
        return ('Treść');
    }

    public static function getLabel(): string
    {
        return ('Treść');
    }
}
