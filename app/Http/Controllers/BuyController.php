<?php

namespace App\Http\Controllers;

use App\Models\Buy;
use Illuminate\Http\Request;

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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('buy.create', [
            'pagename' => "บันทึกขออนุมัติ",
            'buy_id' => $request->did,
            'buy_number' => $request->bid,
            'buy_date' => $request->bdate,
            'buy_budget' => $request->bbudget,
            'buy_header' => $request->bheader,
            'buy_request' => $request->brequest,
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
        $request->validate([
            'buy_number' => 'required',
            'buy_date' => 'required',
            'buy_header' => 'required',
            'buy_budget' => 'required',
            'buy_request' => 'required',
        ]);

        Buy::create($request->all());

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
        //
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
