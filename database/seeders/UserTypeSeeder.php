<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $attention_types = [
            'atencao_basica',
            'atencao_primaria',
            'atencao_secundaria',
        ];

        foreach ($attention_types as $type) {
            DB::table('usertype')->insert([
                'type' => $type,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
