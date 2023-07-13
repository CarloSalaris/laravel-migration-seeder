<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Train;

class TrainTableSeeder extends Seeder
{

    public function run()
    {
        Train :: factory() -> count(100) -> create();
    }
}
