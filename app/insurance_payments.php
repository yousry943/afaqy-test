<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class insurance_payments extends Model
{
    //
    protected $table='insurance_payments';
    protected $fillable = [
        'vehicle_id', 'contract_date', 'expiration_date','amount','cost'
    ];


}
