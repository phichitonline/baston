<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buy extends Model
{
    protected $fillable = [
        'rid','buy_number','buy_date','buy_type','buy_subject','buy_headname','buy_subject2','buy_method','buy_reason','buy_perspec','buy_budget',
        'buy_project','buy_budgetcode','buy_period','buy_shop','buy_percheck1','buy_percheck2','buy_percheck3','buy_auth','buy_headauth','buy_description','status'
    ];
}
