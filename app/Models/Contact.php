<?php

namespace App\Models;

class Contact extends BaseModel
{
    protected function casts(): array
    {
        return [
            'checked' => 'boolean',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ];
    }
}
