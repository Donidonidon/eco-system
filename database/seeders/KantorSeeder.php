<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KantorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kantors')->insert([
            ['kantor' => 'Kantor Pusat'],
            ['kantor' => 'Kantor Cabang'],
            ['kantor' => 'Kantor Kas Tlogomas'],
            ['kantor' => 'Kantor Kas Pakisaji'],
        ]);
    }
}
