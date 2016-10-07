<?php

use App\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $role = [
            [
            'id'           => 1,
            'name'         => 'root ',
            'display_name' => 'Permissão',
            'description'  => 'Permissão'
            ]
        ];

        foreach ($role as $key => $value) {
            Role::create($value);
        }

        $role_user = [
            [
                'user_id' => 1,
                'role_id' => 1
            ],
        ];

        DB::table('role_user')->insert($role_user);

        $permission_role = [
            ['permission_id' => 1, 'role_id' => 1],['permission_id' => 2, 'role_id' => 1],
            ['permission_id' => 3, 'role_id' => 1],['permission_id' => 4, 'role_id' => 1],

            ['permission_id' => 5, 'role_id' => 1],['permission_id' => 6, 'role_id' => 1],
            ['permission_id' => 7, 'role_id' => 1],['permission_id' => 8, 'role_id' => 1]
        ];

        DB::table('permission_role')->insert($permission_role);



    }
}
