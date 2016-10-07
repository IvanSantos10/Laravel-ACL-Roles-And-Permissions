<?php

use App\Permission;
use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
            'name'=>'Ivan Santos',
            'email'=>'ivan@santos.com',
            'password' => bcrypt(123456),
        ]);

        factory(User::class, 10)->create();
    }
}
