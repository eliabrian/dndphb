<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Spell extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'level',
        'casting_time',
        'range',
        'duration',
        'description',
    ];

    /**
     * Get the school that owns the spell.
     *
     * @return BelongsTo
     */
    public function school(): BelongsTo
    {
        return $this->belongsTo(School::class);
    }

    /**
     * Component that belong to the spell.
     *
     * @return BelongsToMany
     */
    public function components(): BelongsToMany
    {
        return $this->belongsToMany(Component::class)
        ->using(ComponentSpell::class)
        ->withPivot('notes');
    }
}
