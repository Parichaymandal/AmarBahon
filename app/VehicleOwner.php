<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VehicleOwner extends Model
{
    protected  $fillable = [
        'name_of_owner', 'union_membership_no','date_of_birth','NIDno','address','phone','mobile','email','declaration_of_agreement'
    ];

    public function offering()
    {
        return $this->hasMany('App\Offering','vehicle_owner_id');
    }

    public function drivers()
    {
        return $this->hasMany('App\Driver','vehicle_owner_id');
    }

    public function vehicles()
    {
        return $this->hasMany('App\Vehicle','vehicle_owner_id');
    }

    public function bank_detail()
    {
        return $this->hasOne('App\BankDetail','vehicle_owner_id');
    }

    public function user()
    {
        return $this -> belongsTo('App\User','user_id');
    }




}
