<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vehicles extends Model
{
    //

    protected $table='vehicles';
    protected $fillable = [
        'name', 'plate_number', 'imei','vin','year','licenseIndex'
    ];

    public function cost(){
        return $this->belongsTo('App\fuel_entries','id');

    }

    public function amount(){
        return $this->belongsTo('App\insurance_payments','id');

    }

    public function total(){
        return $this->belongsTo('App\services','id');

    }





}
