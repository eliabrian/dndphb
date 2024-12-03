<?php

namespace App\Http\Resources;

use App\Models\ComponentSpell;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SpellResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $components = [];
        foreach ($this->components as $component) {
            $components[] = [
                'name' => $component->name,
                'slug' => $component->slug,
                'notes' => $component->pivot->notes,
            ];
        }

        return [
            'id' => $this->id,
            'name' => $this->name,
            'slug' => $this->slug,
            'school' => new SchoolResource($this->school),
            'level' => $this->level,
            'casting_time' => $this->casting_time,
            'range' => $this->range,
            'components' => $components,
            'duration' => $this->duration,
            'description' => $this->description,
        ];
    }
}
