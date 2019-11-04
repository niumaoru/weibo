<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = factory(User::class)->times(150)->make();
        User::insert($users->makeVisible(['password','remember_token'])->toArray());

        $user = User::find(1);
        $user->name = '水牛哥哥';
        $user->email = 'niumaoru@hnmuzhiyao.com';
        $user->save();
    }
}
