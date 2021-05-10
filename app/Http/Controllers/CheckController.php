<?php

namespace App\Http\Controllers;

use App\Models\Check;
use App\Models\Buy;
use App\Models\Director;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CheckController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Check $check)
    {

        $check_list = DB::connection('mysql')->select('
            SELECT c.id AS cid,c.*,b.* FROM checks c LEFT JOIN buys b ON c.buy_id = b.id
            ');

        return view('check.index', [
            'pagename' => "บันทึกตรวจรับ",
            'check_list' => $check_list,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $director = Director::get();

        return view('check.create', [
            'pagename' => "ตรวจรับพัสดุ",
            'buy_id' => $request->bid,
            'buy_number' => $request->bnum,
            'buy_subject' => $request->bsubj,
            'buy_shop' => $request->bshop,
            'buy_date' => $request->bdate,
            'buy_budget' => $request->bbudget,
            'director' => $director,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Check::create($request->all());

        Buy::where('id', $request->buy_id)->update(['status' => 1]);

        return redirect()->route('check.index')
                         ->with('success', 'บันทึกข้อมูลเรียบร้อยแล้ว');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Check  $check
     * @return \Illuminate\Http\Response
     */
    public function show(Check $check)
    {
        $check_list = DB::connection('mysql')->select('
            SELECT c.*,b.* FROM checks c LEFT JOIN buys b ON c.buy_id = b.id WHERE c.id = '.$check->id.'
            ');

        return view('check.show', [
            'pagename' => "หน้าสำหรับพิมพ์",
            'check_list' => $check_list,
        ], compact('check'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Check  $check
     * @return \Illuminate\Http\Response
     */
    public function edit(Check $check)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Check  $check
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Check $check)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Check  $check
     * @return \Illuminate\Http\Response
     */
    public function destroy(Check $check)
    {
        $check->delete();
        return redirect()->route('check.index')
                         ->with('success', 'ลบข้อมูลเรียบร้อยแล้ว');
    }
}
