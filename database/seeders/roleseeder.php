<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class roleseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('roles')->insert([
            'id'=>"1",
            'name'=> "super admin"
        ]);
        DB::table('roles')->insert([
            'id'=>"2",
            'name'=> "sub admin"
        ]);
    }
}
