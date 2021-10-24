<?php

namespace App\Http\Controllers;

use App\Models\Ta;
use App\Models\Mahasiswa;
use App\Models\Pendadaran;
use App\Models\Biodataalumni;
use App\Models\Pembimbing;
use App\Models\Penguji;
use App\Models\Jabatan;
use App\Models\Halpengesahan;
use App\Models\Exitsurvey;
use App\Models\Bebaslab;
use App\Models\Dosen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use PDF;
use PhpOffice\PhpWord\TemplateProcessor;

// Tambahan
use App\Models\dua_a;
use App\Models\dua_b;
use App\Models\dua_c;
use App\Models\tiga_a;
use App\Models\tiga_b;
use App\Models\empat_a;
use App\Models\empat_b;
use App\Models\lima_a;
use App\Models\lima_b;
use App\Models\lima_c;
use App\Models\lima_d;
use App\Models\lima_e;
use App\Models\lima_f;
use App\Models\enam_a;
use App\Models\enam_b;
use App\Models\enam_c;

class TadraftController extends Controller
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
        $nim = Auth::user()->nim;
        $data = Pendadaran::setuju($nim)->first();
        // dd($halpengesahan);
        if($data != null){
            $bio = Biodataalumni::where('mahasiswa_id',$data->mahasiswa_id)->first();
            $exitsurvey = Exitsurvey::where('mahasiswa_id',$data->mahasiswa_id)->first();
            $halpengesahan = Halpengesahan::where('mahasiswa_id',$data->mahasiswa_id)->first();
            $bebaslab = Bebaslab::where('mahasiswa_id',$data->mahasiswa_id)->first();
            return view('ta.draft.index',compact('data','bio','exitsurvey','halpengesahan','bebaslab'));
        }
        return view('errors.pendadaran');
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
        $this->validate($request, [
            'file_draftta' => 'required|file|mimes:pdf|max:20480',
            'file_sourcecode' => 'required|file|mimes:zip|max:307200',
		]);
        // dd($data);
		// menyimpan data file yang diupload ke variabel $file
        $file = $request->file('file_draftta');
        $sourcecode = $request->file('file_sourcecode');
        //$id = $request->id;
		$nama_file = $request->nim."_DraftTA".".".$file->getClientOriginalExtension();
		$nama_sourcecode = $request->nim."_SourcecodeTA".".".$sourcecode->getClientOriginalExtension();
 
      	// isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'file_draftta';
		$sourcecode_upload = 'file_sourcecode';
        $file->move($tujuan_upload,$nama_file);
        $sourcecode->move($sourcecode_upload,$nama_sourcecode);

        Ta::where('id', $id)->update([
            'doc_ta' => $nama_file,
            'sourcecode_ta' => $nama_sourcecode,
        ]);

        Flight::update(['delayed' => 1]);
 
		return redirect(route('ta.wisuda.index'))->with('message','Dokumen TA Berhasil diupload!');
    }

    public function bebaslab($id){
        $data = Mahasiswa::find($id);
        $pembimbing = Dosen::find($data->pem_akademik);
        $kalabsel = Jabatan::kalabsel();
        $kalabik = Jabatan::kalabik();
        $kalabele = Jabatan::kalabele();
        $kalabtele = Jabatan::kalabtele();
        $laboranele = Jabatan::laboranele();
        $kalabkj = Jabatan::kalabkj();
        $bebaslab = Bebaslab::where('mahasiswa_id',$id)->first();
        // dd($bebaslab);
        $config = [
            'format' => 'A4-P', // Portrait
             'margin_left'          => 15,
             'margin_right'         => 15,
             'margin_top'           => 35,
            // 'margin_bottom'        => 25,
          ];

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
        $pdf = PDF::loadview('ta/draft/bebaslab',compact('data','kalabsel','kalabik','kalabkj','kalabtele','kalabele',
        'laboranele','pembimbing','bebaslab','monthList'),[],$config);
        return $pdf->stream();
    }

    public function halpengesahan($id){
        $data = Mahasiswa::find($id);
        $ta = Ta::where('mahasiswa_id',$id)->get()->last();
        $pendadaran = Pendadaran::where('ta_id',$ta->id)->get()->last();
        $pem1 = Pembimbing::pembimbing($ta->id)->first();
        $pem2 = Pembimbing::pembimbing($ta->id)->last();
        $uji1 = Penguji::pengujipendadaran($ta->id)->first();
        $uji2 = Penguji::pengujipendadaran($ta->id)->last();
        $halpengesahan = Halpengesahan::where('mahasiswa_id',$id)->first();
        $kaprodi = Jabatan::kaprodi();
        $koorta = Jabatan::ta();
        // dd($kaprodi);
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
        $pdf = PDF::loadview('ta/draft/halpengesahan',compact('data','pem1','pem2','uji1','uji2','kaprodi','koorta','halpengesahan','ta','dayList','monthList','pendadaran'),[],$config);
        return $pdf->stream();
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

    public function cetakProfil($id)
    {
        $no = 0;
        $data = User::find($id);
        $kampretos = $data->nim;
        $mahasiswa = Mahasiswa::where('nim',$kampretos)->get()->last();
        $duaA = dua_a::where('nim',$kampretos)->get();
        $duaB = dua_b::where('nim',$kampretos)->get();
        $duaC = dua_c::where('nim',$kampretos)->get();
        $tigaA = tiga_a::where('nim',$kampretos)->get();
        $tigaB = tiga_b::where('nim',$kampretos)->get();
        $empatA = empat_a::where('nim',$kampretos)->get();
        $empatB = empat_b::where('nim',$kampretos)->get();
        $limaA = lima_a::where('nim',$kampretos)->get();
        $limaB = lima_b::where('nim',$kampretos)->get();
        $limaC = lima_c::where('nim',$kampretos)->get();
        $limaD = lima_d::where('nim',$kampretos)->get();
        $limaE = lima_e::where('nim',$kampretos)->get();
        $limaF = lima_f::where('nim',$kampretos)->get();
        $enamA = enam_a::where('nim',$kampretos)->get();
        $config = [
            'format' => 'A4-L', // Portrait
             'margin_left'          => 10,
             'margin_right'         => 10,
             'margin_top'           => 15,
            // 'margin_bottom'        => 25,
          ];

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
        $pdf = PDF::loadview('cetakProfil',compact('enamA','limaF','limaE','limaD','limaC','limaB','limaA','empatB','empatA','tigaB','tigaA','duaC','duaB','no','duaA','mahasiswa','monthList'),[],$config);
        return $pdf->stream();
    }

    public function duaA(Request $request){

        $mhs = Mahasiswa::mhs(Auth::user()->nim)->first();
        $nimnya = $mhs->nim;

        dua_a::create([
            'nim' => $nimnya,
            'gelar_tahun' => $request->gelar,
            'jurusan' => $request->jurusan,
            'nama_alamat_telp' => $request->nama_univ,
            'sks' => $request->sks,
            'judul_skripsi' => $request->judul,
            'nama_pem' => $request->nama_pem,
            'ijazah' => $request->ijazah,
            'transkrip' => $request->transkrip,
        ]);

        return redirect('PresensiSeminarKP')->with('message','Data Berhasil Ditambah !!');

    }

    public function duaBshow(){
        // return 0;
        $mhs = Mahasiswa::mhs(Auth::user()->nim)->first();
        $nimnya = $mhs->nim;
        $datanya = dua_b::where('nim',$nimnya)->get();

        return view('duaB',compact('datanya'));

    }

    public function duaB(Request $request){

        $mhs = Mahasiswa::mhs(Auth::user()->nim)->first();
        $nimnya = $mhs->nim;

        dua_b::create([
            'nim' => $nimnya,
            'jenis_pendidikan' => $request->jenis,
            'waktu' => $request->waktu,
            'nama_alamat_telp' => $request->nama_alamat,
            'materi' => $request->materi,
            'lamanya' => $request->lama,
            'jadwal' => $request->jadwal,
            'sertifikat' => $request->sertifikat,
        ]);
        
        // return $request;
        return redirect('dua/b')->with('message','Data Berhasil Ditambah !!');

    }

    public function duaCshow(){
        // return 0;
        $mhs = Mahasiswa::mhs(Auth::user()->nim)->first();
        $nimnya = $mhs->nim;
        $datanya = dua_c::where('nim',$nimnya)->get();

        return view('duaC',compact('datanya'));

    }

    public function duaC(Request $request){

        $mhs = Mahasiswa::mhs(Auth::user()->nim)->first();
        $nimnya = $mhs->nim;

        dua_c::create([
            'nim' => $nimnya,
            'jenis_pendidikan' => $request->jenis,
            'waktu' => $request->waktu,
            'nama_alamat_telp' => $request->nama_alamat,
            'materi' => $request->materi,
            'lamanya' => $request->lama,
            'jadwal' => $request->jadwal,
            'sertifikat' => $request->sertifikat,
        ]);
        
        // return $request;
        return redirect('dua/c')->with('message','Data Berhasil Ditambah !!');

    }
    
    public function tigaAshow(){
        // return 0;
        $mhs = Mahasiswa::mhs(Auth::user()->nim)->first();
        $nimnya = $mhs->nim;
        $datanya = tiga_a::where('nim',$nimnya)->get();
        
        // return $nimnya;
        return view('tigaA',compact('datanya'));
        
    }

    public function tigaA(Request $request){

        $mhs = Mahasiswa::mhs(Auth::user()->nim)->first();
        $nimnya = $mhs->nim;

        // return $nimnya;

       tiga_a::create([
            'nim' => $nimnya,
            'bentuk_kegiatan' => $request->jenis,
            'waktu' => $request->waktu,
            'nama_alamat_telp' => $request->nama_alamat,
            'judul' => $request->materi,
            'daftar' => $request->lama,
            // 'jadwal' => $request->jadwal,
            'sertifikat' => $request->sertifikat,
        ]);
        
        // // return $request;
        return redirect('tiga/a')->with('message','Data Berhasil Ditambah !!');

    }

    public function tigaBshow(){
        // return 0;
        $mhs = Mahasiswa::mhs(Auth::user()->nim)->first();
        $nimnya = $mhs->nim;
        $datanya = tiga_b::where('nim',$nimnya)->get();
        
        // return $nimnya;
        return view('tigaB',compact('datanya'));
        
    }

    public function tigaB(Request $request){

        $mhs = Mahasiswa::mhs(Auth::user()->nim)->first();
        $nimnya = $mhs->nim;

        // return $nimnya;

       tiga_b::create([
            'nim' => $nimnya,
            'bentuk_kegiatan' => $request->jenis,
            'waktu' => $request->waktu,
            'nama_alamat_telp' => $request->nama_alamat,
            'judul' => $request->materi,
            'daftar' => $request->lama,
            // 'jadwal' => $request->jadwal,
            'sertifikat' => $request->sertifikat,
        ]);
        
        // // return $request;
        return redirect('tiga/b')->with('message','Data Berhasil Ditambah !!');

    }

    public function empatAshow(){
        // return 0;
        $mhs = Mahasiswa::mhs(Auth::user()->nim)->first();
        $nimnya = $mhs->nim;
        $datanya = empat_a::where('nim',$nimnya)->get();
        
        // return $nimnya;
        return view('empatA',compact('datanya'));
        
    }

    public function empatA(Request $request){

        $mhs = Mahasiswa::mhs(Auth::user()->nim)->first();
        $nimnya = $mhs->nim;

        // return $nimnya;

       empat_a::create([
            'nim' => $nimnya,
            'jenis_bidang' => $request->jenis,
            'waktu' => $request->waktu,
            'nama_alamat_telp' => $request->nama_alamat,
            'jabatan' => $request->materi,
            'uraian' => $request->lama,
            // 'jadwal' => $request->jadwal,
            'sertifikat' => $request->sertifikat,
        ]);
        
        // // return $request;
        return redirect('empat/a')->with('message','Data Berhasil Ditambah !!');

    }

    public function empatBshow(){
        // return 0;
        $mhs = Mahasiswa::mhs(Auth::user()->nim)->first();
        $nimnya = $mhs->nim;
        $datanya = empat_b::where('nim',$nimnya)->get();
        
        // return $nimnya;
        return view('empatB',compact('datanya'));
        
    }

    public function empatB(Request $request){

        $mhs = Mahasiswa::mhs(Auth::user()->nim)->first();
        $nimnya = $mhs->nim;

        // return $nimnya;

       empat_b::create([
            'nim' => $nimnya,
            'jenis_bidang' => $request->jenis,
            'waktu' => $request->waktu,
            'nama_alamat_telp' => $request->nama_alamat,
            'jabatan' => $request->materi,
            'uraian' => $request->lama,
            // 'jadwal' => $request->jadwal,
            'sertifikat' => $request->sertifikat,
        ]);
        
        // // return $request;
        return redirect('empat/b')->with('message','Data Berhasil Ditambah !!');

    }

    public function limaAshow(){
        // return 0;
        $mhs = Mahasiswa::mhs(Auth::user()->nim)->first();
        $nimnya = $mhs->nim;
        $datanya = lima_a::where('nim',$nimnya)->get();
        
        // return $nimnya;
        return view('limaA',compact('datanya'));
        
    }

    public function limaA(Request $request){

        $mhs = Mahasiswa::mhs(Auth::user()->nim)->first();
        $nimnya = $mhs->nim;

        // return $nimnya;

       lima_a::create([
            'nim' => $nimnya,
            'topik' => $request->topik,
            'judul' => $request->judul,
            'nama_lembaga' => $request->nama_alamat,
            'kedudukan' => $request->kedudukan,
            'kedudukan_penulisan' => $request->kedudukan_penulisan,
            'jadwal' => $request->jadwal,
            'sertifikat' => $request->sertifikat,
        ]);
        
        // // return $request;
        return redirect('lima/a')->with('message','Data Berhasil Ditambah !!');

    }

    public function limaBshow(){
        // return 0;
        $mhs = Mahasiswa::mhs(Auth::user()->nim)->first();
        $nimnya = $mhs->nim;
        $datanya = lima_b::where('nim',$nimnya)->get();
        
        // return $nimnya;
        return view('limaB',compact('datanya'));
        
    }

    public function limaB(Request $request){

        $mhs = Mahasiswa::mhs(Auth::user()->nim)->first();
        $nimnya = $mhs->nim;

        // return $nimnya;

       lima_b::create([
            'nim' => $nimnya,
            'topik' => $request->topik,
            'judul' => $request->judul,
            'nama_lembaga' => $request->nama_alamat,
            'kedudukan' => $request->kedudukan,
            'kedudukan_penulisan' => $request->kedudukan_penulisan,
            'jadwal' => $request->jadwal,
            'sertifikat' => $request->sertifikat,
        ]);
        
        // // return $request;
        return redirect('lima/b')->with('message','Data Berhasil Ditambah !!');

    }

    public function limaCshow(){
        // return 0;
        $mhs = Mahasiswa::mhs(Auth::user()->nim)->first();
        $nimnya = $mhs->nim;
        $datanya = lima_c::where('nim',$nimnya)->get();
        
        // return $nimnya;
        return view('limaC',compact('datanya'));
        
    }

    public function limaC(Request $request){

        $mhs = Mahasiswa::mhs(Auth::user()->nim)->first();
        $nimnya = $mhs->nim;

        // return $nimnya;

       lima_c::create([
            'nim' => $nimnya,
            'judul' => $request->judul,
            'waktu' => $request->waktu,
            'nama_lembaga' => $request->nama_alamat,
            'jumlah' => $request->kedudukan,
            'jenis' => $request->kedudukan_penulisan,
            'jadwal' => $request->jadwal,
            'sertifikat' => $request->sertifikat,
        ]);
        
        // // return $request;
        return redirect('lima/c')->with('message','Data Berhasil Ditambah !!');

    }

    public function limaDshow(){
        // return 0;
        $mhs = Mahasiswa::mhs(Auth::user()->nim)->first();
        $nimnya = $mhs->nim;
        $datanya = lima_d::where('nim',$nimnya)->get();
        
        // return $nimnya;
        return view('limaD',compact('datanya'));
        
    }

    public function limaD(Request $request){

        $mhs = Mahasiswa::mhs(Auth::user()->nim)->first();
        $nimnya = $mhs->nim;

        // return $nimnya;

       lima_d::create([
            'nim' => $nimnya,
            'jenis' => $request->judul,
            'waktu' => $request->waktu,
            'nama_lembaga' => $request->nama_alamat,
            'jumlah' => $request->kedudukan,
            'lamanya' => $request->kedudukan_penulisan,
            'jadwal' => $request->jadwal,
            'sertifikat' => $request->sertifikat,
        ]);
        
        // // return $request;
        return redirect('lima/d')->with('message','Data Berhasil Ditambah !!');

    }

    public function limaEshow(){
        // return 0;
        $mhs = Mahasiswa::mhs(Auth::user()->nim)->first();
        $nimnya = $mhs->nim;
        $datanya = lima_e::where('nim',$nimnya)->get();
        
        // return $nimnya;
        return view('limaE',compact('datanya'));
        
    }

    public function limaE(Request $request){

        $mhs = Mahasiswa::mhs(Auth::user()->nim)->first();
        $nimnya = $mhs->nim;

        // return $nimnya;

       lima_e::create([
            'nim' => $nimnya,
            'topik' => $request->judul,
            'judul' => $request->waktu,
            'jenis' => $request->nama_alamat,
            // 'jumlah' => $request->kedudukan,
            // 'lamanya' => $request->kedudukan_penulisan,
            'jadwal' => $request->jadwal,
            'sertifikat' => $request->sertifikat,
        ]);
        
        // // return $request;
        return redirect('lima/e')->with('message','Data Berhasil Ditambah !!');

    }

    public function limaFshow(){
        // return 0;
        $mhs = Mahasiswa::mhs(Auth::user()->nim)->first();
        $nimnya = $mhs->nim;
        $datanya = lima_f::where('nim',$nimnya)->get();
        
        // return $nimnya;
        return view('limaF',compact('datanya'));
        
    }

    public function limaF(Request $request){

        $mhs = Mahasiswa::mhs(Auth::user()->nim)->first();
        $nimnya = $mhs->nim;

        // return $nimnya;

       lima_f::create([
            'nim' => $nimnya,
            'judul' => $request->judul,
            'bidang' => $request->waktu,
            'jumlah' => $request->nama_alamat,
            // 'jumlah' => $request->kedudukan,
            // 'lamanya' => $request->kedudukan_penulisan,
            'jadwal' => $request->jadwal,
            'sertifikat' => $request->sertifikat,
        ]);
        
        // // return $request;
        return redirect('lima/f')->with('message','Data Berhasil Ditambah !!');

    }

    public function enamAshow(){
        // return 0;
        $mhs = Mahasiswa::mhs(Auth::user()->nim)->first();
        $nimnya = $mhs->nim;
        $datanya = enam_a::where('nim',$nimnya)->get();
        
        // return $nimnya;
        return view('enamA',compact('datanya'));
        
    }

    public function enamA(Request $request){

        $mhs = Mahasiswa::mhs(Auth::user()->nim)->first();
        $nimnya = $mhs->nim;

        // return $nimnya;

       enam_a::create([
            'nim' => $nimnya,
            'jenis_pendidikan' => $request->judul,
            'waktu' => $request->waktu,
            'nama_alamat_telp' => $request->nama_alamat,
            // 'jumlah' => $request->kedudukan,
            // 'lamanya' => $request->kedudukan_penulisan,
            'jadwal' => $request->jadwal,
            'sertifikat' => $request->sertifikat,
        ]);
        
        // // return $request;
        return redirect('enam/a')->with('message','Data Berhasil Ditambah !!');

    }

    public function wordExport(){
        $tp = new TemplateProcessor('kampretos.docx');
        $tp->setValue('id','mangan terusssssss');
        $tp->saveAs('youngjun.docx');
        return response()->download('youngjun.docx')->deleteFileAfterSend(true);
    }
}
