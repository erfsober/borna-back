<?php

namespace App\Models;

use App\Traits\InteractsWithJalali;
use Illuminate\Foundation\Auth\User as Authenticatable;

class BaseAuthenticatable extends Authenticatable
{
    use InteractsWithJalali;
}
