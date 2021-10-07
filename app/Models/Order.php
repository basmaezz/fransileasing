<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable=['name','tel','salary','vehicle','city_id','year_id','car_id','car_models_id','monthly'];

    public function Car()
    {
        return $this->belongsTo(Car::class,'car_id');
    }
    public function City()
    {
        return $this->belongsTo(City::class,'city_id');
    }
    public function carModel()
    {
        return $this->belongsTo(carModel::class,'city_id');
    }

}
