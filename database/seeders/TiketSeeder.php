<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TiketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tiket')->insert([
            'name' => 'tiket 1',
            'harga' => 20000,
            'stasiun_id' => '1',
            'tanggal' => '13 April',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
