<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminUsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('admin_users')->delete();

        \DB::table('admin_users')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Admin',
                'email' => 'admin@pushkaram.edu',
                'mobile' => '971527656870',
                'username' => 'PCSA Admin',
                'password' => 'e6e061838856bf47e1de730719fb2609',
                'active' => 1,
                'admin_desc' => NULL,
                'is_superadmin' => 1,
                'created_by_admin' => 'PUSK001',
            ),
        ));

    }
}
