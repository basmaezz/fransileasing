<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use PhpOffice\PhpSpreadsheet\Settings;
use App\Models\Setting;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $setting= [
                  ['name'=>'قيمة تقيم السيارة','value'=>'SAR100.000'],
                  ['name'=>'فترة التمويل','value'=>'4 سنوات'],
                  ['name'=>'هامش الربح ','value'=>'5.99%'],
                  ['name'=>'التأمين','value'=>'1.50%'],
                  ['name'=>'القسط الشهري ','value'=>'2.682 SAR'],
                  ['name'=>'معدل النسبة السنوي ','value'=>'14.67%'],
        ];

        Setting::insert($setting);
    }
}
