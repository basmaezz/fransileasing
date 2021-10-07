<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Condition;

class ConditionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $conditions = [
            ['name' => 'تم احتساب القسط الشهري بناء على سعر الفئة الاساسية'],
            ['name' => 'تم احتساب معدل النسبة السنوي على نسبة تأمين 15 % ومدة تمويل 5 سنوات'],
            ['name' => 'يعتمد معدل التأمين على السجل التأمينى للعميل'],
            ['name' => 'المواصفات المعروضة هي فقط للاعلان , وقد يختلف السعر حسب احتياج العميل'],
            ['name' => 'تطبق الشروط والاحكام'],
        ];
    Condition::insert($conditions);
    }
}
