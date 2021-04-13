<?php

namespace App\Http\Controllers;

use App\Models\Check;
use Illuminate\Http\Request;

class CheckController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Check $check)
    {
        return view('check.index', [
            'pagename' => "บันทึกตรวจรับ",
            'check' => $check->all(),
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
     * @param  \App\Models\Check  $check
     * @return \Illuminate\Http\Response
     */
    public function show(Check $check)
    {
        //
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
