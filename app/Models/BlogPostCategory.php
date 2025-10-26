<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class BlogPostCategory extends BaseModel
{
    /** @use HasFactory<\Database\Factories\BlogPostCategoryFactory> */
    use HasFactory;

    public function blogPosts(): HasMany
    {
        return $this->hasMany(BlogPost::class, 'category_id');
    }
}
