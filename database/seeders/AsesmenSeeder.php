<?php

namespace Database\Seeders;

use App\Models\Asesmen;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AsesmenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Asesmen::create([
            'namalengkap'=>'Husni Faqih',
            'nomorinduk'=>'12220101',
            'id_skema'=>'2',
            'hasil'=>'k'
        ]);
        Asesmen::create([
            'namalengkap'=>'Ika Estri Widhiana',
            'nomorinduk'=>'12220102',
            'id_skema'=>'1',
            'hasil'=>'bk'
        ]);
        Asesmen::create([
            'namalengkap'=>'Amira Afifa Nahda',
            'nomorinduk'=>'12220103',
            'id_skema'=>'1',
            'hasil'=>'k'
        ]);
    }
}
