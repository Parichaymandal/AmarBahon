<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected  $fillable = [
        'name_of_importer', 'product','amount_of_goods','type_of_vehicle','number_of_vehicle','pick_up_zone','pick_up_address','destination','address','date_of_transport','reference_no',
        'pick_up_time','reaching_time'
    ];


    public function company()
    {
        return $this->belongsTo('App\Company','company_id');
    }

    public function job_vehicles()
    {
        return $this->hasMany('App\JobVehicle','job_id');
    }

    public function offerings()
    {
        return $this->hasMany('App\Offering','job_id');
    }


}
