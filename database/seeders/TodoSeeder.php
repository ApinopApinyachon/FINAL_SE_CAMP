<?php

namespace Database\Seeders;

use App\Models\Todo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Todo::create([
            'td_name' => 'แทงสนุ๊กเกอร์',
            'td_des' => 'ปะทะกับรอนนี่โอซิลแวนโดยมีจั๊ดทั้มมายืนดู',
            'td_status' => false
        ]);


    }
}
