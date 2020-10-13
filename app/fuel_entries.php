<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fuel_entries extends Model
{
    //


        protected $table='fuel_entries';
        protected $fillable = [
            'vehicle_id', 'entry_date', 'volume','cost'
        ];



}
