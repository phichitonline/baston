<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    protected $fillable = [
        'buy_number', 'buy_type', 'buy_date', 'buy_subject','buy_budget' , 'buy_request', 'buy_status', 'buy_description'
    ];
}
