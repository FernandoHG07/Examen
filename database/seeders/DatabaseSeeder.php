<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\categoria;
use Database\Seeders\blog;
use Database\Seeders\pirata;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(categoriaSeeder::class);
        $this->call(blogSeeder::class);
        $this->call(pirataSeeder::class);
    }
}
