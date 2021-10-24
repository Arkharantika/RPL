<?php

namespace App\Http\Controllers\Kaprodi;

use App\Models\Mahasiswa;
use App\Models\Seminarkp;
use App\Models\Kp;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KpController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $dataKP = Seminarkp::semkpsetuju();

        // $data = Mahasiswa::mhsall();

        $data = Kp::getwaiting()->join('kp_dokumen','kp_dokumen.kp_id','=','kp.id')
        ->join('kp_acc_pembimbing','kp_acc_pembimbing.mahasiswa_id','=','kp.mahasiswa_id')
        // ->join('ref_mahasiswa','ref_mahasiswa.id','=','kp_acc_pembimbing.mahasiswa_id')
        ->get();

        // dd($data);

        return view('kaprodi.kp.index',compact('data','dataKP'));
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
