<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BankDetail extends Model
{
    protected $fillable = [
        'account_name', 'account_number','account_type','name_of_bank','branch','address'
    ];

    public function vehicle_owner()
    {
        return $this->belongsTo('App\VehicleOwner','vehicle_owner_id');
    }
}
