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
            <div class="js-wizard-validation-classic block">

                <!-- Form -->
                <form class="js-wizard-validation-classic-form" action="batasan" method="post">
                    @csrf
                        <!-- Steps Content -->
                        <div class="block-content block-content-full tab-content" style="min-height: 100px;">
                            <!-- Step 1 -->
                            <div class="tab-pane active" id="wizard-validation-classic-step1" role="tabpanel">
                                <p><strong>Batasan saat ini : {{$jumlahnya}}</strong></p>
                                <div class="form-group">
                                    <label for="sks">Jumlah Maksimum Bimbingan TA Tiap Dosen<span class="text-danger"></span></label>
                                    <input required type="text" class="form-control" name="pic" placeholder="Contoh : 6">
                                </div>
                            </div>
                            <!-- END Step 1 -->
                        </div>
                        <!-- END Steps Content -->
                        
                        <div class="block-content block-content-sm block-content-full bg-body-light">
                        <div class="row">
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-alt-primary d-none" data-wizard="finish">
                                    Set Jumlah <i class="fa fa-angle-right ml-5"></i>
                                </button>
                            </div>
                        </div>
                    </div>


                </form>
                <!-- END Form -->

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
<script>jQuery(function(){ Codebase.helpers(['flatpickr']); });</script>
<script src="{{asset('js/plugins/bootstrap-wizard/jquery.bootstrap.wizard.js')}}"></script>
<script src="{{asset('js/pages/be_forms_wizard.min.js')}}"></script>
<script src="{{asset('js/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('js/plugins/jquery-validation/additional-methods.js')}}"></script>
<script>jQuery(function(){ Codebase.helpers(['select2','flatpickr']); });</script>
@endsection