<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categoria;
use Illuminate\Support\Facades\DB;

class categoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoria = [
            'Real', 'Falso'
        ];

        for($i=0; $i<2; $i++){
            DB::table('categoria')->insert([
                'nombre'=>$categoria[$i]
            ]);
        }
    }
}
