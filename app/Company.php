<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'name_of_company','type_of_business','TIN_number','trade_license_no','trade_license_expiry','importer_registration_no','company_adress',
        'telephone_no','mobile_no','email','declaration_of_agreement'
    ];

    public function importer()
    {
        return $this->belongsTo('App\Importer','importer_id');
    }

    public function jobs()
    {
        return $this->hasMany('App\Job','company_id');
    }
}
