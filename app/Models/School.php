<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class School extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
    ];

    /**
     * Get the spells for the school.
     *
     * @return HasMany
     */
    public function spell(): HasMany
    {
        return $this->hasMany(Spell::class);
    }
}
