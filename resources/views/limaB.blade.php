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
                        <h3 class="mt-10">Paparan dan Laporan Internal, Konsultasi, dan Inspeksi pada praktik
                            keinsinyuran</h3>
                    </li>
                </ul>
                <!-- END Step Tabs -->

                <form method="post" action="b/kirim" enctype="multipart/form-data">
                    @csrf

                    <div class="block-content block-content-full tab-content" style="min-height: 265px;">

                        <!-- Step 1 -->
                        <div class="tab-pane active" id="wizard-validation-classic-step1" role="tabpanel">

                            <div class="form-group">
                                <label class="form-label"><i class="bx bx-caret-right"></i>Topik Paparan Pada Pertemuan
                                    Teknis :</label>
                                <textarea type="form-control" class="form-control" placeholder="" name="topik"
                                    id="topik" required></textarea>
                            </div>
                            <div class="form-group">
                                <label class="form-label"><i class="bx bx-caret-right"></i>Judul Paparan
                                    Pada Pertemuan Teknis :</label>
                                <textarea type="form-control" class="form-control" placeholder="hai" name="judul"
                                    id="judul" required></textarea>
                            </div>
                            <div class="form-group">
                                <label class="form-label"><i class="bx bx-caret-right"></i>Nama Lembaga
                                    Pemberi Tugas
                                    :</label>
                                <textarea type="form-control" class="form-control" placeholder="" name="nama_alamat"
                                    id="nama_alamat" required></textarea>
                            </div>
                            <div class="form-group">
                                <label class="form-label"><i class="bx bx-caret-right"></i>Kedudukan di Dalam Paparan
                                    :</label>
                                <textarea type="form-control" class="form-control" placeholder="" name="kedudukan"
                                    id="kedudukan" required></textarea>
                            </div>
                            <!-- <div class="form-group">
                                <label class="form-label"><i class="bx bx-caret-right"></i>Kedudukan di Dalam Penulisan
                                    Laporan Teknis :</label>
                                <textarea type="form-control" class="form-control" placeholder="" name="kedudukan_penulisan" id="kedudukan_penulisan"
                                    required></textarea>
                            </div> -->
                            <div class="form-group">
                                <label class="form-label"><i class="bx bx-caret-right"></i>Link G-Drive Surat Keputusan
                                    Penugasan :</label>
                                <textarea type="form-control" class="form-control" placeholder="" name="jadwal"
                                    id="jadwal" required></textarea>
                            </div>
                            <div class="form-group">
                                <label class="form-label"><i class="bx bx-caret-right"></i>Link G-Drive Sertifikat
                                    resmi/ucapan terima kasih
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
                            <th class="d-none d-sm-table-cell text-center">Topik Paparan Pada Pertemuan Teknis
                            </th>
                            <th class="text-center">Judul Paparan
                                Pada Pertemuan Teknis</th>
                            <th class="text-center">Nama Lembaga
                                Pemberi Tugas</th>
                            <th class="text-center">Kedudukan di
                                Dalam Paparan</th>
                            <!-- <th class="text-center">Lamanya Pendidikan</th> -->
                            <th class="text-center">Link G-Drive Jadwal</th>
                            <th class="text-center">Link G-Drive Sertifikat</th>
                            <th class="text-center">action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; $idx=0; ?>
                        @foreach ($datanya as $row)
                        <tr>
                            <td class="d-none d-sm-table-cell text-center font-size-sm text-center">{{ $no++}}</td>
                            <td class="d-none d-sm-table-cell text-center font-size-sm text-center">
                                {{ $row->topik}}
                            </td>
                            <td class="font-w600 font-size-sm text-center">
                                <a href="#">{{ $row->judul}}</a>
                            </td>
                            <td class="font-size-sm text-center">
                                {{ $row->nama_lembaga}}
                            </td>
                            <td class="font-w600 font-size-sm text-center">
                                <a href="#">{{ $row->kedudukan}}</a>
                            </td>
                            <!-- <td class="font-w600 font-size-sm text-center">
                                <a href="#">{{ $row->kedudukan_penulisan}}</a>
                            </td> -->
                            <td class="font-w600 font-size-sm text-center">
                                <a href="#">{{ $row->jadwal}}</a>
                            </td>
                            <td class="font-w600 font-size-sm text-center">
                                <a href="#">{{ $row->sertifikat}}</a>
                            </td>
                            <td width="250" style="text-align: center;">
                                <form action="{{url('hapus5b/'.$row->id)}}" method="post" class="d-inline">
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