<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class CidadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cidades')->insert([
            ['id'=> Str::uuid(), 'name' => 'Datas'],
            ['id'=> Str::uuid(), 'name' => 'Presidente Kubitschek'],
        ]);
    }
}
