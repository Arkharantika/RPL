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
                        <h3 class="mt-10">Sebagai Pakar atau Nara sumber pada bidang keinsinyuran (saksi ahli, tim ahli,
                            dewan pakar dst)</h3>
                    </li>
                </ul>
                <!-- END Step Tabs -->

                <form method="post" action="{{url('ubah6a/'.$idnya)}}" enctype="multipart/form-data">
                    @csrf

                    <div class="block-content block-content-full tab-content" style="min-height: 265px;">

                        <!-- Step 1 -->
                        <div class="tab-pane active" id="wizard-validation-classic-step1" role="tabpanel">

                            <div class="form-group">
                                <label class="form-label"><i class="bx bx-caret-right"></i>Jenis / Kedudukan Sebagai
                                    Pakar /
                                    Nara Sumber :</label>
                                <textarea type="form-control" class="form-control" placeholder="{{$datanya->jenis_pendidikan}}" name="judul"
                                    id="judul" required></textarea>
                            </div>
                            <div class="form-group">
                                <label class="form-label"><i class="bx bx-caret-right"></i>Waktu dan Tempat
                                    Sebagai Pakar/Nara Sumber :</label>
                                <textarea type="form-control" class="form-control" placeholder="{{$datanya->waktu}}" name="waktu"
                                    id="waktu" required></textarea>
                            </div>
                            <div class="form-group">
                                <label class="form-label"><i class="bx bx-caret-right"></i>Nama Lembaga
                                    Pemberi Tugas
                                    :</label>
                                <textarea type="form-control" class="form-control" placeholder="{{$datanya->nama_alamat_telp}}" name="nama_alamat"
                                    id="nama_alamat" required></textarea>
                            </div>
                            <!-- <div class="form-group">
                                <label class="form-label"><i class="bx bx-caret-right"></i>Jumlah Peserta
                                    :</label>
                                <textarea type="form-control" class="form-control" placeholder="" name="kedudukan"
                                    id="kedudukan" required></textarea>
                            </div>
                            <div class="form-group">
                                <label class="form-label"><i class="bx bx-caret-right"></i>Lamanya Kegiatan Instruktur
                                    (Jam) :</label>
                                <textarea type="form-control" class="form-control" placeholder=""
                                    name="kedudukan_penulisan" id="kedudukan_penulisan" required></textarea>
                            </div> -->
                            <div class="form-group">
                                <label class="form-label"><i class="bx bx-caret-right"></i>Link G-Drive Surat
                                    penugasan/undangan
                                    :</label>
                                <textarea type="form-control" class="form-control" placeholder="{{$datanya->jadwal}}" name="jadwal"
                                    id="jadwal" required></textarea>
                            </div>
                            <div class="form-group">
                                <label class="form-label"><i class="bx bx-caret-right"></i>Link G-Drive Sertifikat
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