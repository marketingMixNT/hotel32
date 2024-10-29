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
        'mail',
        'city',
        'address',
        'bank',
        'bank_account',
        'booking_link',
        'booking_script',
        'map',
        'map_link',
        'slider_title',
        'slider_subtitle',
        'slider_images',
        'rooms_heading',
        'rooms_text',
        'about_text_first',
        'about_image_first',
        'about_text_second',
        'about_image_second',
        'restaurant_text_first',
        'restaurant_image_first',
        'restaurant_text_second',
        'restaurant_image_second',
        'testimonials_heading',
        'testimonials_text',
        'google_reviews',
        'google_reviews_average',
        'google_reviews_link',
        'tripadvisor_reviews',
        'tripadvisor_reviews_average',
        'tripadvisor_reviews_link',
        'travel_heading',
        'travel_text',
        'travel_images',
       
     
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'meta_title' => 'array',
        'booking_link' => 'array',
        'meta_desc' => 'array',
        'title' => 'array',
        'slider_title' => 'array',
        'slider_subtitle' => 'array',
        'slider_images' => 'array',
        'rooms_heading' => 'array',
        'rooms_text' => 'array',
        'about_text_first' => 'array',
        'about_text_second' => 'array',
        'restaurant_text_first' => 'array',
        'restaurant_text_second' => 'array',
        'testimonials_heading' => 'array',
        'testimonials_text' => 'array',
        'travel_heading' => 'array',
        'travel_text' => 'array',
        'travel_images' => 'array',
      
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
        'rooms_heading',
        'rooms_text',
        'about_text_first',
        'about_text_second',
        'restaurant_text_first',
        'restaurant_text_second',
        'testimonials_heading',
        'testimonials_text',
        'travel_heading',
        'travel_text',
       
    
    ];
}


