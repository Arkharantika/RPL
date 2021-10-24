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

                <!-- Judul Halaman -->
                <div class="block-header block-header-default text-center">
                    <h3 class="block-title"><strong>Cetak Lembar Pengesahan KP</strong></h3>
                </div>

                <!-- Steps Content -->
                <div class="block-content block-content-full tab-content" style="min-height: 150px;">

                    <!-- Step 1 -->
                    <div class="tab-pane active text-center" id="wizard-validation-classic-step1" role="tabpanel">
                        <div class="form-group">
                            <a class="btn btn-success mr-5 mb-5" href="{{url('LembarPengesahanKP/bagian/Proposal')}}" target="_blank">Lembar Pengesahan Proposal KP</a>
                            <a class="btn btn-info mr-5 mb-5" href="{{url('LembarPengesahanKP/bagian/Laporan')}}" target="_blank">Lembar Pengesahan Laporan Seminar KP</a>
                        </div>
                    </div>
                    <!-- END Step 1 -->

                    <p> 
                        <strong>Catatan</strong> 
                    </p>
                    <p> 1. Untuk Mendapatkan Tanda Tangan Pembimbing (Laporan / Proposal Harus Disetujui oleh Pembimbing Pada Sistem) </p>
                    <p> 2. Untuk Mendapatkan Tanda Tangan Koordinator KP (Hubungi Koordinator KP) </p>
                    <p> 3. Untuk Mendapatkan Tanda Tangan Kaprodi (Hubungi Kaprodi) </p>

                </div>
                <!-- END Steps Content -->

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
<script>jQuery(function(){ Codebase.helpers(['flatpickr']); });</script>
<script src="{{asset('js/plugins/bootstrap-wizard/jquery.bootstrap.wizard.js')}}"></script>
<script src="{{asset('js/pages/be_forms_wizard.min.js')}}"></script>
<script src="{{asset('js/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('js/plugins/jquery-validation/additional-methods.js')}}"></script>
<script>jQuery(function(){ Codebase.helpers(['select2','flatpickr']); });</script>
@endsection