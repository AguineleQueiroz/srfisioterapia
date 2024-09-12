<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            'Editar',
            'Deletar',
            'Visualizar',
        ];

        foreach ($permissions as $permission) {
            DB::table('permission_type')->insert([
                'permission' => $permission,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
