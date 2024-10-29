<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;


class PageRestaurantBlock extends Model
{
    use HasTranslations;

    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'image',
        'text',
        'sort',
        'page_restaurant_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'text' => 'array',
        'page_restaurant_id' => 'integer',
    ];

    public function pageRestaurant(): BelongsTo
    {
        return $this->belongsTo(PageRestaurant::class);
    }
    public static function getForm(): array
    {
        return [
            FileUpload::make('image')
                ->label('Obraz')
                ->directory('pageAbout')
                ->getUploadedFileNameForStorageUsing(
                    fn(TemporaryUploadedFile $file): string => 'restauracja-' . now()->format('H-i-s') . '-' . str_replace([' ', '.'], '', microtime()) . '.' . $file->getClientOriginalExtension()
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
        ];
    }
    public $translatable = [

        'text'
    ];
}
