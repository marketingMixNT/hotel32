<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Translatable\HasTranslations;


class PageAbout extends Model
{
    use HasTranslations;

    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'meta_title',
        'meta_desc',
        'header_heading',
        'heading',
        'banner',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'meta_title' => 'array',
        'meta_desc' => 'array',
        'header_heading' => 'array',
        'heading' => 'array',
    ];

    public function pageAboutBlocks(): HasMany
    {
        return $this->hasMany(PageAboutBlock::class);
    }

    public $translatable = [
        'meta_title',
        'meta_desc',
        'header_heading',
        'heading',
    ];
}
