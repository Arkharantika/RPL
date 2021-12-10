@extends('layouts.backend')

@section('title','Profil Mahasiswa')

@section('content')
<div class="content">
    <!-- Page Content -->
    <!-- User Info -->
    <div class="bg-image bg-image-bottom" style="background-image: url('{{asset('/media/photos/SC.jpg')}}');">
        <div class="bg-black-op-75 py-30">
            <div class="content content-full text-center">
            @can('mahasiswa')
                <!-- Avatar -->
                <div class="mb-15">
                    <a class="img-link" href="">
                        <img class="img-avatar img-avatar96 img-avatar-thumb"
                            src="{{asset('file_ttd/'.$data->signature_mhs)}} " alt="">
                    </a>
                </div>
                <!-- END Avatar -->
                @endcan
            @can('dosen')
                <!-- Avatar -->
                <div class="mb-15">
                    <a class="img-link" href="">
                        <img class="img-avatar img-avatar96 img-avatar-thumb"
                            src="{{asset('file_ttd/'.$dosen->signature_mhs)}} " alt="">
                    </a>
                </div>
                <!-- END Avatar -->
                @endcan
                @can('mahasiswa')
                <!-- Personal -->
                <h1 class="h3 text-white font-w700 mb-10">{{$data->nama_mhs}}</h1>
                <h2 class="h5 text-white-op">
                    Mahasiswa <a class="text-primary-light" href="javascript:void(0)">{{$data->angkatan}}</a>
                </h2>
                <!-- END Personal -->
                @endcan
                @if(Auth::user()->can('manage-users') || Auth::user()->can('koordinatorta')
                || Auth::user()->can('koordinatorkp') || Auth::user()->can('koordinatorkbk')
                || Auth::user()->can('dosen'))
                <!-- Personal -->
                <h1 class="h3 text-white font-w700 mb-10">{{$dosen->nama_dosen}}</h1>
                <!-- END Personal -->
                @endif

                @if (Auth::user()->can('mahasiswa'))
                <!-- Actions -->
                <a href="{{url('ta/wisuda/cetakprofil/'.Auth::user()->id)}}"
                    class="btn btn-rounded btn-hero btn-sm btn-alt-secondary mb-5">
                    Cetak Profil
                </a>
                <!-- END Actions -->
                @endif

            </div>
        </div>
    </div>
    <!-- END User Info -->
    <br>
    @if(session()->get('message'))
    <div class="alert alert-info alert-dismissable mt-20" role="alert">
        <strong> {{ session()->get('message') }} </strong>
    </div>
    @endif
    <!-- User Profile -->
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">
                <i class="fa fa-user-circle mr-5 text-muted"></i> User Profile
            </h3>
        </div>
        <div class="block-content">
            <form action="{{route('profil.update', Auth::user()->id)}}" method="post">
                @method('PATCH')
                @csrf
                <div class="row items-push">
                    <div class="col-lg-12 ">
                        @can('mahasiswa')
                        <div class="form-group row">
                            <label class="col-2" for="name">Nama Pengguna</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control form-control-lg" id="name" name="name"
                                    placeholder="Enter your username.." value="{{Auth::user()->name}}" readonly>
                                <div class="text-danger">{{ $errors->first('name')}}</div>
                            </div>
                        </div>
                        <input type="hidden" name="id" value="{{$data->id}}">
                        <div class="form-group row">
                            <label class="col-2" for="nama_mhs">Nama Lengkap</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control form-control-lg" id="nama_mhs" name="nama_mhs"
                                    placeholder="Enter your name.." value="{{$data->nama_mhs}}" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-2" for="email">Email </label>
                            <div class="col-md-10">
                                <input type="email" class="form-control form-control-lg" id="email" name="email"
                                    placeholder="Enter your email.." value="{{Auth::user()->email}}" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-2" for="nim">NIM</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control form-control-lg" id="nim" name="nim"
                                    placeholder="Enter your nim.." value="{{$data->nim}}" readonly>
                            </div>
                        </div>
                        <!-- <div class="form-group row">
                            <div class="col-md-10"> -->
                        <!-- <label for="ipk">IPK</label> -->
                        <input type="hidden" class="form-control form-control-lg" id="ipk" name="ipk"
                            placeholder="Enter your ipk.." value="{{$data->ipk}}">
                        <!-- </div>
                        </div> -->
                        <!-- <div class="form-group row" >
                            <div class="col-md-10"> -->
                        <!-- <label for="sks">SKS</label> -->
                        <input type="hidden" class="form-control form-control-lg" id="sks" name="sks"
                            placeholder="Enter your sks.." value="{{$data->sks}}">
                        <!-- </div>
                        </div> -->
                        <div class="form-group row">
                            <label class="col-2" for="not_telp">No Whatsapp</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control form-control-lg" id="no_telp" name="no_telp"
                                    value="{{$data->no_telp}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Tanggal Mulai" class="col-2">Tanggal Lahir</label>
                            <div class="col-md-10">
                                <input required type="text" class="js-flatpickr form-control bg-white" id="tgl_lahir"
                                    name="tgl_lahir" value="{{$data->tanggal_lahir}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nim" class="col-2">Tempat Lahir</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control form-control-lg" id="tempat_lahir"
                                    name="tempat_lahir" value="{{$data->tempat_lahir}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nim" class="col-2">Kartu Mahasiswa</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control form-control-lg" id="karmas" name="karmas" value="{{$data->no_karmas}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nim" class="col-2">No. Ijazah S1</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control form-control-lg" id="s1" name="s1" value="{{$data->s1}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nim" class="col-2">No. Ijazah S2</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control form-control-lg" id="s2" name="s2" value="{{$data->s2}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-2" for="nim">No. Ijazah S3</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control form-control-lg" id="s3" name="s3" value="{{$data->s3}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-2" for="nim">Program Studi</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control form-control-lg" id="prodi" name="prodi" value="{{$data->prodi}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-2" for="nim">Alamat Rumah</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control form-control-lg" id="alamat_rumah"
                                    name="alamat_rumah" value="{{$data->alamat_rumah}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-2" for="nim">Kode Pos Rumah</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control form-control-lg" id="pos_rumah" name="pos_rumah" value="{{$data->pos_rumah}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-2" for="nim">Nama Lembaga</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control form-control-lg" id="lembaga" name="lembaga" value="{{$data->nama_lembaga}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-2" for="nim">Alamat Lembaga</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control form-control-lg" id="alamat_lembaga" value="{{$data->alamat_kantor}}"
                                    name="alamat_lembaga" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-2" for="nim">Jabatan di Lembaga</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control form-control-lg" id="jabatan_di_lembaga" value="{{$data->jabatan_di_lembaga}}"
                                    name="jabatan_di_lembaga">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-2" for="nim">Kode Pos Lembaga</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control form-control-lg" id="pos_lembaga" value="{{$data->pos_lembaga}}"
                                    name="pos_lembaga">
                            </div>
                        </div>
                        <div class="form-group row"> 
                            <label class="col-2" for="nim">No. Telp Lembaga</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control form-control-lg" id="no_telp_lembaga" value="{{$data->telepon_kantor}}"
                                    name="no_telp_lembaga"> 
                            </div>
                        </div>
                        <div class="form-group row"> 
                            <label class="col-2" for="nim">No. Telp Rumah</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control form-control-lg" id="no_telp_rumah" value="{{$data->telepon_rumah}}"
                                    name="no_telp_rumah">
                            </div>
                        </div>
                        <div class="form-group row"> 
                            <label class="col-2" for="nim">Kota Lembaga</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control form-control-lg" id="kota_lembaga" value="{{$data->kota_lembaga}}"
                                    name="kota_lembaga">
                            </div>
                        </div>
                        <div class="form-group row"> 
                            <label class="col-2" for="nim">Kota Rumah</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control form-control-lg" id="kota_rumah" value="{{$data->kota_rumah}}"
                                    name="kota_rumah">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-2" for="nim">Email Pribadi</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control form-control-lg" id="email_pribadi" value="{{$data->email_pribadi}}"
                                    name="email_pribadi">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-2" for="nim">Email Kantor</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control form-control-lg" id="email_kantor" value="{{$data->email_kantor}}"
                                    name="email_kantor">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-2" for="nim">Fax Kantor</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control form-control-lg" id="fax_kantor" value="{{$data->fax_kantor}}"
                                    name="fax_kantor">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-2" for="nim">Fax Pribadi</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control form-control-lg" id="fax_pribadi" value="{{$data->fax_pribadi}}"
                                    name="fax_pribadi">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-10">
                                <button type="submit" name="action" value="data"
                                    class="btn btn-alt-primary">Update</button>
                            </div>
                        </div>

                        @endcan
                        @if(Auth::user()->can('manage-users') || Auth::user()->can('koordinatorta')
                        || Auth::user()->can('koordinatorkp') || Auth::user()->can('koordinatorkbk')
                        || Auth::user()->can('dosen'))
                        <div class="form-group row">
                            <div class="col-md-10">
                                <label for="profile-settings-username">Username</label>
                                <input type="text" class="form-control form-control-lg" id="profile-settings-username"
                                    name="profile-settings-username" placeholder="Enter your username.."
                                    value="{{Auth::user()->name}}" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-10">
                                <label for="profile-settings-email">Email Address</label>
                                <input type="email" class="form-control form-control-lg" id="profile-settings-email"
                                    name="profile-settings-email" placeholder="Enter your email.."
                                    value="{{Auth::user()->email}}" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-10">
                                <label for="profile-settings-name">Name</label>
                                <input type="text" class="form-control form-control-lg" id="profile-settings-name"
                                    name="profile-settings-name" placeholder="Enter your name.."
                                    value="{{$dosen->nama_dosen}}" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-10">
                                <label for="profile-settings-nip">NIP</label>
                                <input type="text" class="form-control form-control-lg" id="profile-settings-name"
                                    name="nip" placeholder="Enter your nip.." value="{{$dosen->nip}}" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-10">
                                <label for="profile-settings-nip">No Whatsapp</label>
                                <input type="text" class="form-control form-control-lg" id="no_telp" name="no_telp"
                                    placeholder="Enter your nip.." value="{{$dosen->no_telp}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-10">
                                <button type="submit" name="action" value="dataDosen" class="btn btn-alt-primary">Update
                                    Data !</button>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- END User Profile -->
    <!-- User Signature -->
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">
                <i class="fa fa-pencil mr-5 text-muted"></i> Foto Profil
            </h3>
        </div>
        <div class="block-content">
            @can('mahasiswa')
            <form action="{{route('signature.update', $data->id)}}" method="post" enctype="multipart/form-data">
                @method('PATCH')
                @csrf
                <div class="row items-push">
                    <div class="col-lg-12">
                        <div class="form-group row">
                            <label class="col-2">Upload Foto Resmi </label>
                            <div class="col-md-10">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="example-file-multiple-input-custom"
                                        name="image" data-toggle="custom-file-input" multiple>
                                    <label class="custom-file-label" for="example-file-multiple-input-custom"></label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="hidden" class="form-control" name="nim" value="{{ $data->nim }}">
                        </div>
                        <div class="form-group row">
                            <div class="col-md-10">
                                <button type="submit" name="action" value="mhs" class="btn btn-alt-primary mb-5">Update
                                    MHS</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            @endcan
            @if(Auth::user()->can('manage-users') || Auth::user()->can('koordinatorta')
            || Auth::user()->can('koordinatorkp') || Auth::user()->can('koordinatorkbk')
            || Auth::user()->can('dosen'))
            <form action="{{route('signature.update', $dosen->id)}}" method="post" enctype="multipart/form-data">
                @method('PATCH')
                @csrf
                <div class="row items-push">
                    <div class="col-lg-3">
                        <p class="text-muted">
                            Signature is important to support this system.
                        </p>
                    </div>
                    <div class="col-lg-7 offset-lg-1">
                        <div class="form-group row">
                            <div class="col-md-10">
                                <label>Upload Image Signature <span class="text-danger">*</span></label>
                                <div class="custom-file">
                                    <!-- Populating custom file input label with the selected filename (data-toggle="custom-file-input" is initialized in Helpers.coreBootstrapCustomFileInput()) -->
                                    <!-- When multiple files are selected, we use the word 'Files'. You can easily change it to your own language by adding the following to the input, eg for DE: data-lang-files="Dateien" -->
                                    <input type="file" class="custom-file-input" id="example-file-multiple-input-custom"
                                        name="image" data-toggle="custom-file-input" multiple>
                                    <label class="custom-file-label" for="example-file-multiple-input-custom">Choose
                                        files .PNG</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="hidden" class="form-control" name="nip" value="{{ $dosen->nip }}">
                        </div>
                        <div class="form-group row">
                            <div class="col-md-10">
                                <button type="submit" name="action" value="dosen"
                                    class="btn btn-alt-primary mb-5">Update</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            @endif
        </div>
    </div>
    <!-- END User Signature -->

    <!-- Change Password -->
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">
                <i class="fa fa-asterisk mr-5 text-muted"></i> Ganti Password
            </h3>
        </div>
        <div class="block-content">
            <form action="{{route('profil.update', Auth::user()->id)}}" method="post">
                @method('PATCH')
                @csrf
                <div class="row items-push">
                    <div class="col-lg-12">
                        <div class="form-group row">
                            <label class="col-2" for="current password">Current Password</label>
                            <div class="col-md-10">
                                <input type="password" class="form-control form-control-lg" id="current_password"
                                    name="current_password" placeholder="password lama">
                                <div class="text-danger">{{ $errors->first('current_password')}}</div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-2" for="password">New Password</label>
                            <div class="col-md-10">
                                <input type="password" class="form-control form-control-lg" id="password"
                                    name="password" placeholder="password baru">
                                <div class="text-danger">{{ $errors->first('password')}}</div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-2" for="password_confirmation">Confirm New Password</label>
                            <div class="col-md-10">
                                <input type="password" class="form-control form-control-lg" id="password_confirmation"
                                    name="password_confirmation" placeholder="password baru">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-10">
                                <button type="submit" name="action" value="pass"
                                    class="btn btn-alt-primary mb-5">Update</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- END User Password -->
</div>
@endsection

@section('js_after')
<script>
    jQuery(function () {
        Codebase.helpers(['select2', 'flatpickr']);
    });

</script>
<script src="{{asset('js/plugins/bootstrap-wizard/jquery.bootstrap.wizard.js')}}"></script>
<script src="{{asset('js/pages/be_forms_wizard.min.js')}}"></script>
<script src="{{asset('js/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('js/plugins/jquery-validation/additional-methods.js')}}"></script>
@endsection
