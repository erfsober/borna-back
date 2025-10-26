<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutUsItem extends Model
{
    protected function casts(): array
    {
        return [
            'star' => 'integer',
        ];
    }
}
