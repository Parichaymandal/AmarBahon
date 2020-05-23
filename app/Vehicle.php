<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable = [
        'size','type_of_vehicle','registration_no','chassis_no','logbook_no','token_no'
    ];

    public function vehicle_owner()
    {
        return $this->belongsTo('App\VehicleOwner','vehicle_owner_id');
    }

    public function driver()
    {
        return $this->belongsTo('App\Driver','driver_id');
    }
}
