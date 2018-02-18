<?php

use Illuminate\Database\Seeder;
use App\Models\City;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class)

        // $this->call('UserTableSeeder');
        $this->call('CitiesSeeder');
    }
}
class CitiesSeeder extends Seeder {

    public function run()
    {
        DB::table('Cities')->delete();
        City::create([
            'city' => 'Vilnius',
        ]);

        City::create([
            'city' => 'Kaunas',
        ]);
        City::create([
            'city' => 'Klaipėda',
        ]);
        City::create([
            'city' => 'Šiauliai',
        ]);
        City::create([
            'city' => 'Panevėžys',
        ]);
        City::create([
            'city' => 'Alytus',
        ]);
        City::create([
            'city' => 'Marijampolė',
        ]);

    }
}