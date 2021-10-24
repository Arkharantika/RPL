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

    <!-- Dynamic Table Full -->
    <div class="block">

        <!-- Judul Halaman -->
        <div class="block-header block-header-default">
            <h3 class="block-title">List Penguji SemHas</h3>
        </div>

        <!-- Content Table -->
        <div class="block-content block-content-full">
            <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/tables_datatables.js -->
            <table class="table table-bordered table-striped table-vcenter js-dataTable-edited">
                <thead>
                    <tr>
                        <th class="d-none d-sm-table-cell text-center" style="width: 2%">No</th>
                        <th class="d-none d-sm-table-cell text-center" style="width: 27%">nama Mahasiswa</th>
                        <th class="text-center" style="width: 11%;">Penguji Ke</th>
                        <th class="text-center" style="width: 30%;">Penguji Semhas</th>
                        <th class="text-center" style="width: 30%;">Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1?>
                    @foreach ($Gabung as $row)
                    <tr>
                        <td class="d-none d-sm-table-cell text-center font-size-sm text-center">{{ $no++}}</td>
                        <td class="d-none d-sm-table-cell text-center font-size-sm text-center">{{ $row->nama_mhs}}</td>
                        <td class="font-size-sm text-center">
                            {{ $row->penguji_ke}}
                        </td>
                        <td class="font-w600 font-size-sm text-center">
                            <a href="#">{{ $row->nama_dosen}}</a>
                        </td>
                        <td class="font-w600 font-size-sm text-center">
                            {{ $row->tanggal}}
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