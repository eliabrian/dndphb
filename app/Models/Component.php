<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Component extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
    ];

    /**
     * Spell that belong to the component.
     *
     * @return BelongsToMany
     */
    public function spells(): BelongsToMany
    {
        return $this->belongsToMany(Spell::class)
        ->using(ComponentSpell::class)
        ->with('notes');
    }
}
