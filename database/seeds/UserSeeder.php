<?php

use Illuminate\Database\Seeder;
use App\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Edgard Oliveira',
            'email' => 'neovenom@gmail.com',
            'password' => '$2y$10$cxCXo6YdcUGkJuCS0k92yuk3I5La8Z/HoHoYmvv/8.6GUR5p.aJxy', //123456
            'grupo_id' => 1,
        ]);
        User::create([
            'name' => 'Edgard',
            'email' => 'edgard@gmail.com',
            'password' => '123456',
            'grupo_id' => 1,
        ]);
    }
}
