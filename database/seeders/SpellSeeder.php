<?php

namespace Database\Seeders;

use App\Models\Component;
use App\Models\School;
use App\Models\Spell;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SpellSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $spell = [
            'name' => 'Aid',
            'slug' => 'aid',
            'level' => 2,
            'casting_time' => 'Action',
            'range' => '30 feet',
            'duration' => '8 Hours',
            'description' => "Choose up to three creatures within range. Each target's Hit Point maximum and current Hit Points increase by 5 for the duration. Using a Higher-Level Spell Slot. Each target's Hit Points increase by 5 for each spell slot level above 2."
        ];

        $component = [
            1 => ['notes' => null],
            2 => ['notes' => null],
            3 => ['notes' => 'a strip of white cloth'],
        ];

        $school = School::where('slug', 'abjuration')->first();

        $created = Spell::create($spell);
        $created->school()->associate($school);
        $created->save();

        $created->components()->attach($component);
    }
}
