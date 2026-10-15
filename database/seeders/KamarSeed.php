<?php

namespace Database\Seeders;

use App\Models\kamar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class kamarSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        kamar::create([
            'no_kamar' => '101',
            'tipe_kamar' => 'VIP'
        ]);
    }
}
