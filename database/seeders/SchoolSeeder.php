<?php

namespace Database\Seeders;

use App\Models\School;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $schools = [
            [
                'name' => 'Abjuration',
                'slug' => 'abjuration',
                'description' => 'Prevents or reverses harmful effects'
            ],
            [
                'name' => 'Conjuration',
                'slug' => 'conjuration',
                'description' => 'Transports creatures or objects'
            ],
            [
                'name' => 'Divination',
                'slug' => 'divination',
                'description' => 'Reveals information'
            ],
            [
                'name' => 'Enchantment',
                'slug' => 'enchantment',
                'description' => 'Influences minds'
            ],
            [
                'name' => 'Evocation',
                'slug' => 'evocation',
                'description' => 'Channels energy to create effects that are often destructive'
            ],
            [
                'name' => 'Illusion',
                'slug' => 'illusion',
                'description' => 'Deceives the mind or senses'
            ],
            [
                'name' => 'Necromancy',
                'slug' => 'necromancy',
                'description' => 'Manipulates life and death'
            ],
            [
                'name' => 'Transmutation',
                'slug' => 'transmutation',
                'description' => 'Transforms creatures or objects'
            ],
        ];

        foreach ( $schools as $school ) {
            School::create($school);
        }
    }
}
