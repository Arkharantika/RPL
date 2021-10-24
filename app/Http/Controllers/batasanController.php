<?php

namespace App\Http\Controllers;

use App\Models\batasan_bimbingan;

use Illuminate\Http\Request;

class batasanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jumlah = batasan_bimbingan::where('id',1)->get()->first();
        $jumlahnya = $jumlah->jumlah_bimbingan;

        // return $jumlahnya;
        return view('yuyun',compact('jumlahnya'));
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
        // return $request;
        // $jumlah = batasan_bimbingan::where('id',1)->get()->first();
        // return $jumlah;
        // return $request->pic;
        batasan_bimbingan::where('id',1)->update([
            'jumlah_bimbingan' => $request->pic,
        ]);

        return redirect('batasan')->with('message','Batasan Baru Telah ditetapkan !!');
        
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
