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
            'buy_date' => $request->bdate,
            'buy_budget' => $request->bbudget,
            'buy_header' => $request->bheader,
            'buy_request' => $request->brequest,
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

        Record::where('id', $request->record_id)->update(['buy_status' => 1]);

        $i = 1;
        $groupitem = $request->groupitem;
        foreach($groupitem as $data) {
            Buyitem::create([
                'buy_id' => $request->record_id,
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
        $buyitem = Buyitem::where('buy_id', '=', $buy->id)
        ->orderBy('item_no', 'asc')
        ->skip(0)->take(13)
        // ->limit(3)
        ->get();
        // $buysumprice = Buyitem::where('buy_id', '=', $buy->id)->sum('item_unit_price');
        $buysumprice1 = DB::table('buyitems')
        ->select(DB::raw('SUM((item_unit_price * item_qty) * 1.07) as sumprice'))
        ->where('buy_id', '=', $buy->id)
        ->skip(0)->take(13)
        // ->limit(3)
        ->get();

        $buyitem_count = Buyitem::where('buy_id', '=', $buy->id)->count();

        foreach ($buysumprice1 as $data) {
            $buysumprice = $data->sumprice;
        }

        return view('buy.show', [
            'pagename' => "หน้าสำหรับพิมพ์",
            'buyitem' => $buyitem,
            'buysumprice' => $buysumprice,
            'buyitem_count' => $buyitem_count,
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
        //
    }
}
