@extends('layouts.backend')

@section('content')

<!-- Page Content -->
<div class="content">

    <!-- Alert -->
    @if(session()->get('message'))
        <div class="alert alert-info alert-dismissable mt-20" role="alert">
            <strong> {{ session()->get('message') }}  </strong> 
        </div>
    @endif

    <div class="row">
        <div class="col-md-12">

            <!-- Validation Wizard Classic -->
            <div class="js-wizard-validation-classic block">

                <!-- Step Tabs -->
                <ul class="nav nav-tabs nav-tabs-block nav-fill" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" href="#wizard-validation-classic-step1" data-toggle="tab">
                            Bantuan Klaim Seminar KP
                        </a>
                    </li>
                </ul>
                <!-- END Step Tabs -->

                <!-- Form -->
                <form class="js-wizard-validation-classic-form" action="PresensiSeminarKP" method="post">
                @csrf
                    <!-- Steps Content -->
                    <div class="block-content block-content-full tab-content" style="min-height: 265px;">

                        <!-- Step 1 -->
                        <div class="tab-pane active" id="wizard-validation-classic-step1" role="tabpanel">

                            <div class="form-group">
                                <label for="sks">NIM Pemateri Seminar <span class="text-danger"></span></label>
                                <select required class="form-control js-select2" style="width: 100%" name="nimPemateri" id="nimPemateri">
                                    <option value="">Pilih NIM</option>
                                    @foreach ($data_mhs as $mks)
                                        <option name="nim_penseminar" value="{{ $mks->nim }}">{{ $mks->nim}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="sks">Judul Seminar KP <span class="text-danger"></span></label>
                                <select required class="form-control js-select2" style="width: 100%" name="" id="">
                                    <option value="">Pilih Judul</option>
                                    @foreach ($data_judul as $mks)
                                        <option name="judul_seminar" value="{{ $mks->judul_seminar }}">{{ $mks->judul_seminar }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <!-- END Step 1 -->

                    </div>
                    <!-- END Steps Content -->

                    <!-- Steps Navigation -->
                    <div class="block-content block-content-sm block-content-full bg-body-light">
                        <div class="row">
                            <div class="col-12 text-right">
                                <button type="submit" class="btn btn-alt-primary d-none" data-wizard="finish">
                                    Presensi Sekarang ! <i class="fa fa-angle-right ml-5"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- END Steps Navigation -->

                </form>
                <!-- END Form -->

            </div>
            <!-- END Validation Wizard Classic -->

        </div>
    </div>

    <!-- Dynamic Table Full -->
    <div class="block">

        <!-- Judul Halaman -->
        <div class="block-header block-header-default">
            <h3 class="block-title">List Kehadiran Seminar KP</h3>
        </div>

        <!-- Content Table -->
        <div class="block-content block-content-full">
            <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/tables_datatables.js -->
            <table class="table table-bordered table-striped table-vcenter js-dataTable-edited">
                <thead>
                    <tr>
                        <th class="d-none d-sm-table-cell text-center" style="width: 3%">No</th>
                        <th class="d-none d-sm-table-cell text-center" style="width: 15%">NIM Peserta</th>
                        <th class="text-center" style="width: 47%;">Nama Peserta</th>
                        <th class="text-center" style="width: 15%;">NIM Pemateri</th>
                        <th class="text-center" style="width: 20%;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1?>
                    @foreach ($data as $row)
                    <tr>
                        <td class="d-none d-sm-table-cell text-center font-size-sm text-center">{{ $no++}}</td>
                        <td class="d-none d-sm-table-cell text-center font-size-sm text-center">{{ $row->nim_mhs}}</td>
                        <td class="font-size-sm text-center">
                            {{ $row->nama_mhs}}
                        </td>
                        <td class="font-w600 font-size-sm text-center">
                            <a href="#">{{ $row->nim_penseminar}}</a>
                        </td>
                        <td width="250" style="text-align: center;">
                            <form action="{{url('PresensiSeminarKP/'.$row->id)}}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                                <button type="submit" class="btn btn-sm btn-alt-danger"><i class="fa fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- end of content table -->

    </div>
    <!-- END Dynamic Table Full -->

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
<script>jQuery(function(){ Codebase.helpers(['flatpickr']); });</script>
<script src="{{asset('js/plugins/bootstrap-wizard/jquery.bootstrap.wizard.js')}}"></script>
<script src="{{asset('js/pages/be_forms_wizard.min.js')}}"></script>
<script src="{{asset('js/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('js/plugins/jquery-validation/additional-methods.js')}}"></script>
<script>jQuery(function(){ Codebase.helpers(['select2','flatpickr']); });</script>
@endsection