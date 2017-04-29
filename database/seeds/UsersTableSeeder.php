<?php

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
         $data = array(
            [
                'nombre' => 'Admin',
                'apellido' => 'Admin',
                'password' => bcrypt('123456'),
                'email' => 'admin@hotmail.es',
                'rol' => 'Admin',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
        );
        
        App\User::insert($data);
    }
}
