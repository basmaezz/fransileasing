<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\City;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cars=[
            ['name'=>'TOYOTA'],
            ['name'=>'LEXUS'],
            ['name'=>'FORD'],
            ['name'=>'GMC' ],
            ['name'=>'CHEVROLET'],
            ['name'=>'NISSAN'],
            ['name'=>'MAZDA'],
            ['name'=>'HONDA'],
            ['name'=>'BMW'],
            ['name'=>'Mercedes'],
            ['name'=>'Audi'],
            ['name'=>'Porsche'],
            ['name'=>'Range Rover']

        ];
        Car::insert($cars);
    }
}
