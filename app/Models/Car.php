<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $fillable=['name'];

    public function carModels()
    {
       return $this->hasMany(CarModel::class,'car_id');
    }
    public function Order()
    {
        return $this->belongsTo(Order::class);
    }

}
