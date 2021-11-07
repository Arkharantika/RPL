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
                        <h3 class="mt-10">Pendidikan Strata Satu dan Strata Lanjut</h3>
                    </li>
                </ul>
                <!-- END Step Tabs -->

                <form method="post" action="dua/a" enctype="multipart/form-data">
                    @csrf

                    <div class="block-content block-content-full tab-content" style="min-height: 265px;">

                        <!-- Step 1 -->
                        <div class="tab-pane active" id="wizard-validation-classic-step1" role="tabpanel">

                            <div class="form-group">
                                <label class="form-label"><i class="bx bx-caret-right"></i>Gelar Yang Diperoleh dan
                                    Bulan/Tahun Kelulusan :</label>
                                <textarea type="form-control" class="form-control" placeholder="" name="gelar" id="gelar"
                                    required></textarea>
                            </div>
                            <div class="form-group">
                                <label class="form-label"><i class="bx bx-caret-right"></i>Jurusan/ Bidang :</label>
                                <textarea type="form-control" class="form-control" placeholder="" name="jurusan"
                                    id="jurusan" required></textarea>
                            </div>
                            <div class="form-group">
                                <label class="form-label"><i class="bx bx-caret-right"></i>Jumlah SKS :</label>
                                <textarea type="form-control" class="form-control" placeholder="" name="sks" id="sks"
                                    required></textarea>
                            </div>
                            <div class="form-group">
                                <label class="form-label"><i class="bx bx-caret-right"></i>Judul Tugas Akhir :</label>
                                <textarea type="form-control" class="form-control" placeholder="" name="judul" id="judul"
                                    required></textarea>
                            </div>
                            <div class="form-group">
                                <label class="form-label"><i class="bx bx-caret-right"></i>Nama Pembimbing dan Alamat
                                    (jika ada) :</label>
                                <textarea type="form-control" class="form-control" placeholder="" name="nama_pem"
                                    id="nama_pem" required></textarea>
                            </div>
                            <div class="form-group">
                                <label class="form-label"><i class="bx bx-caret-right"></i>Nama & Alamat
                                    Perguruan Tinggi
                                    (No. Telpon, Fax, E-mail) :</label>
                                <textarea type="form-control" class="form-control" placeholder="" name="nama_univ"
                                    id="nama_univ" required></textarea>
                            </div>
                            <div class="form-group">
                                <label class="form-label"><i class="bx bx-caret-right"></i>Link G-Drive Ijazah :</label>
                                <textarea type="form-control" class="form-control" placeholder="" name="ijazah" id="ijazah"
                                    required></textarea>
                            </div>
                            <div class="form-group">
                                <label class="form-label"><i class="bx bx-caret-right"></i>Link G-Drive Transkrip
                                    :</label>
                                <textarea type="form-control" class="form-control" placeholder="" name="transkrip"
                                    id="transkrip" required></textarea>
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
                        <th class="d-none d-sm-table-cell text-center">Gelar Yang Diperoleh dan Bulan/Tahun Kelulusan
                        </th>
                        <th class="text-center">Jurusan/ Bidang</th>
                        <th class="text-center">Nama & Alamat Perguruan Tinggi (No. Telpon, Fax, E-mail)</th>
                        <!-- <th class="text-center">Jurusan</th> -->
                        <th class="text-center">Jumlah SKS</th>
                        <th class="text-center">Judul Tugas Akhir</th>
                        <th class="text-center">Nama Pembimbing dan Alamat (jika ada)</th>
                        <th class="text-center">link G-Drive Ijazah</th>
                        <th class="text-center">link G-Drive Transkrip</th>
                        <th class="text-center">Action</th>
                            <!-- <th>Updated at</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; $idx=0; ?>
                        @foreach ($datanya as $row)
                    <tr>
                        <td class="d-none d-sm-table-cell text-center font-size-sm text-center">{{ $no++}}</td>
                        <td class="d-none d-sm-table-cell text-center font-size-sm text-center">{{ $row->gelar_tahun}}
                        </td>
                        <td class="font-w600 font-size-sm text-center">
                            <a href="#">{{ $row->jurusan}}</a>
                        </td>
                        <td class="font-size-sm text-center">
                            {{ $row->nama_alamat_telp}}
                        </td>
                        <td class="font-w600 font-size-sm text-center">
                            <a href="#">{{ $row->sks}}</a>
                        </td>
                        <td class="font-w600 font-size-sm text-center">
                            <a href="#">{{ $row->judul_skripsi}}</a>
                        </td>
                        <td class="font-w600 font-size-sm text-center">
                            <a href="#">{{ $row->nama_pem}}</a>
                        </td>
                        <td class="font-w600 font-size-sm text-center">
                            <a href="#">{{ $row->ijazah}}</a>
                        </td>
                        <td class="font-w600 font-size-sm text-center">
                            <a href="#">{{ $row->transkrip}}</a>
                        </td>
                        </td>
                        <td width="250" style="text-align: center;">
                            <form action="{{url('hapus2a/'.$row->id)}}" method="post" class="d-inline">
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