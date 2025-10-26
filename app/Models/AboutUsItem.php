<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

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
}
