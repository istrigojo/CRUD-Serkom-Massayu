<?php

namespace Database\Seeders;

use App\Models\Skema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkemaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Skema::create([
            'detail'=>'Programmer',
            'asesor'=>'Husni Faqih, M.Kom',
            'tanggal'=>'2024-08-09',
            'tempat'=>'Universitas Bina Sarana Informatika'
        ]);

        Skema::create([
            'detail'=>'Web Development',
            'asesor'=>'Husni Faqih, M.Kom',
            'tanggal'=>'2024-08-09',
            'tempat'=>'Universitas Bina Sarana Informatika'
        ]);
    }
}
