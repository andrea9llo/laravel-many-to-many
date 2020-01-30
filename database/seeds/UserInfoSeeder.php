<?php

use Illuminate\Database\Seeder;
use App\UserInfo;
use App\User;


class UserInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(UserInfo::class, 20) -> make() -> each(function($userInfo){

        $user = User::inRandomOrder() -> first();
        $userInfo -> user() -> associate($user);
        $userInfo -> save();

      });
    }
}
