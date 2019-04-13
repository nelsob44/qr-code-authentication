<?php

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'Admin'
        ]);

        Role::create([
            'name' => 'Moderator'
        ]);

        Role::create([
            'name' => 'Webmaster'
        ]);

        Role::create([
            'name' => 'Buyer'
        ]);
    }
}
