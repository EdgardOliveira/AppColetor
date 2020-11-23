<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RecursoSeeder::class);
        $this->call(GrupoSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(PermissaoSeeder::class);
        $this->call(CidadeSeeder::class);
        $this->call(MedidorSeeder::class);
        $this->call(EnderecoSeeder::class);
        $this->call(ClienteSeeder::class);
        $this->call(LeituraSeeder::class);
    }
}
