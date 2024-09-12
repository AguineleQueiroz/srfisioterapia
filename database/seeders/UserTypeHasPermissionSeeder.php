<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserTypeHasPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $haspermissions=[
            [1, 3],
            [2, 1],
            [2, 2],
            [2, 3],
            [3, 1],
            [3, 2],
            [3, 3]
        ];

        foreach($haspermissions as $pair){
            DB::table('usertype_has_permission')->insert([
                'usertype_id' => $pair[0],
                'permission_type_id' => $pair[1],
                'created_at' => now(),
                'created_at' => now(),
            ]);
        }
    }
}
