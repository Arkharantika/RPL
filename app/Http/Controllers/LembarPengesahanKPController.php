<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Mahasiswa;
use App\Models\lemperKP;
use App\Models\lempropKP;
use App\Models\Jabatan;
use App\Models\Seminarkp;
use App\Models\Kp;
use PDF;

class LembarPengesahanKPController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
     public function index()
    {
        return view('lemperkp');
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

    public function lemperProposal(){
        $mhs = Mahasiswa::mhs(Auth::user()->nim)->first();
        $data = lemperKP::where('nim_mhs',$mhs->nim)->get()->first();
        
        $complete = Mahasiswa::join('Kp','kp.mahasiswa_id','=','ref_mahasiswa.id')
        ->join('kp_acc','kp_acc.kp_id','=','kp.id')
        ->join('lempropkp','lempropkp.nama_mhs','=','ref_mahasiswa.nama_mhs')
        // ->join('kp_seminar','kp_seminar.kp_id','=','kp.id')
        ->join('ref_dosen','ref_dosen.id','=','ref_mahasiswa.pem_kp')
        ->where('nim',$mhs->nim)->get()->first();

        if($complete == ''){
            return view('errors/dataKosongProposal');
        }

        $kaprodi = Jabatan::kaprodi();
        $koorkp = Jabatan::kp();

        $config = [
            'format' => 'A4-P', // Portrait
             'margin_left'          => 40,
             'margin_right'         => 30,
             'margin_top'           => 30,
             'margin_footer'        => 25,
            // 'margin_bottom'        => 25,
          ];     
          $dayList = array(
                  'Sun' => 'Minggu',
                  'Mon' => 'Senin',
                  'Tue' => 'Selasa',
                  'Wed' => 'Rabu',
                  'Thu' => 'Kamis',
                  'Fri' => 'Jumat',
                  'Sat' => 'Sabtu'
              );
              $monthList = array(
                  'Jan' => 'Januari',
                  'Feb' => 'Februari',
                  'Mar' => 'Maret',
                  'Apr' => 'April',
                  'May' => 'Mei',
                  'Jun' => 'Juni',
                  'Jul' => 'Juli',
                  'Aug' => 'Agustus',
                  'Sep' => 'September',
                  'Oct' => 'Oktober',
                  'Nov' => 'November',
                  'Dec' => 'Desember',
              );

          $pdf = PDF::loadview('pengesahanProposal',compact('dayList','monthList','data','mhs','complete','kaprodi','koorkp'),[],$config);
          return $pdf->stream();
    }

    public function lemperLaporan(){
        $mhs = Mahasiswa::mhs(Auth::user()->nim)->first();
        $data = lemperKP::where('nim_mhs',$mhs->nim)->get()->first();
        
        $complete = Mahasiswa::join('Kp','kp.mahasiswa_id','=','ref_mahasiswa.id')
        ->join('kp_acc','kp_acc.kp_id','=','kp.id')
        ->join('lemperkp','lemperkp.nama_mhs','=','ref_mahasiswa.nama_mhs')
        ->join('kp_seminar','kp_seminar.kp_id','=','kp.id')
        ->join('ref_dosen','ref_dosen.id','=','ref_mahasiswa.pem_kp')
        ->where('nim',$mhs->nim)->get()->first();

        if($complete == ''){
            return view('errors/datakosong');
        }

        $kaprodi = Jabatan::kaprodi();
        $koorkp = Jabatan::kp();

        $config = [
            'format' => 'A4-P', // Portrait
             'margin_left'          => 40,
             'margin_right'         => 30,
             'margin_top'           => 30,
             'margin_footer'        => 25,
            // 'margin_bottom'        => 25,
          ];     
          $dayList = array(
                  'Sun' => 'Minggu',
                  'Mon' => 'Senin',
                  'Tue' => 'Selasa',
                  'Wed' => 'Rabu',
                  'Thu' => 'Kamis',
                  'Fri' => 'Jumat',
                  'Sat' => 'Sabtu'
              );
              $monthList = array(
                  'Jan' => 'Januari',
                  'Feb' => 'Februari',
                  'Mar' => 'Maret',
                  'Apr' => 'April',
                  'May' => 'Mei',
                  'Jun' => 'Juni',
                  'Jul' => 'Juli',
                  'Aug' => 'Agustus',
                  'Sep' => 'September',
                  'Oct' => 'Oktober',
                  'Nov' => 'November',
                  'Dec' => 'Desember',
              );

          $pdf = PDF::loadview('pengesahanKP',compact('dayList','monthList','data','mhs','complete','kaprodi','koorkp'),[],$config);
          return $pdf->stream();
    }

    public function setujuProposal($id)
    {   
        lempropKP::where('nim_mhs',$id)->update([
            'ya_koor' => 1,
        ]);

        return redirect(route('admin.permohonan.index'))->with('message','Proposal KP Berhasil Disetujui');
    }

    public function setujuKaprodiProposal($id)
    {   
        lempropKP::where('nim_mhs',$id)->update([
            'ya_kaprodi' => 1,
        ]);

        return redirect(route('kaprodi.kerjapraktek.index'))->with('message','Proposal KP Berhasil Disetujui');
    }

    public function setuju($id)
    {   
        lemperKP::where('nim_mhs',$id)->update([
            'yes_koor' => 1,
        ]);

        return redirect(route('admin.laporan.index'))->with('message','Laporan Berhasil Disetujui');
    }

    public function setujuKaprodi($id)
    {   
        lemperKP::where('nim_mhs',$id)->update([
            'yes_kaprodi' => 1,
        ]);

        return redirect(route('kaprodi.kerjapraktek.index'))->with('message','Laporan KP Berhasil Disetujui');
    }
}
