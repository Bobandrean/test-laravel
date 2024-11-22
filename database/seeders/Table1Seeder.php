<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Table1Seeder extends Seeder
{
    public function run()
    {
        DB::table('table1s')->insert([
            ['tanggal' => '2024-01-01', 'nilai' => 10, 'status' => 'Target'],
            ['tanggal' => '2024-02-02', 'nilai' => 5, 'status' => 'Actual'],
            ['tanggal' => '2024-02-01', 'nilai' => 7, 'status' => 'Target'],
            ['tanggal' => '2024-03-02', 'nilai' => 4, 'status' => 'Actual'],
            ['tanggal' => '2024-03-01', 'nilai' => 11, 'status' => 'Target'],
            ['tanggal' => '2024-04-02', 'nilai' => 15, 'status' => 'Actual'],
        ]);
    }
}
