<?php

namespace App\Http\Controllers;

use App\Models\Penguji;
use App\Models\Dosen;
use App\Models\Ta;

use Illuminate\Http\Request;

class pengujianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Gabung = Ta::join('ta_penguji','ta_penguji.ta_id','=','ta.id')->join('ref_mahasiswa','ref_mahasiswa.id','=','ta.mahasiswa_id')
        ->join('ref_dosen','ref_dosen.id','=','ta_penguji.penguji_semhas')
        ->join('ta_seminar','ta_seminar.ta_id','=','ta.id')->get();
        // ->where('ref_dosen.id',$request->$pembimbing)->where('pem',1)->where('status_pendadaranpem',null)->count();

        $Gabung2 = Ta::join('ta_penguji','ta_penguji.ta_id','=','ta.id')->join('ref_mahasiswa','ref_mahasiswa.id','=','ta.mahasiswa_id')
        ->join('ref_dosen','ref_dosen.id','=','ta_penguji.penguji_semhas')
        ->join('ta_pendadaran','ta_pendadaran.ta_id','=','ta.id')->get();

        $yun = Dosen::all();

        // return $Gabung2;
        return view('pengujian',compact('yun','Gabung'));
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
