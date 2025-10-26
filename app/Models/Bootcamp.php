<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Bootcamp extends Model implements HasMedia
{
    /** @use HasFactory<\Database\Factories\BootcampFactory> */
    use HasFactory, InteractsWithMedia;

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('icon_image')
            ->singleFile();

        $this->addMediaCollection('top_image')
            ->singleFile();

        $this->addMediaCollection('gallery_images');

        $this->addMediaCollection('video')
            ->singleFile();

        $this->addMediaCollection('video_thumbnail')
            ->singleFile();
    }

    public function items(): HasMany
    {
        return $this->hasMany(BootcampItem::class);
    }
}
