@extends('layouts.backend')

@section('title','List Kerja Praktek')

@section('content')
<div class="content">

    @if(session()->get('message'))
        <div class="alert alert-info alert-dismissable mt-20" role="alert">
            <strong> {{ session()->get('message') }}  </strong> 
        </div>
    @endif
    
    <!-- Dynamic Table with Export Buttons -->
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Daftar Laporan Seminar Kerja Praktek <small>Teknik Elektro</small></h3>
        </div>
        <div class="block-content block-content-full">
            <!-- DataTables functionality is initialized with .js-dataTable-full class in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
            <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
            <thead>
                <tr>
                    <th class="d-none d-sm-table-cell text-center" style="width: 2%;">No</th>
                    <th class="d-none d-sm-table-cell text-center" style="width: 3%;">NIM</th>
                    <th class="text-center" style="width: 20%;">Nama</th>
                    <th class="d-none d-sm-table-cell  text-center" style="width: 60%;">Judul</th>
                    <!-- <th class="text-center" style="width: 10%;">Status</th> -->
                    <th class="text-center" style="width: 15%;">Action</th>
                </tr>
            </thead>
            <tbody> 
                @foreach ($dataKP as $key=>$row)
                <tr>
                    <td class="d-none d-sm-table-cell text-center font-size-sm text-center">{{ $key+1}}</td>
                    <td class="d-none d-sm-table-cell text-center font-size-sm text-center">{{ $row->nim}}</td>
                    <td class="font-w600 font-size-sm text-center">
                        <a href="#">{{ $row->nama_mhs}}</a>
                    </td>
                    <td class="d-none d-sm-table-cell font-size-sm text-center">
                        {{ $row->judul_seminar}}
                    </td>
                    <!--  -->
                    <td width="250" style="text-align: center;">
                        @if($row->file_laporan != null)
                        <a href="{{route('admin.laporan.show',$row->kp_id)}}" class="btn btn-sm btn-alt-secondary mr-5 mb-5" data-toggle="tooltip" data-placement="top" title="" data-original-title="Lihat Laporan" target="_blank"><i class="fa fa-eye"></i></a>
                        <a href="{{url('LembarPengesahanKP/Kaprodi/Setuju/'.$row->nim)}}" class="btn btn-sm btn-alt-success mr-5 mb-5" data-toggle="tooltip" data-placement="top" title="" data-original-title="Setujui Laporan"><i class="fa fa-check"></i></a>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
            </table>
        </div>
    </div>
    <!-- END Dynamic Table with Export Buttons -->


    <!-- Dynamic Table with Export Buttons -->
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Daftar Proposal Kerja Praktek <small>Teknik Elektro</small></h3>
        </div>
        <div class="block-content block-content-full">
            <!-- DataTables functionality is initialized with .js-dataTable-full class in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
            <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
            <thead>
                <tr>
                    <th class="d-none d-sm-table-cell text-center" style="width: 3%;">No</th>
                    <th class="d-none d-sm-table-cell text-center" style="width: 7%;">NIM</th>
                    <th class="text-center" style="width: 25%;">Nama</th>
                    <th class="text-center" style="width: 30%;">Perusahaan</th>
                    <th class="text-center" style="width: 30%;">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $key=>$row)
                <tr>
                    <td class="d-none d-sm-table-cell text-center font-size-sm text-center">{{ $key+1}}</td>
                    <td class="d-none d-sm-table-cell text-center font-size-sm text-center">{{ $row->nim}}</td>
                    <td class="font-w600 font-size-sm text-center">
                        <a href="#">{{ $row->nama_mhs}}</a>
                    </td>
                    <td class="font-size-sm text-center">
                        {{ $row->perusahaan_nama}}
                    </td>
                    <td width="250" style="text-align: center;">
                        @if($row->file_balasan != null)
                            <a href="{{ route('admin.balasan.permohonan', $row->id)}}" class="btn btn-sm btn-alt-warning mr-5 mb-5" target="_blank" data-toggle="tooltip" data-placement="top" title="" data-original-title="Lihat Surat Permohonan"><i class="fa fa-file"></i></a>
                            <a href="{{ route('admin.balasan.show', $row->id)}}" class="btn btn-sm btn-alt-success mr-5 mb-5" target="_blank" data-toggle="tooltip" data-placement="top" title="" data-original-title="Lihat Surat Balasan"><i class="fa fa-file-o"></i></a>
                            <!-- <a href="{{ route('admin.balasan.penugasan', $row->id)}}" class="btn btn-sm btn-alt-secondary mr-5 mb-5" target="_blank" data-toggle="tooltip" data-placement="top" title="" data-original-title="Lihat Surat Penugasan"><i class="fa fa-file-text-o"></i></a> -->
                            <a href="{{ route('admin.balasan.edit', $row->id) }}" class="btn btn-sm btn-alt-primary mr-5 mb-5"><i class="fa fa-eye"></i> Lihat</a>
                        @else
                            @if($row->proposal_kp == 1)
                                @if($row->file_proposal != null)
                                <a href="{{ route('admin.permohonan.proposal', $row->id)}}" class="btn btn-sm btn-alt-warning mr-5 mb-5" target="_blank" data-toggle="tooltip" data-placement="top" title="" data-original-title="Lihat Proposal"><i class="fa fa-file"></i></a>
                                <a href="{{url('LembarPengesahanKP/Kaprodi/SetujuProposal/'.$row->nim)}}" class="btn btn-sm btn-alt-success mr-5 mb-5" data-toggle="tooltip" data-placement="top" title="" data-original-title="Setujui Laporan"><i class="fa fa-check"></i></a>
                                @else
                                    <span class="badge badge-warning">Mahasiswa Belum Upload Proposal</span>
                                @endif
                            @else
                            <span class="badge badge-warning">Proposal Belum Disetujui</span>
                            @endif
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
            </table>
        </div>
    </div>
    <!-- END Dynamic Table with Export Buttons -->

    
    <!-- Dynamic Table with Export Buttons -->
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">List Status Kerja Praktek Mahasiswa <small>Teknik Elektro</small></h3>
        </div>
        <div class="block-content block-content-full">
            <!-- DataTables functionality is initialized with .js-dataTable-full class in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
            <table class="table table-bordered table-striped table-vcenter js-dataTable-edited">
            <thead>
                <tr>
                    <th class="d-none d-sm-table-cell text-center" style="width: 2%">No</th>
                    <th class="d-none d-sm-table-cell text-center" style="width: 7%">NIM</th>
                    <th class="text-center" style="width: 20%;">Angkatan</th>
                    <th class="text-center" style="width: 45%;">Nama</th>
                    <th class="d-none d-sm-table-cell text-center" style="width: 15%;">Status KP</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1?>
                @foreach ($data as $row)
                <tr>
                    <td class="d-none d-sm-table-cell text-center font-size-sm text-center">{{ $no++}}</td>
                    <td class="d-none d-sm-table-cell text-center font-size-sm text-center">{{ $row->nim}}</td>
                    <td class="text-center font-size-sm text-center">{{ $row->angkatan}}</td>
                    <td class="font-w600 font-size-sm text-center">
                        <a href="#">{{ $row->nama_mhs}}</a>
                    </td>
                    <td class="d-none d-sm-table-cell font-size-sm text-center">
                        @if($row->statusKp($row->id))
                            <?php $status = $row->statusKp($row->id)->pluck('status_kp')->last()?>
                        @else
                           <?php $status = null ?>
                        @endif
                        @if($status == 'SETUJU')
                            <span class="badge badge-success">SETUJU</span>
                        @elseif($status == 'PENDING')
                            <span class="badge badge-primary">PENDING</span>
                        @elseif($status == 'WAITING')
                            <span class="badge badge-warning">WAITING</span>
                        @elseif($status == 'TOLAK')
                            <span class="badge badge-danger">TOLAK</span>
                        @elseif($status == null)
                            <span class="badge badge-danger">Belum Daftar</span>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
            </table>
        </div>
    </div>
    <!-- END Dynamic Table with Export Buttons -->

    <!-- Dynamic Table with Export Buttons -->
    

</div>
@endsection


<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->


