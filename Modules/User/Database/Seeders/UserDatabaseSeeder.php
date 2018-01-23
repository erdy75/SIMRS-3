<?php

namespace Modules\User\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class UserDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::table('users')->insert([
            'id' => '1',
            'nama' => 'admin',
            'alamat' => 'null',
            'telepon' => 'null',
            'jabatan' => 'administrator',
            'password' => bcrypt('admin')
        ]);

        // $this->call("OthersTableSeeder");
    }
}