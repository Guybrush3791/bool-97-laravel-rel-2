<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Role;
use App\Models\User;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = Role :: factory() -> count(10) -> create();

        foreach ($roles as $role) {

            $users = User :: inRandomOrder() -> limit(rand(1, 5)) -> get();

            $role -> users() -> attach($users);
        }
    }
}
