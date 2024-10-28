<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Translatable\HasTranslations;


class Home extends Model
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
        'title',
        'logo',
        'phone',
        'phone_second',
        'phone_third',
        'mail',
        'address',
        'city',
        'bank',
        'bank_account',
        'booking_link',
        'booking_script',
        'map',
        'map_link',
        'slider_title',
        'slider_subtitle',
        'slider_images',
        'about_heading',
        'about_text_first',
        'about_text_second',
        'about_images',
        'rooms_heading',
        'rooms_text',
        'testimonials_heading',
        'testimonials_text',
        'attractions_heading',
        'attractions_text',
        'attractions_images',
        'google_reviews',
        'google_reviews_average',
        'google_reviews_link',
        'tripadvisor_reviews',
        'tripadvisor_reviews_average',
        'tripadvisor_reviews_link',
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
        'title' => 'array',
        'booking_link' => 'array',
        'slider_title' => 'array',
        'slider_subtitle' => 'array',
        'about_heading' => 'array',
        'about_text_first' => 'array',
        'about_text_second' => 'array',
        'rooms_heading' => 'array',
        'rooms_text' => 'array',
        'testimonials_heading' => 'array',
        'testimonials_text' => 'array',
        'attractions_heading' => 'array',
        'attractions_text' => 'array',
        'slider_images' => 'array',
        'about_images' => 'array',
        'attractions_images' => 'array',
    ];

    public function socials(): HasMany
    {
        return $this->hasMany(Social::class);
    }

    public $translatable = [
        'meta_title',
        'meta_desc',
        'title',
        'booking_link',
        'slider_title',
        'slider_subtitle',
        'about_heading',
        'about_text_first',
        'about_text_second',
        'rooms_heading',
        'rooms_text',
        'testimonials_heading',
        'testimonials_text',
        'attractions_heading',
        'attractions_text',


    ];
}
