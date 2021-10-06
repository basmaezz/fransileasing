<?php

namespace Database\Seeders;

use App\Models\Year;
use Illuminate\Database\Seeder;

class YearSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $years=[
          ['name'=>'2020'],
          ['name'=>'2021'],
        ];
        Year::insert($years);
    }
}
