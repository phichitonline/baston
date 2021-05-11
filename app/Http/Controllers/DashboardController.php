<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
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

        return view('home.dashboard', [
            'pagename' => "Dashboard",
            'dash_data' => $dash_data,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
