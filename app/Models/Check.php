<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Check extends Model
{
    protected $fillable = [
        'buy_id','check_bill','check_billtotal','check_billdate','check_checker','check_checkdate'
    ];
}
