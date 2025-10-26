<?php

namespace App\Models;

use App\Traits\InteractsWithJalali;
use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    use InteractsWithJalali;
}
