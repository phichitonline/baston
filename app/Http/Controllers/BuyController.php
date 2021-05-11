<?php

namespace App\Http\Controllers;

use App\Models\Buy;
use App\Models\Buyitem;
use App\Models\Record;
use App\Models\Director;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BuyController extends Controller
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
    public function index(Buy $buy)
    {
        return view('buy.index', [
            'pagename' => "บันทึกขออนุมัติ",
            'buy' => $buy->all(),
        ]);
    }

    public function preview(Buy $buy)
    {
        // $customer_service = Service::where('customer_id', '=', $customer->id)->get();

        return view('buy.preview', [
            'pagename' => "หน้าสำหรับพิมพ์",
            // 'customer_service' => $customer_service
        ], compact('buy'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $director = Director::get();

        return view('buy.create', [
            'pagename' => "บันทึกขออนุมัติ",
            'record_id' => $request->rid,
            'buy_number' => $request->bid,
            'buy_type' => $request->btype,
            'buy_date' => $request->bdate,
            'buy_budget' => $request->bbudget,
            'buy_subject' => $request->bsubject,
            'buy_request' => $request->brequest,
            'buy_description' => $request->bdesc,
            'director' => $director,
        ]);
    }


    public function test(Request $request)
    {
        $record_id = $request->record_id;
        $buy_number = $request->buy_number;
        $buy_date = $request->buy_date;
        $buytype = $request->buytype;
        $buy_header = $request->buy_header;

        $groupitem = $request->groupitem;

        return view('buy.test', [
            'pagename' => "ทดสอบ",
            'groupitem' => $groupitem,
            'record_id' => $record_id,
            'buy_number' => $buy_number,
            'buy_date' => $buy_date,
            'buytype' => $buytype,
            'buy_header' => $buy_header,
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
        Buy::create($request->all());

        Record::where('id', $request->rid)->update(['buy_status' => 1]);

        $i = 1;
        $groupitem = $request->groupitem;
        foreach($groupitem as $data) {
            Buyitem::create([
                'rid' => $request->rid,
                'item_no' => $i++,
                'item_name' => $data['item_name'],
                'item_qty' => $data['item_qty'],
                'item_unit' => $data['item_unit'],
                'item_unit_price' => $data['item_unit_price'],
                'item_std_price' => $data['item_std_price'],
            ]);
        }

        return redirect()->route('buy.index')
                         ->with('success', 'บันทึกข้อมูลเรียบร้อยแล้ว');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Buy  $buy
     * @return \Illuminate\Http\Response
     */
    public function show(Buy $buy)
    {
        $buyitem = Buyitem::where('rid', '=', $buy->rid)
        ->orderBy('item_no', 'asc')
        ->skip(0)->take(4)
        ->get();
        $buyitem2 = Buyitem::where('rid', '=', $buy->rid)
        ->orderBy('item_no', 'asc')
        ->skip(4)->take(20)
        ->get();
        // $buysumprice = Buyitem::where('buy_id', '=', $buy->id)->sum('item_unit_price');
        $buysumprice1 = DB::table('buyitems')
        ->select(DB::raw('SUM((item_unit_price * item_qty)) as sumprice'))
        ->where('rid', '=', $buy->rid)
        ->where('item_no', '<', 5)
        ->get();
        foreach ($buysumprice1 as $data) {
            $buysumprice = $data->sumprice;
        }

        $buysumprice22 = DB::table('buyitems')
        ->select(DB::raw('SUM((item_unit_price * item_qty)) as sumprice'))
        ->where('rid', '=', $buy->rid)
        ->get();
        foreach ($buysumprice22 as $data) {
            $buysumprice2 = $data->sumprice;
        }

        $buyitemcount = Buyitem::where('rid', '=', $buy->rid)->count();

        $temp_budget = Record::where('id', '=', $buy->rid)->get();
        foreach ($temp_budget as $data) {
            $r_budget = $data->buy_budget;
        }

        return view('buy.show', [
            'pagename' => "หน้าสำหรับพิมพ์",
            'buyitem' => $buyitem,
            'buyitem2' => $buyitem2,
            'buysumprice' => $buysumprice,
            'buysumprice2' => $buysumprice2,
            'buyitemcount' => $buyitemcount,
            'r_budget' => $r_budget,
        ], compact('buy'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Buy  $buy
     * @return \Illuminate\Http\Response
     */
    public function edit(Buy $buy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Buy  $buy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Buy $buy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Buy  $buy
     * @return \Illuminate\Http\Response
     */
    public function destroy(Buy $buy)
    {
        Buyitem::where('rid', $buy->rid)->delete();
        Record::where('id', $buy->rid)->update(['buy_status' => NULL]);

        $buy->delete();
        return redirect()->route('buy.index')
                         ->with('success', 'ลบข้อมูลเรียบร้อยแล้ว');
    }
}
