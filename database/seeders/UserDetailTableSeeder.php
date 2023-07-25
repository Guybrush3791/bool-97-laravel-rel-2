<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\UserDetail;

class UserDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $users = User :: all();
        $userDetails = UserDetail :: factory() -> count(count($users)) -> make();

        for ($x=0;$x<count($users);$x++) {

            $user = $users[$x];
            $userDetail = $userDetails[$x];

            $userDetail -> user_id = $user -> id;
            $userDetail -> save();
        }
    }
}
