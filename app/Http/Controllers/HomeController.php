<?php

namespace App\Http\Controllers;

// use App\Models\Record;
// use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $dash_data = DB::connection('mysql')->select('
            SELECT COUNT(*) AS c_buy,COUNT(IF(r.buy_type = 1,1,NULL)) AS c_buy1,COUNT(IF(r.buy_type = 2,1,NULL)) AS c_buy2
            ,COUNT(IF(r.buy_type = 3,1,NULL)) AS c_buy3
            ,SUM(r.buy_budget) AS c_budget,SUM(b.buy_budgetuse) AS c_budgetuse
            ,SUM(IF(DATE_FORMAT(b.buy_date,"%m") = DATE_FORMAT(NOW(),"%m"),b.buy_budgetuse,NULL)) AS use_thismonth
            FROM records r LEFT JOIN buys b ON r.id = b.rid LEFT JOIN checks c ON c.buy_id = b.id
            WHERE b.`status` = 1
        ');

        return view('home.index', [
            'pagename' => "Dashboard",
            'dash_data' => $dash_data,
        ]);
    }

}
