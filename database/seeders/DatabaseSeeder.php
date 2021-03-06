<?php

namespace Database\Seeders;

use App\Models\Year;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//         \App\Models\User::factory(1)->create();
        $this->call([
//           CitySeeder::class,
//           CarSeeder::class,
//           carModelSeeder::class,
//            YearSeeder::class,
//            AgeSeeder::class,
//            ConditionSeeder::class,
            SettingSeeder::class,
        ]);
    }
}
