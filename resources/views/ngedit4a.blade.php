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
                        <h3 class="mt-10">Pengalaman Praktik Keinsinyuran pada lembaga / institusi formal (memiliki
                            badan hukum) </h3>
                    </li>
                </ul>
                <!-- END Step Tabs -->

                <form method="post" action="{{url('ubah4a/'.$idnya)}}" enctype="multipart/form-data">
                    @csrf

                    <div class="block-content block-content-full tab-content" style="min-height: 265px;">

                        <!-- Step 1 -->
                        <div class="tab-pane active" id="wizard-validation-classic-step1" role="tabpanel">

                            <div class="form-group">
                                <label class="form-label"><i class="bx bx-caret-right"></i>Jenis Praktik Bidang
                                    Keinsinyuran :</label>
                                <textarea type="form-control" class="form-control" placeholder="{{$datanya->jenis_bidang}}" name="jenis"
                                    id="jenis" required></textarea>
                            </div>
                            <div class="form-group">
                                <label class="form-label"><i class="bx bx-caret-right"></i>Waktu Pelaksanaan :</label>
                                <textarea type="form-control" class="form-control" placeholder="{{$datanya->waktu}}" name="waktu"
                                    id="waktu" required></textarea>
                            </div>
                            <div class="form-group">
                                <label class="form-label"><i class="bx bx-caret-right"></i>Nama dan alamat Instruktur
                                    (No. Telpon, Fax, E-mail) :</label>
                                <textarea type="form-control" class="form-control" placeholder="{{$datanya->nama_alamat_telp}}" name="nama_alamat"
                                    id="nama_alamat" required></textarea>
                            </div>
                            <div class="form-group">
                                <label class="form-label"><i class="bx bx-caret-right"></i>Jabatan Formal :</label>
                                <textarea type="form-control" class="form-control" placeholder="{{$datanya->jabatan}}" name="materi"
                                    id="materi" required></textarea>
                            </div>
                            <div class="form-group">
                                <label class="form-label"><i class="bx bx-caret-right"></i>Uraian Tugas Keinsinyuran
                                    :</label>
                                <textarea type="form-control" class="form-control" placeholder="{{$datanya->uraian}}" name="lama" id="lama"
                                    required></textarea>
                            </div>
                            <!-- <div class="form-group">
                                <label class="form-label"><i class="bx bx-caret-right"></i>Link G-Drive Jadwal :</label>
                                <textarea type="form-control" class="form-control" placeholder="" name="jadwal" id="jadwal"
                                    required></textarea>
                            </div> -->
                            <div class="form-group">
                                <label class="form-label"><i class="bx bx-caret-right"></i>Link G-Drive Extended
                                    abstract atau Executive Summary
                                    :</label>
                                <textarea type="form-control" class="form-control" placeholder="{{$datanya->sertifikat}}" name="sertifikat"
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
                                    <button type="submit" id="covid" class="btn btn-success btn-lg px-5"><i
                                            class="bx bx-sun"></i>Ubah Data</button>
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