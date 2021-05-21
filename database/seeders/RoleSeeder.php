<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('role')->insert([
            'name' => 'admin',
        ]);
        \Illuminate\Support\Facades\DB::table('role')->insert([
            'name' => 'leader',
        ]);
        \Illuminate\Support\Facades\DB::table('role')->insert([
            'name' => 'volunteer',
        ]);
    }
}
