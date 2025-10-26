<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class BlogPost extends Model implements HasMedia
{
    /** @use HasFactory<\Database\Factories\BlogPostFactory> */
    use HasFactory, InteractsWithMedia;

    protected function casts(): array
    {
        return [
            'read_duration' => 'integer',
        ];
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('image')
            ->singleFile();
    }
}
