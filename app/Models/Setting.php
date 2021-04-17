<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        's_no', 's_name', 's_headname', 's_address'
    ];
}
