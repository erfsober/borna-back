<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\Image\Enums\Fit;

class AboutUsItem extends BaseModel implements HasMedia
{
    use InteractsWithMedia;

    protected function casts(): array
    {
        return [
            'star' => 'integer',
        ];
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('doctor_image')
            ->singleFile();
    }
    public function registerMediaConversions(?Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->fit(Fit::Crop, 300, 400)
            ->performOnCollections('doctor_image')
            ->nonQueued();
    }
}
