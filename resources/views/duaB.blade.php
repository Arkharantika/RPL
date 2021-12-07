@extends('layouts.backend')

@section('content')

<!-- Page Content -->
<div class="content">

    <!-- Alert -->
    @if(session()->get('message'))
    <div class="alert alert-info alert-dismissable mt-20" role="alert">
        <strong> {{ session()->get('message') }} </strong>
    </div>
    @endif

    <div class="row">
        <div class="col-md-12">

            <!-- Validation Wizard Classic -->
            <div class="js-wizard-validation-classic block">

                <!-- Step Tabs -->
                <ul class="nav nav-tabs nav-tabs-block nav-fill" role="tablist">
                    <li class="nav-item">
                        <!-- <a class="nav-link active" href="#wizard-validation-classic-step1" data-toggle="tab">
                            <h3>HAI</h3>
                        </a> -->
                        <h3 class="mt-10">Pendidikan Singkat</h3>
                    </li>
                </ul>
                <!-- END Step Tabs -->

                <form method="post" action="b/kirim" enctype="multipart/form-data">
                    @csrf

                    <div class="block-content block-content-full tab-content" style="min-height: 265px;">

                        <!-- Step 1 -->
                        <div class="tab-pane active" id="wizard-validation-classic-step1" role="tabpanel">

                            <div class="form-group">
                                <label class="form-label"><i class="bx bx-caret-right"></i>Jenis Pendidikan Singkat
                                    :</label>
                                <textarea type="form-control" class="form-control" placeholder="contoh : Pelatihan Labview core 1" name="jenis"
                                    id="jenis" required></textarea>
                            </div>
                            <div class="form-group">
                                <label class="form-label"><i class="bx bx-caret-right"></i>Waktu Pelaksanaan :</label>
                                <textarea type="form-control" class="form-control" placeholder="contoh : 24-26 Maret 2012" name="waktu"
                                    id="waktu" required></textarea>
                            </div>
                            <div class="form-group">
                                <label class="form-label"><i class="bx bx-caret-right"></i>Nama & Alamat
                                    Penyelenggara
                                    (No. Telpon, Fax, E-mail) :</label>
                                <textarea type="form-control" class="form-control" placeholder="contoh : National Instruments (Jeddah, Saudi Arabia)" name="nama_alamat"
                                    id="nama_alamat" required></textarea>
                            </div>
                            <div class="form-group">
                                <label class="form-label"><i class="bx bx-caret-right"></i>Materi Pendidikan :</label>
                                <textarea type="form-control" class="form-control" placeholder="contoh : 
- Pelajari cara mengembangkan aplikasi dasar di pemrograman grafis LabVIEW
- Buat aplikasi menggunakan pola desain mesin negara
- Baca dan tulis data ke file" name="materi"
                                    id="materi" required></textarea>
                            </div>
                            <div class="form-group">
                                <label class="form-label"><i class="bx bx-caret-right"></i>Lamanya Pendidikan :</label>
                                <textarea type="form-control" class="form-control" placeholder="contoh : 3 hari" name="lama" id="lama"
                                    required></textarea>
                            </div>
                            <div class="form-group">
                                <label class="form-label"><i class="bx bx-caret-right"></i>Link G-Drive Jadwal :</label>
                                <textarea type="form-control" class="form-control" placeholder="" name="jadwal"
                                    id="jadwal" required></textarea>
                            </div>
                            <div class="form-group">
                                <label class="form-label"><i class="bx bx-caret-right"></i>Link G-Drive Sertifikat
                                    :</label>
                                <textarea type="form-control" class="form-control" placeholder="" name="sertifikat"
                                    id="sertifikat" required></textarea>
                            </div>

                            <!-- Separator -->
                            <div class="login-separater text-center mb-4">
                                <hr />
                            </div>
                            <!-- end of Separator -->

                            <!-- INI TOMBOLNYAA !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
                            <div class="form-group">
                                <div class="d-grid">
                                    <button type="submit" id="covid" class="btn btn-danger btn-lg px-5"><i
                                            class="bx bx-sun"></i>Tambah</button>
                                </div>
                            </div>
                        </div>
                    </div>


                </form>
                <!-- END Form -->

            </div>
            <!-- END Validation Wizard Classic -->

        </div>
    </div>

    <div class="block">
        <!-- Judul Halaman -->
        <div class="block-header block-header-default">
            <h3 class="block-title">List Pendidikan Yang Pernah di tempuh</h3>
        </div>
        <div class="block-content block-content-full">
            <div class="table-responsive">
                <table class="table table-striped table-bordered text-center js-dataTable-edited">
                    <thead>
                        <tr>
                            <th class="d-none d-sm-table-cell text-center">No</th>
                            <th class="d-none d-sm-table-cell text-center">Jenis Pendidikan Singkat
                            </th>
                            <th class="text-center">Waktu Pelaksanaan</th>
                            <th class="text-center">Nama & Alamat
                                Penyelenggara
                                (No. Telpon, Fax, E-mail)</th>
                            <th class="text-center">Materi Pendidikan</th>
                            <th class="text-center">Lamanya Pendidikan</th>
                            <th class="text-center">Link G-Drive Jadwal</th>
                            <th class="text-center">Link G-Drive Sertifikat</th>
                            <th class="text-center">komentar</th>
                            <th class="text-center">action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; $idx=0; ?>
                        @foreach ($datanya as $row)
                        <tr>
                            <td class="d-none d-sm-table-cell text-center font-size-sm text-center">{{ $no++}}</td>
                            <td class="d-none d-sm-table-cell text-center font-size-sm text-center">
                                {{ $row->jenis_pendidikan}}
                            </td>
                            <td class="font-w600 font-size-sm text-center">
                                <a href="#">{{ $row->waktu}}</a>
                            </td>
                            <td class="font-size-sm text-center">
                                {{ $row->nama_alamat_telp}}
                            </td>
                            <td class="font-w600 font-size-sm text-center">
                                <a href="#">{{ $row->materi}}</a>
                            </td>
                            <td class="font-w600 font-size-sm text-center">
                                <a href="#">{{ $row->lamanya}}</a>
                            </td>
                            <td class="font-w600 font-size-sm text-center">
                                <a href="#">{{ $row->jadwal}}</a>
                            </td>
                            <td class="font-w600 font-size-sm text-center">
                                <a href="#">{{ $row->sertifikat}}</a>
                            </td>
                            <td class="font-w600 font-size-sm text-center">
                                <a href="#">{{ $row->komentar}}</a>
                            </td>
                            <td width="250" style="text-align: center;">
                                <form action="{{url('edit2b/'.$row->id)}}" method="post" class="d-inline">
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-alt-warning"><i
                                            class="fa fa-edit"></i></button>
                                </form>
                                <form action="{{url('hapus2b/'.$row->id)}}" method="post" class="d-inline">
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-alt-danger"><i
                                            class="fa fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- END Page Content -->

@endsection
@section('js_after')
<script>
    $('#delete').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var user_id = button.data('userid')
        var modal = $(this)
        modal.find('.block-content #user_id').val(user_id);
    })
</script>
<script>
    function myFunction() {
        var checkBox = document.getElementById("checkAntigen");
        var text = document.getElementById("antigen");
        if (checkBox.checked == true) {
            text.style.display = "block";
            document.getElementById("covid").disabled = false;
        } else {
            text.style.display = "none";
        }
    }

    function myFunction2() {
        var checkBox2 = document.getElementById("checkPCR");
        var text2 = document.getElementById("PCR");
        if (checkBox2.checked == true) {
            text2.style.display = "block";
            document.getElementById("covid").disabled = false;
        } else {
            text2.style.display = "none";
        }
    }

    // Untuk lapor Sembuh !
    function myFunction3() {
        var checkBox3 = document.getElementById("myCheck");
        var text3 = document.getElementById("upload");
        if (checkBox3.checked == true) {
            text3.style.display = "block";
        } else {
            text3.style.display = "none";
        }
    }

    // Untuk Opsi Isoman

    var isomanlabel1 = document.getElementById("isomansendirilabel");
    var isomanlabel2 = document.getElementById("isomanalamatlabel");
    var isomanlabel3 = document.getElementById("isomanurllabel");
    var isomantext1 = document.getElementById("isomansendiri");
    var isomantext2 = document.getElementById("isomanalamat");
    var isomantext3 = document.getElementById("isomanurl");

    var rslabel1 = document.getElementById("rslabel");
    var rstext1 = document.getElementById("rs");

    var rslainlabel1 = document.getElementById("rslainnamalabel");
    var rslainlabel2 = document.getElementById("rslainalamatlabel");
    var rslainlabel3 = document.getElementById("rslainurllabel");
    var rslaintext1 = document.getElementById("rslainnama");
    var rslaintext2 = document.getElementById("rslainalamat");
    var rslaintext3 = document.getElementById("rslainurl");



    function isomanFunction() {
        var checkBox3 = document.getElementById("inlineRadio1");
        if (checkBox3.checked == true) {
            isomantext1.style.display = "block";
            isomantext2.style.display = "block";
            isomantext3.style.display = "block";
            isomanlabel1.style.display = "block";
            isomanlabel2.style.display = "block";
            isomanlabel3.style.display = "block";

            rslabel1.style.display = "none";
            rstext1.style.display = "none";

            rslainlabel1.style.display = "none";
            rslainlabel2.style.display = "none";
            rslainlabel3.style.display = "none";
            rslaintext1.style.display = "none";
            rslaintext2.style.display = "none";
            rslaintext3.style.display = "none";
        }
    }

    function rsFunction() {
        var checkBox3 = document.getElementById("inlineRadio2");
        if (checkBox3.checked == true) {
            isomantext1.style.display = "none";
            isomantext2.style.display = "none";
            isomantext3.style.display = "none";
            isomanlabel1.style.display = "none";
            isomanlabel2.style.display = "none";
            isomanlabel3.style.display = "none";

            rslabel1.style.display = "block";
            rstext1.style.display = "block";

            rslainlabel1.style.display = "none";
            rslainlabel2.style.display = "none";
            rslainlabel3.style.display = "none";
            rslaintext1.style.display = "none";
            rslaintext2.style.display = "none";
            rslaintext3.style.display = "none";
        }
    }

    function rslainFunction() {
        var checkBox3 = document.getElementById("inlineRadio3");
        if (checkBox3.checked == true) {
            isomantext1.style.display = "none";
            isomantext2.style.display = "none";
            isomantext3.style.display = "none";
            isomanlabel1.style.display = "none";
            isomanlabel2.style.display = "none";
            isomanlabel3.style.display = "none";

            rslabel1.style.display = "none";
            rstext1.style.display = "none";

            rslainlabel1.style.display = "block";
            rslainlabel2.style.display = "block";
            rslainlabel3.style.display = "block";
            rslaintext1.style.display = "block";
            rslaintext2.style.display = "block";
            rslaintext3.style.display = "block";
        }
    }
</script>
<script>
    jQuery(function () {
        Codebase.helpers(['flatpickr']);
    });
</script>
<script src="{{asset('js/plugins/bootstrap-wizard/jquery.bootstrap.wizard.js')}}"></script>
<script src="{{asset('js/pages/be_forms_wizard.min.js')}}"></script>
<script src="{{asset('js/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('js/plugins/jquery-validation/additional-methods.js')}}"></script>
<script>
    jQuery(function () {
        Codebase.helpers(['select2', 'flatpickr']);
    });
</script>
@endsection