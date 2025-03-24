<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Stasiun;

class StasiunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $stasiuns = ['Bogor-Jakarta', 'jakarta-Bandung', 'Bandung-Bogor','Jakarta-Bandung'];

        foreach ($stasiuns as $stasiun) {
            Stasiun::create(['name' => $stasiun]);
        }
    }
}
