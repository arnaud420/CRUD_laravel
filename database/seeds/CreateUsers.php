<?php

use Illuminate\Database\Seeder;

class CreateUsers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECK=0; ');
        DB::table('users')->truncate();

        DB::table('users')->insert();
    }
}
