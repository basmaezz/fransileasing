<?php

namespace Database\Seeders;

use App\Models\CarModel;
use Illuminate\Database\Seeder;

class carModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $carmodels=[
           [
               'name'=> 'Land Cruiser',
               'car_id'=>'1'
           ],
            [
                'name'=>'Camry',
                'car_id'=>'1'
            ],
            [
                'name'=>'Avalon',
                'car_id'=>'1'
            ],
            [
                'name'=>'Prado',
                'car_id'=>'1'
            ],
               ['name'=>'Sedan LS', 'car_id'=>'2'],
                ['name'=>'Sedan ES','car_id'=>'2'],
               ['name'=>' Sedan ES-Hybrid','car_id'=>'2'],
               ['name'=>' Sedan LS','car_id'=>'2'],
                ['name'=>'Sedan LS-Hybrid','car_id'=>'2'],
                ['name'=>'SUV LS-Hybrid','car_id'=>'2'],
                 ['name'=>'SUV UX','car_id'=>'2'],
                ['name'=>'SUV NX','car_id'=>'2'],
                ['name'=>'SUV RX','car_id'=>'2'],
               ['name'=>' SUV RX-Hybrid','car_id'=>'2'],
               ['name'=>'SUV GX','car_id'=>'2'],
                ['name'=>'SUV LX','car_id'=>'2'],
               ['name'=>' Coupe RC','car_id'=>'2'],
               ['name'=>'Coupe LC','car_id'=>'2'],
                ['name'=>'Coupe RC-F','car_id'=>'2'],
               ['name'=>' ES-Hybrid','car_id'=>'2'],
                ['name'=>'LS-Hybrid','car_id'=>'2'],
               ['name'=>' RX-Hybrid','car_id'=>'2'],

            ['name'=>'Taurus','car_id'=>'3'],
            ['name'=>'Expedition','car_id'=>'3'],
            ['name'=>'Explorer','car_id'=>'3'],
           ['name'=>' F-150','car_id'=>'3'],
            ['name'=>'Yukon','car_id'=>'4'],
            ['name'=>'Sierra','car_id'=>'4'],
            ['name'=>'Tahoe','car_id'=>'5'],
          [  'name'=>'Suburban','car_id'=>'5'],
[            'name'=>'Patrol','car_id'=>'6'],
            [ 'name'=>' X-trail','car_id'=>'6'],
          [ 'name'=>' CX-5','car_id'=>'7'],
           ['name'=>' CX-9','car_id'=>'7'],
            ['name'=>'Accord','car_id'=>'8'],

              [ 'name'=>'1','car_id'=>'9'],
               ['name'=>'2 Gran Coupé','car_id'=>'9'],
               ['name'=>'2 COUPÉ','car_id'=>'9'],
               ['name'=>' M2 COMPETITION','car_id'=>'9'],
               [ 'name'=>' 3','car_id'=>'9'],
              [ 'name'=>' M3 COMPETITION','car_id'=>'9'],
             [  'name'=>' 4 COUPÉ','car_id'=>'9'],
             [   'name'=>'M4 COMPETITION','car_id'=>'9'],
              [ 'name'=>' 4 CONVERTIBLE','car_id'=>'9'],
             [   'name'=>'M4 Convertible','car_id'=>'9'],
             [  'name'=>' 4 SERIES GRAN COUPÉ','car_id'=>'9'],
              [  'name'=>'5','car_id'=>'9'],
             [  'name'=>' M5 COMPETITION','car_id'=>'9'],
              [ 'name'=>' 7','car_id'=>'9'],
             [  'name'=>' 8 GRAN COUPÉ','car_id'=>'9'],
             [   'name'=>'M8 GRAN COUPÉ','car_id'=>'9'],
             [  'name'=>' 8 COUPÉ','car_id'=>'9'],
             [  'name'=>' M8 COUPÉ','car_id'=>'9'],
            [   'name'=>' 8 CONVERTIBLE','car_id'=>'9'],
            [  'name'=>'  M8 CONVERTIBLE','car_id'=>'9'],
            [  'name'=>'  Z4','car_id'=>'9'],
           [  'name'=>'   X1','car_id'=>'9'],
            [  'name'=>'  X2','car_id'=>'9'],
            [    'name'=>'X3','car_id'=>'9'],
          [    'name'=>'  X3 M','car_id'=>'9'],
         [    'name'=>'   X4','car_id'=>'9'],
          [   'name'=>'   X4 M','car_id'=>'9'],
            [   'name'=>' X5','car_id'=>'9'],
            [  'name'=>'  X5 M','car_id'=>'9'],
            [  'name'=>'  X6','car_id'=>'9'],
            [   'name'=>' X6 M','car_id'=>'9'],
            [    'name'=>'X7','car_id'=>'9'],
            [   'name'=>' i4','car_id'=>'9'],
           [    'name'=>' iX','car_id'=>'9'],
                    [  'name'=> 'A-Class','car_id'=>'10'],
                 [     'name'=> ' A-Class Sedan','car_id'=>'10'],
                  [    'name'=> ' C-Class Sedan','car_id'=>'10'],
                   [   'name'=> ' C-Class Sedan','car_id'=>'10'],
                     [ 'name'=>  'E-Class Sedan','car_id'=>'10'],
                  [  'name'=> 'S-Class Sedan','car_id'=>'10'],
                   [   'name'=> ' Maybach S-Class','car_id'=>'10'],
                  [ 'name'=> 'C-Class Coupe','car_id'=>'10'],
                 [  'name'=> 'E-Class Coupe','car_id'=>'10'],
                 [  'name'=> 'CLA Coupe','car_id'=>'10'],
                  [ 'name'=> 'CLS Coupe','car_id'=>'10'],
                  [ 'name'=> 'GT Coupe','car_id'=>'10'],
                 [  'name'=> 'AMG GT 4-Door Coupe','car_id'=>'10'],
                 [ 'name'=>  'C-Class Coupe','car_id'=>'10'],
                [  'name'=>  'E-Class Coupe','car_id'=>'10'],
                [  'name'=>  'CLA Coupe','car_id'=>'10'],
                [  'name'=>  'CLS Coupe','car_id'=>'10'],
                [  'name'=>  'AMG GT Coupe','car_id'=>'10'],
                [  'name'=>  'G-Class','car_id'=>'10'],
            ['name'=>  'GLA','car_id'=>'10'],
                  ['name'=>  'GLB SUV','car_id'=>'10'],
                  [ 'name'=> 'GLC SUV','car_id'=>'10'],
                 [ 'name'=>  'GLE SUV','car_id'=>'10'],
                 [ 'name'=>  'GLS','car_id'=>'10'],
                 [ 'name'=>  'Maybach GLS','car_id'=>'10'],
                 [ 'name'=>  'Maybach S-Class','car_id'=>'10'],

         [ 'name'=> ' e-tron GT quattro','car_id'=>'11'],
        [ 'name'=> '  RS e-tron GT','car_id'=>'11'],
       [  'name'=> '  future comes standard','car_id'=>'11'],
         [ 'name'=> ' from  o-future in 4.9 sec','car_id'=>'11'],
     [  'name'=>  '   Audi RS 3 Sedan','car_id'=>'11'],
        [  'name'=> ' A4 Sedan','car_id'=>'11'],
       [  'name'=> '  S4 Sedan','car_id'=>'11'],
       [  'name'=> '  A5 Coupe','car_id'=>'11'],
        [   'name'=>' A5 Sportback','car_id'=>'11'],
       [  'name'=>'   S5 Coupe','car_id'=>'11'],
        [  'name'=> ' S5 Sportback','car_id'=>'11'],
        [  'name'=> ' RS 5 Sportback','car_id'=>'11'],
       [ 'name'=> '   A6 Sedan','car_id'=>'11'],
      [ 'name'=> '    S6 Sedan','car_id'=>'11'],
       [  'name'=> '  RS 6 Avant','car_id'=>'11'],
       [   'name'=> ' A7 Sportback','car_id'=>'11'],
       [  'name'=> '  S7 Sportback','car_id'=>'11'],
        [  'name'=>  'RS 7 Sportback','car_id'=>'11'],
     [  'name'=> '    A8 L','car_id'=>'11'],
      [    'name'=>'  S8','car_id'=>'11'],
      [    'name'=>'  Q3','car_id'=>'11'],
      [    'name'=> ' Q3 Sportback','car_id'=>'11'],
      [    'name'=> ' RS Q3 Sportback','car_id'=>'11'],
      [   'name'=> '  Q5','car_id'=>'11'],
     [    'name'=>  ' SQ5 Sportback','car_id'=>'11'],
     [    'name'=> '  Q7 ','car_id'=>'11'],
      [   'name'=> '  Q8','car_id'=>'11'],
       [   'name'=> ' RS Q8','car_id'=>'11'],
       [   'name'=> ' R8 Coupe','car_id'=>'11'],
       [   'name'=> ' R8 Spyder','car_id'=>'11'],
       [  'name'=> '  R8 Coupe RWD','car_id'=>'11'],
       [  'name'=>  ' R8 Spyder RWD','car_id'=>'11'],

            ['name'=>'718 Spyder','car_id'=>'12'],
            ['name'=>'718 Cayman','car_id'=>'12'],
            ['name'=>'718 Cayman GT4','car_id'=>'12'],
            ['name'=>'911 Carrera','car_id'=>'12'],
            ['name'=>'911 Turbo','car_id'=>'12'],
            ['name'=>'911 GT3','car_id'=>'12'],
            ['name'=>'Panamera','car_id'=>'12'],
            ['name'=>'Cayenne','car_id'=>'12'],
            ['name'=>'Macan','car_id'=>'12'],
        ];
        CarModel::insert($carmodels);
    }
}
