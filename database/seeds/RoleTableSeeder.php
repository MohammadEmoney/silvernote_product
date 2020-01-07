<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert(
            [
                ['id' => 1, 'title' => 'Super Admin'],
                ['id' => 2, 'title' => 'Admin'],
                ['id' => 3, 'title' => 'Writer'],
                ['id' => 4, 'title' => 'User']
            ]
        );
    }
}
