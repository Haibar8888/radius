<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('packages')->insert(
            [
                [
                'name' => 'standart',
                'price' => 45000,
                'max_days' => 30,
                'max_users' => 2,
                'is_download' => 1,
                'is_4k' => 1,
                'created_at' => Now(),
                'updated_at' => Now()
                ],
                
                [
                'name' => 'gold',
                'price' => 90000,
                'max_days' => 60,
                'max_users' => 7,
                'is_download' => 1,
                'is_4k' => 1,
                'created_at' => Now(),
                'updated_at' => Now()
                
                ],
            ]
        );
    }
}
