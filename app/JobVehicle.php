<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobVehicle extends Model
{
    protected $fillable = [
        'type_of_vehicle','size_of_vehicle','number_of_vehicle','hight_of_vehicle'
    ];
}
