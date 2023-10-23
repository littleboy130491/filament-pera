<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'excerpt',
        'status',
        'menu_order',
        'short_description',
        'item_details',
        'file_upload',
        'featured_image',
        'image_gallery'
    ];

    protected $casts = [
        'purpose' => 'array',
        'item_details' => 'array',
        'image_gallery' => 'array'
    ];

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }
}