<?php

use Illuminate\Database\Seeder;


class Appointments extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('appointments')->truncate();

        appointments::create(['id' => '1','description' => 'the  have  you  have  ', 'location' => 'homepage' , 'notes' =>'fdfdsfdsfd'

        ,'start' => '11-30-2017' , 'end' => '28-40-2016' ,  'reminder' => '28-40-2016'
        ]);
        appointments::create(['id' => '1','description' => 'the  have  you  have  ', 'location' => 'homepage' , 'notes' =>'fdfdsfdsfd'

            ,'start' => '11-30-2017' , 'end' => '28-40-2016' ,  'reminder' => '28-40-2016'
        ]);

    }
}
