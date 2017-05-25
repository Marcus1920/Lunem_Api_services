<?php

use Illuminate\Database\Seeder;

class ReminderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        Db::table('reminders')->insert({

        	'Description'=>str_random(),
        	'date'=>NOW(),
        	'time'=>NOW(),

        })
    }
}
