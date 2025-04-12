<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Platform;

class Game extends Model
{
    public function platforms()
    {
        return $this->belongsToMany(Platform::class);
    }
}
