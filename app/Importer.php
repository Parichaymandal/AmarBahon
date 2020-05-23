<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Importer extends Model
{
    protected $fillable = [
        'name_of_owner','date_of_birth','NIDno','address','email','phone'
    ];

    public function company()
    {
        return $this->hasOne('App\Company','importer_id');
    }

    public function user()
    {
        return $this -> belongsTo('App\User','user_id');
    }
}
