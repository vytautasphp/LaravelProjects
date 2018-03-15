<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class DriversSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
            DB::table('drivers')->insert([
                'name' => 'Jonas',
                'city' => 'Kaunas'
                ]);

            DB::table('drivers')->insert([
                'name' => 'Petras',
                'city' => 'Vilnius'
                ]);
             DB::table('drivers')->insert([
                'name' => 'Juozas',
                'city' => 'Siauliai'
                ]);

             DB::table('drivers')->insert([
                'name' => 'Antanas',
                'city' => 'Klaipeda'
                ]);
    }
}
