<?php

namespace App\Http\Controllers;

use App\Models\Record;
use App\Models\Setting;
use Illuminate\Http\Request;

class RecordController extends Controller
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
    public function index(Record $record)
    {
        return view('record.index', [
            'pagename' => "บันทึกขอซื้อ/จ้าง/เช่า",
            'record' => $record->all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Setting $setting)
    {
        // กำหนดตัวแปลการตั้งค่า setting เป็นแบบ Global ที่สามารถเรียกใช้ได้ทุกที่
        // ไว้ที่ไฟล์ App/Providers/AppServiceProvider.php
        // $sss = $setting->where('id', '=', '1')->get();
        return view('record.create', [
            'pagename' => "บันทึกขอซื้อ/จ้าง",
            // 'setting' => $sss,
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
            'buy_type' => 'required',
            'buy_date' => 'required',
            'buy_subject' => 'required',
            'buy_budget' => 'required',
            'buy_request' => 'required',
        ]);

        Record::create($request->all());

        return redirect()->route('record.index')
                         ->with('success', 'เพิ่มข้อมูลเรียบร้อยแล้ว');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Record  $record
     * @return \Illuminate\Http\Response
     */
    public function show(Record $record)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Record  $record
     * @return \Illuminate\Http\Response
     */
    public function edit(Record $record)
    {
        return view('record.edit', [
            'pagename' => "บันทึกขอซื้อ/จ้าง",
        ],compact('record'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Record  $record
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Record $record)
    {
        $request->validate([
            'buy_number' => 'required',
            'buy_date' => 'required',
            'buy_subject' => 'required',
            'buy_budget' => 'required',
            'buy_request' => 'required',
        ]);

        $record->update($request->all());

        return redirect()->route('record.index')
                         ->with('success', 'แก้ไขข้อมูลเรียบร้อยแล้ว');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Record  $record
     * @return \Illuminate\Http\Response
     */
    public function destroy(Record $record)
    {
        $record->delete();
        return redirect()->route('record.index')
                         ->with('success', 'ลบข้อมูลเรียบร้อยแล้ว');
    }
}
