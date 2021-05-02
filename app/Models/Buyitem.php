<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buyitem extends Model
{
    protected $fillable = [
        'buy_id', 'item_no', 'item_name','item_qty' , 'item_unit' , 'item_unit_price', 'item_std_price'
    ];
}
