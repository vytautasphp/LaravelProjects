<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class RadarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
            DB::table('radars')->insert([
            'date' => Carbon::create(2017, 1, 1, 23, 25, 50),
            'number' => 'AAA001',
            'distance' => 10,
            'time' => 200
            ]);

            DB::table('radars')->insert([
                'date' => Carbon::create(2017, 1, 1, 23, 25, 50),
                'number' => 'BBB001',
                'distance' => 10,
                'time' => 200
                ]);

            DB::table('radars')->insert([
                'date' => Carbon::create(2017, 1, 1, 23, 25, 50),
                'number' => 'CCC001',
                'distance' => 5000,
                'time' => 300
                ]);
            DB::table('radars')->insert([
                'date' => Carbon::create(2016, 2, 3, 22, 25, 50),
                'number' => 'CCC001',
                'distance' => 6000,
                'time' => 150
                ]);  
                
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
