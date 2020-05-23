<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $fillable = [
        'date_of_issued','jod_reference_no','importer_name','CNF_name','service_charge','total'
    ];

    public function offering()
    {
        return $this->belongsTo('App\Offering','offering_id');
    }
}
