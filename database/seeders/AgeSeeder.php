<?php

namespace Database\Seeders;

use App\Models\Age;
use Illuminate\Database\Seeder;

class AgeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ages=[
            ['name'=>'20-34'],
            ['name'=>'35-44'],
            ['name'=>'45-54'],
            ['name'=>'55-60'],

        ];
        Age::insert($ages);
    }
}
