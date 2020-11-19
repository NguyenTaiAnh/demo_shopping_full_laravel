<?php

namespace App\Http\Controllers;

use App\Pay_type;
use Illuminate\Http\Request;

class Pay_typeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pay_type = Pay_type::latest()->paginate(5);

        return view('pay_type.index',compact('pay_type'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pay_type.add');
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
        $request->validate([
           'payment'=>'required',
        ]);
        Pay_type::create($request->all());
        return redirect()->route('pay_type.index')->with('success','Pay type created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pay_type  $pay_type
     * @return \Illuminate\Http\Response
     */
    public function show(Pay_type $pay_type)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pay_type  $pay_type
     * @return \Illuminate\Http\Response
     */
    public function edit(Pay_type $pay_type)
    {
        //
        return view('pay_type.edit',compact('pay_type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pay_type  $pay_type
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pay_type $pay_type)
    {
        //
        $request->validate([
           'payment'=>'required',
        ]);
        $pay_type->update($request->all());
        return redirect()->route('pay_type.index')->with('success','Pay type edit successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pay_type  $pay_type
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pay_type $pay_type)
    {
        //
        $pay_type ->delete();
        return redirect()->route('pay_type.index')->with('success','Pay type deleted successfully');
    }
}
