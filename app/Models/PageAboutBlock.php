<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Spatie\Translatable\HasTranslations;


class PageAboutBlock extends Model
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
        'page_about_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'text' => 'array',
        'page_about_id' => 'integer',
    ];

    public function pageAbout(): BelongsTo
    {
        return $this->belongsTo(PageAbout::class);
    }

    public static function getForm(): array
    {
        return [
            FileUpload::make('image')
                ->label('Obraz')
                ->directory('pageAbout')
                ->getUploadedFileNameForStorageUsing(
                    fn(TemporaryUploadedFile $file): string => 'o-nas-' . now()->format('H-i-s') . '-' . str_replace([' ', '.'], '', microtime()) . '.' . $file->getClientOriginalExtension()
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
                    'h2',
                    'h3',
                    
                ])
                ->required()
                ->columnSpanFull(),
        ];
    }
    public $translatable = [

        'text'
    ];
}
