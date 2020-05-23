<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offering extends Model
{
    protected $fillable = [
        'importer_offer','vehicle_owner_offer','status'
    ];

    public function job()
    {
        return $this->belongsTo('App\Job','job_id');
    }

    public function invoice()
    {
        return $this->hasOne('App\Invoice','offering_id');
    }

    public function vehicle_owner()
    {
        return $this->belongsTo('App\VehicleOwner','vehicle_owner_id');
    }
}
