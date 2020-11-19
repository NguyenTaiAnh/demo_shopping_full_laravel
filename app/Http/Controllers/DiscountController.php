<?php

namespace App\Http\Controllers;

use App\Discount;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DiscountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $discount = Discount::latest()->paginate(5);

        return view('discount.index',compact('discount'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('discount.add');
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
        $request->validate([
           'code'=>'required',
            'percent'=>'required',

        ]);
        Discount::create([
            'code' => $request['code'],
            'percent' => $request['percent'],
            'time_start' => Carbon::parse($request['time_start'])->format('Y-m-d H:i:s'),
            'time_end' => Carbon::parse($request['time_end'])->format('Y-m-d H:i:s'),
        ]);
        return redirect()->route('discount.index')->with('success','Discount create successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Discount  $discount
     * @return \Illuminate\Http\Response
     */
    public function show(Discount $discount)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Discount  $discount
     * @return \Illuminate\Http\Response
     */
    public function edit(Discount $discount)
    {
        //
        return view('discount.edit',compact('discount'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Discount  $discount
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Discount $discount)
    {
        //
        $request->validate(
            [
                'code'=>'required',
                'percent'=>'required',

            ]
        );

        $discount->update([
            'code' => $request['code'],
            'percent' => $request['percent'],
            'time_start' => Carbon::parse($request['time_start'])->format('Y-m-d H:i:s'),
            'time_end' => Carbon::parse($request['time_end'])->format('Y-m-d H:i:s'),

        ]);


        return redirect()->route('discount.index')
            ->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Discount  $discount
     * @return \Illuminate\Http\Response
     */
    public function destroy(Discount $discount)
    {
        //
        $discount->delete();
        return redirect()->route('discount.index')->with('success','Discount deleted successfully');
    }
}
