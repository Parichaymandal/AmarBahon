<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    protected $fillable = [
        'name','NIDno','date_of_birth','license_no','address','phone','name_of_guardian','guardian_phone'
    ];

    public function vehicle_owner()
    {
        return $this->belongsTo('App\VehicleOwner','vehicle_owner_id');
    }

    public function vehicles()
    {
        return $this->hasMany('App\Vehicle','driver_id');
    }
}
