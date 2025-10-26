<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class ContactUsSetting extends Model implements HasMedia
{
    /** @use HasFactory<\Database\Factories\ContactUsSettingFactory> */
    use HasFactory;

    use InteractsWithMedia;

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('map_image')
            ->singleFile();
    }

    protected function casts(): array
    {
        return [
            'lat' => 'float',
            'lng' => 'float',
        ];
    }
}
