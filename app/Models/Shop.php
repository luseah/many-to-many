<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Shop extends Model
{
    public function shops(): BelongsToMany
    {
        return $this->belongsToMany(Shop::class);
    }
}