<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Komakino\Mando\Models\Character;

class MandoCharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('characters')->delete();

        Character::create([
            'name' => 'Din Djarin',
            'aliases' => ['Mando', 'The Mandlalorian'],
            'species' => 'Human',
            'gender' => 'male',
            'image' => 'https://static.wikia.nocookie.net/starwars/images/8/8a/DinDjarinSansHelmet-TMCh16.png',
        ]);

        Character::create([
            'name' => 'Grogu',
            'aliases' => ['The Child', 'Baby Yoda'],
            'species' => 'Yoda\'s species',
            'gender' => 'male',
            'image' => 'https://static.wikia.nocookie.net/starwars/images/4/43/TheChild-Fathead.png',
        ]);

        Character::create([
            'name' => 'Ahsoka Tano',
            'aliases' => ['Snips'],
            'species' => 'Togruta',
            'gender' => 'female',
            'image' => 'https://static.wikia.nocookie.net/starwars/images/1/12/AhsokaTano-AG.png',
        ]);

        Character::create([
            'name' => 'Gideon',
            'aliases' => ['Moff Gideon'],
            'species' => 'Human',
            'gender' => 'male',
            'image' => 'https://static.wikia.nocookie.net/starwars/images/3/30/Gideon-AG-Crop-Clean.png',
        ]);

    }
}
