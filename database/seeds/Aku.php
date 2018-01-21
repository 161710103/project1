<?php

use Illuminate\Database\Seeder;

class Aku extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $a=[
         ['nama' => 'diah']    

        ];
        DB::table('aku')->insert($a);
    }
}
