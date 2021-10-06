<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable=['name','tel','salary','vehicle','age_id','city_id','year_id','car_id','car_models_id','monthly'];

    public function Car()
    {
        return $this->belongsTo(Car::class,'car_id');
    }
}
