<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities=[
            [
                'name'=>'Riyadh'
            ],
            [
                'name'=>'Jeedah'
            ],[
                'name'=>'Dammam'
            ],

        ];
        City::insert($cities);
    }

}
