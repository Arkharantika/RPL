<?php

namespace App\Http\Controllers;
use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfilController extends Controller
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
        $dosen = Dosen::where('nip',Auth::user()->nim)->first();
        $data = Mahasiswa::where('nim',Auth::user()->nim)->first();
        // dd($data);
        if($dosen != null){
            return view('profil.index',compact('dosen'));
        }else{
            // dd($data);
            return view('profil.index',compact('data'));
        }
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
        // return $request;
        switch ($request->input('action')) {
            case 'pass':
                $validateData = $this->validate($request, [
                    // 'nim' => 'required|min:4|unique:users',
                    // 'email' => 'required|min:4|email|unique:users',
                    'current_password' => ['required', function ($attribute, $value, $fail) {
                        if (!\Hash::check($value, Auth::user()->password)) {
                            return $fail(__('The current password is incorrect.'));
                        }
                    }],
                    'password' => 'required|min:8|confirmed',
                ]);
                // dd($validateData);
                $data = User::find($id);
                $data->password = Hash::make($request->password);
                // dd($data);
                $data->save();

                return redirect(route('profil.index'))->with('message','Password Berhasil di Perbarui!');
                break;
    
            case 'data':
                $this->validate($request, [
                    'name' => 'required|min:4',
                    'ipk' => 'required',
                    'sks' => 'required',
                ]);
                $mhs = Mahasiswa::find($request->id);
                $mhs->ipk = $request->ipk;
                $mhs->sks = $request->sks;
                $mhs->no_telp = $request->no_telp;
                $mhs->tanggal_lahir = $request->tgl_lahir;
                $mhs->tempat_lahir = $request->tempat_lahir;
                $mhs->no_karmas = $request->karmas;
                $mhs->s1 = $request->s1;
                $mhs->s2 = $request->s2;
                $mhs->s3 = $request->s3;
                $mhs->prodi = $request->prodi;
                $mhs->nama_lembaga = $request->lembaga;
                $mhs->jabatan_di_lembaga = $request->jabatan_di_lembaga;
                $mhs->alamat_rumah = $request->alamat_rumah;
                $mhs->alamat_kantor = $request->alamat_lembaga;
                $mhs->pos_lembaga = $request->pos_lembaga;
                $mhs->pos_rumah = $request->pos_rumah;
                $mhs->telepon_rumah = $request->no_telp_rumah;
                $mhs->telepon_kantor = $request->no_telp_lembaga;
                $mhs->email_pribadi= $request->email_pribadi;
                $mhs->email_kantor= $request->email_kantor;
                $mhs->fax_pribadi = $request->fax_pribadi;
                $mhs->fax_kantor = $request->fax_kantor;
                $mhs->kota_lembaga = $request->kota_lembaga;
                $mhs->kota_rumah = $request->kota_rumah;
                $mhs->save();
                
                $data = User::find($id);
                $data->name = $request->name;
                $data->save();

                return redirect(route('profil.index'))->with('message','Profil Berhasil di Perbarui!');
                break;
            
            case 'dataDosen':
                $dosen = Dosen::where('nip',Auth::user()->nim)->first();
               
                $dosen->no_telp = $request->no_telp;
                $dosen->save();

                return redirect(route('profil.index'))->with('message','Profil Berhasil di Perbarui!');
                break;
        }
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
