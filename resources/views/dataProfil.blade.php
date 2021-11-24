@extends('layouts.backend')

@section('title','User Management')

@section('content')
<!-- Page Content -->
<div class="content">
    @if(session()->get('message'))
        <div class="alert alert-info alert-dismissable mt-20" role="alert">
            <strong> {{ session()->get('message') }}  </strong> 
        </div>
    @endif

    <!-- Dynamic Table Full -->
    <div class="block">
        <!-- Judul Halaman -->
        <div class="block-header block-header-default">
            <h3 class="block-title">2A Pendidikan Strata satu dan strata lanjut</h3>
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
                        <th class="text-center">komentar</th>
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
                        <form action="{{url('komentar2a/'.$row->id)}}" method="post" class="d-inline">
                                    @csrf
                                    <input type="text" class="form-control form-control-lg" name="komentar"  value="{{ $row->komentar}}">
                                    <button type="submit" class="btn btn-sm btn-alt-warning"><i
                                            class="fa fa-edit"></i></button>
                                </form>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- END Dynamic Table Full -->

    <!-- DUA B -->
    <div class="block">
        <!-- Judul Halaman -->
        <div class="block-header block-header-default">
            <h3 class="block-title">2B Pendidikan Singkat</h3>
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
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; $idx=0; ?>
                        @foreach ($duaB as $row)
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
                            <td width="250" style="text-align: center;">
                            <form action="{{url('komentar2b/'.$row->id)}}" method="post" class="d-inline">
                                    @csrf
                                    <input type="text" class="form-control form-control-lg" name="komentar"  value="{{ $row->komentar}}">
                                    <button type="submit" class="btn btn-sm btn-alt-warning"><i
                                            class="fa fa-edit"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- DUA C -->
    <div class="block">
        <!-- Judul Halaman -->
        <div class="block-header block-header-default">
            <h3 class="block-title">2C Pendidikan / Pelatihan Kerja Formal</h3>
        </div>
        <div class="block-content block-content-full">
            <div class="table-responsive">
                <table class="table table-striped table-bordered text-center js-dataTable-edited">
                    <thead>
                        <tr>
                            <th class="d-none d-sm-table-cell text-center">No</th>
                            <th class="d-none d-sm-table-cell text-center">Jenis Pendidikan / Pelatihan Kerja Formal
                            </th>
                            <th class="text-center">Waktu Pelaksanaan</th>
                            <th class="text-center">Nama & Alamat
                                Penyelenggara
                                (No. Telpon, Fax, E-mail)</th>
                            <th class="text-center">Materi Pendidikan / Pelatihan Kerja Formal</th>
                            <th class="text-center">Lamanya Pendidikan</th>
                            <th class="text-center">Link G-Drive Jadwal</th>
                            <th class="text-center">Link G-Drive Sertifikat</th>
                            <th class="text-center">komentar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; $idx=0; ?>
                        @foreach ($duaC as $row)
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
                            <td width="250" style="text-align: center;">
                            <form action="{{url('komentar2c/'.$row->id)}}" method="post" class="d-inline">
                                    @csrf
                                    <input type="text" class="form-control form-control-lg" name="komentar"  value="{{ $row->komentar}}">
                                    <button type="submit" class="btn btn-sm btn-alt-warning"><i
                                            class="fa fa-edit"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- TIGA A -->
    <div class="block">
        <!-- Judul Halaman -->
        <div class="block-header block-header-default">
            <h3 class="block-title">3A Pembelajaran Mandiri</h3>
        </div>
        <div class="block-content block-content-full">
            <div class="table-responsive">
                <table class="table table-striped table-bordered text-center js-dataTable-edited">
                    <thead>
                        <tr>
                            <th class="d-none d-sm-table-cell text-center">No</th>
                            <th class="d-none d-sm-table-cell text-center">Bentuk Kegiatan Pembelajaran Mandiri
                            </th>
                            <th class="text-center">Waktu Pelaksanaan</th>
                            <th class="text-center">Nama & Alamat
                                Penyelenggara
                                (No. Telpon, Fax, E-mail)</th>
                            <th class="text-center">Judul Kegiatan Pembelajaran Mandiri</th>
                            <th class="text-center">Daftar Bacaan</th>
                            <!-- <th class="text-center">Link G-Drive Jadwal</th> -->
                            <th class="text-center">Link G-Drive Sertifikat</th>
                            <th class="text-center">komentar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; $idx=0; ?>
                        @foreach ($tigaA as $row)
                        <tr>
                            <td class="d-none d-sm-table-cell text-center font-size-sm text-center">{{ $no++}}</td>
                            <td class="d-none d-sm-table-cell text-center font-size-sm text-center">
                                {{ $row->bentuk_kegiatan}}
                            </td>
                            <td class="font-w600 font-size-sm text-center">
                                <a href="#">{{ $row->waktu}}</a>
                            </td>
                            <td class="font-size-sm text-center">
                                {{ $row->nama_alamat_telp}}
                            </td>
                            <td class="font-w600 font-size-sm text-center">
                                <a href="#">{{ $row->judul}}</a>
                            </td>
                            <td class="font-w600 font-size-sm text-center">
                                <a href="#">{{ $row->daftar}}</a>
                            </td>
                            <!-- <td class="font-w600 font-size-sm text-center">
                                <a href="#">{{ $row->jadwal}}</a>
                            </td> -->
                            <td class="font-w600 font-size-sm text-center">
                                <a href="#">{{ $row->sertifikat}}</a>
                            </td>
                            <td width="250" style="text-align: center;">
                            <form action="{{url('komentar3a/'.$row->id)}}" method="post" class="d-inline">
                                    @csrf
                                    <input type="text" class="form-control form-control-lg" name="komentar"  value="{{ $row->komentar}}">
                                    <button type="submit" class="btn btn-sm btn-alt-warning"><i
                                            class="fa fa-edit"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- TIGA B -->
    <div class="block">
        <!-- Judul Halaman -->
        <div class="block-header block-header-default">
            <h3 class="block-title">3B Pembelajaran Sehubungan Dengan Penugasan Kerja</h3>
        </div>
        <div class="block-content block-content-full">
            <div class="table-responsive">
                <table class="table table-striped table-bordered text-center js-dataTable-edited">
                    <thead>
                        <tr>
                            <th class="d-none d-sm-table-cell text-center">No</th>
                            <th class="d-none d-sm-table-cell text-center">Bentuk Kegiatan Pembelajaran Sehubungan Dengan Penugasan Kerja
                            </th>
                            <th class="text-center">Waktu Pelaksanaan</th>
                            <th class="text-center">Nama & Alamat
                                Penyelenggara
                                (No. Telpon, Fax, E-mail)</th>
                            <th class="text-center">Judul Kegiatan Pembelajaran Sehubungan Dengan Penugasan Kerja</th>
                            <th class="text-center">Daftar Bacaan</th>
                            <!-- <th class="text-center">Link G-Drive Jadwal</th> -->
                            <th class="text-center">Link G-Drive Sertifikat</th>
                            <th class="text-center">komentar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; $idx=0; ?>
                        @foreach ($datanya as $row)
                        <tr>
                            <td class="d-none d-sm-table-cell text-center font-size-sm text-center">{{ $no++}}</td>
                            <td class="d-none d-sm-table-cell text-center font-size-sm text-center">
                                {{ $row->bentuk_kegiatan}}
                            </td>
                            <td class="font-w600 font-size-sm text-center">
                                <a href="#">{{ $row->waktu}}</a>
                            </td>
                            <td class="font-size-sm text-center">
                                {{ $row->nama_alamat_telp}}
                            </td>
                            <td class="font-w600 font-size-sm text-center">
                                <a href="#">{{ $row->judul}}</a>
                            </td>
                            <td class="font-w600 font-size-sm text-center">
                                <a href="#">{{ $row->daftar}}</a>
                            </td>
                            <!-- <td class="font-w600 font-size-sm text-center">
                                <a href="#">{{ $row->jadwal}}</a>
                            </td> -->
                            <td class="font-w600 font-size-sm text-center">
                                <a href="#">{{ $row->sertifikat}}</a>
                            </td>
                            <td width="250" style="text-align: center;">
                            <form action="{{url('komentar3b/'.$row->id)}}" method="post" class="d-inline">
                                    @csrf
                                    <input type="text" class="form-control form-control-lg" name="komentar"  value="{{ $row->komentar}}">
                                    <button type="submit" class="btn btn-sm btn-alt-warning"><i
                                            class="fa fa-edit"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- EMPAT A -->
    <div class="block">
        <!-- Judul Halaman -->
        <div class="block-header block-header-default">
            <h3 class="block-title">4A Pengalaman Praktik Keinsinyuran pada lembaga / institusi formal (memiliki badan hukum)</h3>
        </div>
        <div class="block-content block-content-full">
            <div class="table-responsive">
                <table class="table table-striped table-bordered text-center js-dataTable-edited">
                    <thead>
                        <tr>
                            <th class="d-none d-sm-table-cell text-center">No</th>
                            <th class="d-none d-sm-table-cell text-center">Jenis Praktik Bidang Keinsinyuran
                            </th>
                            <th class="text-center">Waktu Pelaksanaan</th>
                            <th class="text-center">Nama & Alamat
                                Penyelenggara
                                (No. Telpon, Fax, E-mail)</th>
                            <th class="text-center">Jabatan Formal</th>
                            <th class="text-center">Uraian Tugas Keinsinyuran</th>
                            <!-- <th class="text-center">Link G-Drive Jadwal</th> -->
                            <th class="text-center">Link G-Drive Sertifikat</th>
                            <th class="text-center">komentar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; $idx=0; ?>
                        @foreach ($empatA as $row)
                        <tr>
                            <td class="d-none d-sm-table-cell text-center font-size-sm text-center">{{ $no++}}</td>
                            <td class="d-none d-sm-table-cell text-center font-size-sm text-center">
                                {{ $row->jenis_bidang}}
                            </td>
                            <td class="font-w600 font-size-sm text-center">
                                <a href="#">{{ $row->waktu}}</a>
                            </td>
                            <td class="font-size-sm text-center">
                                {{ $row->nama_alamat_telp}}
                            </td>
                            <td class="font-w600 font-size-sm text-center">
                                <a href="#">{{ $row->jabatan}}</a>
                            </td>
                            <td class="font-w600 font-size-sm text-center">
                                <a href="#">{{ $row->uraian}}</a>
                            </td>
                            <!-- <td class="font-w600 font-size-sm text-center">
                                <a href="#">{{ $row->jadwal}}</a>
                            </td> -->
                            <td class="font-w600 font-size-sm text-center">
                                <a href="#">{{ $row->sertifikat}}</a>
                            </td>
                            <td width="250" style="text-align: center;">
                            <form action="{{url('komentar4a/'.$row->id)}}" method="post" class="d-inline">
                                    @csrf
                                    <input type="text" class="form-control form-control-lg" name="komentar"  value="{{ $row->komentar}}">
                                    <button type="submit" class="btn btn-sm btn-alt-warning"><i
                                            class="fa fa-edit"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- EMPAT B -->
    <div class="block">
        <!-- Judul Halaman -->
        <div class="block-header block-header-default">
            <h3 class="block-title">4B Pengalaman Praktik Keinsinyuran pada lembaga / institusi non-formal (tidak ada badan hukum)</h3>
        </div>
        <div class="block-content block-content-full">
            <div class="table-responsive">
                <table class="table table-striped table-bordered text-center js-dataTable-edited">
                    <thead>
                        <tr>
                            <th class="d-none d-sm-table-cell text-center">No</th>
                            <th class="d-none d-sm-table-cell text-center">Jenis Praktik Bidang Keinsinyuran
                            </th>
                            <th class="text-center">Waktu Pelaksanaan</th>
                            <th class="text-center">Nama & Alamat
                                Penyelenggara
                                (No. Telpon, Fax, E-mail)</th>
                            <th class="text-center">Jabatan Formal</th>
                            <th class="text-center">Uraian Tugas Keinsinyuran </th>
                            <!-- <th class="text-center">Link G-Drive Jadwal</th> -->
                            <th class="text-center">Link G-Drive Sertifikat</th>
                            <th class="text-center">komentar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; $idx=0; ?>
                        @foreach ($empatB as $row)
                        <tr>
                            <td class="d-none d-sm-table-cell text-center font-size-sm text-center">{{ $no++}}</td>
                            <td class="d-none d-sm-table-cell text-center font-size-sm text-center">
                                {{ $row->jenis_bidang}}
                            </td>
                            <td class="font-w600 font-size-sm text-center">
                                <a href="#">{{ $row->waktu}}</a>
                            </td>
                            <td class="font-size-sm text-center">
                                {{ $row->nama_alamat_telp}}
                            </td>
                            <td class="font-w600 font-size-sm text-center">
                                <a href="#">{{ $row->jabatan}}</a>
                            </td>
                            <td class="font-w600 font-size-sm text-center">
                                <a href="#">{{ $row->uraian}}</a>
                            </td>
                            <!-- <td class="font-w600 font-size-sm text-center">
                                <a href="#">{{ $row->jadwal}}</a>
                            </td> -->
                            <td class="font-w600 font-size-sm text-center">
                                <a href="#">{{ $row->sertifikat}}</a>
                            </td>
                            <td width="250" style="text-align: center;">
                            <form action="{{url('komentar4b/'.$row->id)}}" method="post" class="d-inline">
                                    @csrf
                                    <input type="text" class="form-control form-control-lg" name="komentar"  value="{{ $row->komentar}}">
                                    <button type="submit" class="btn btn-sm btn-alt-warning"><i
                                            class="fa fa-edit"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- LIMA A -->
    <div class="block">
        <!-- Judul Halaman -->
        <div class="block-header block-header-default">
            <h3 class="block-title">5A Paparan dan Laporan Internal; Konsultasi; dan Inspeksi pada praktik keinsinyuran</h3>
        </div>
        <div class="block-content block-content-full">
            <div class="table-responsive">
                <table class="table table-striped table-bordered text-center js-dataTable-edited">
                    <thead>
                        <tr>
                            <th class="d-none d-sm-table-cell text-center">No</th>
                            <th class="d-none d-sm-table-cell text-center">Topik Paparan
                                dan Laporan Teknis Internal
                            </th>
                            <th class="text-center">Judul Paparan
                                dan Laporan Teknis Interna</th>
                            <th class="text-center">Nama Lembaga Pemberi Tugas</th>
                            <th class="text-center">Kedudukan di Dalam Paparan</th>
                            <th class="text-center">Kedudukan di Dalam Paparan</th>
                            <th class="text-center">Link G-Drive Surat keputusan penugasan</th>
                            <th class="text-center">Link G-Drive -Executive summary atau fotokopi laporan teknis</th>
                            <th class="text-center">komentar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; $idx=0; ?>
                        @foreach ($limaA as $row)
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
                            <td class="font-w600 font-size-sm text-center">
                                <a href="#">{{ $row->kedudukan_penulisan}}</a>
                            </td>
                            <td class="font-w600 font-size-sm text-center">
                                <a href="#">{{ $row->jadwal}}</a>
                            </td>
                            <td class="font-w600 font-size-sm text-center">
                                <a href="#">{{ $row->sertifikat}}</a>
                            </td>
                            <td width="250" style="text-align: center;">
                            <form action="{{url('komentar5a/'.$row->id)}}" method="post" class="d-inline">
                                    @csrf
                                    <input type="text" class="form-control form-control-lg" name="komentar"  value="{{ $row->komentar}}">
                                    <button type="submit" class="btn btn-sm btn-alt-warning"><i
                                            class="fa fa-edit"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- LIMA B -->
    <div class="block">
        <!-- Judul Halaman -->
        <div class="block-header block-header-default">
            <h3 class="block-title">5B Paparan Pada Pertemuan Teknis (Pemateri dalam pertemuan profesi keinsinyuran)</h3>
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
                        @foreach ($limaB as $row)
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
                            <form action="{{url('komentar5b/'.$row->id)}}" method="post" class="d-inline">
                                    @csrf
                                    <input type="text" class="form-control form-control-lg" name="komentar"  value="{{ $row->komentar}}">
                                    <button type="submit" class="btn btn-sm btn-alt-warning"><i
                                            class="fa fa-edit"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- LIMA C -->
    <div class="block">
        <!-- Judul Halaman -->
        <div class="block-header block-header-default">
            <h3 class="block-title">5C Penulisan Makalah Untuk Pertemuan Profesi</h3>
        </div>
        <div class="block-content block-content-full">
            <div class="table-responsive">
                <table class="table table-striped table-bordered text-center js-dataTable-edited">
                    <thead>
                        <tr>
                            <th class="d-none d-sm-table-cell text-center">No</th>
                            <th class="d-none d-sm-table-cell text-center">Judul Makalah Pada Pertemuan Profesi
                            </th>
                            <th class="text-center">Waktu dan Tempat Pertemuan Profesi</th>
                            <th class="text-center">Nama Penyelenggara Pertemuan Profesi</th>
                            <th class="text-center">Jumlah Peserta Pertemuan Profesi</th>
                            <th class="text-center">Jenis Pertemuan Profesi (Lokal, Nasional, Internasional)</th>
                            <th class="text-center">Link G-Drive Jadwal</th>
                            <th class="text-center">Link G-Drive Sertifikat</th>
                            <th class="text-center">komentar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; $idx=0; ?>
                        @foreach ($limaC as $row)
                        <tr>
                            <td class="d-none d-sm-table-cell text-center font-size-sm text-center">{{ $no++}}</td>
                            <td class="d-none d-sm-table-cell text-center font-size-sm text-center">
                                {{ $row->judul}}
                            </td>
                            <td class="font-w600 font-size-sm text-center">
                                <a href="#">{{ $row->waktu}}</a>
                            </td>
                            <td class="font-size-sm text-center">
                                {{ $row->nama_lembaga}}
                            </td>
                            <td class="font-w600 font-size-sm text-center">
                                <a href="#">{{ $row->jumlah}}</a>
                            </td>
                            <td class="font-w600 font-size-sm text-center">
                                <a href="#">{{ $row->jenis}}</a>
                            </td>
                            <td class="font-w600 font-size-sm text-center">
                                <a href="#">{{ $row->jadwal}}</a>
                            </td>
                            <td class="font-w600 font-size-sm text-center">
                                <a href="#">{{ $row->sertifikat}}</a>
                            </td>
                            <td width="250" style="text-align: center;">
                            <form action="{{url('komentar5c/'.$row->id)}}" method="post" class="d-inline">
                                    @csrf
                                    <input type="text" class="form-control form-control-lg" name="komentar"  value="{{ $row->komentar}}">
                                    <button type="submit" class="btn btn-sm btn-alt-warning"><i
                                            class="fa fa-edit"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- LIMA D -->
    <div class="block">
        <!-- Judul Halaman -->
        <div class="block-header block-header-default">
            <h3 class="block-title">5D Pengajar / Pelatih / Instruktur / Dosen Tamu pada pembelajaran atau pelatihan keinsinyuran</h3>
        </div>
        <div class="block-content block-content-full">
            <div class="table-responsive">
                <table class="table table-striped table-bordered text-center js-dataTable-edited">
                    <thead>
                        <tr>
                            <th class="d-none d-sm-table-cell text-center">No</th>
                            <th class="d-none d-sm-table-cell text-center">Jenis Instruktur
                                (Pengajar / Dosen Tamu/ Mentor / Pembimbing)
                            </th>
                            <th class="text-center">Waktu dan Tempat Sebagai Instruktur</th>
                            <th class="text-center">Nama Lembaga Pemberi Tugas</th>
                            <th class="text-center">Jumlah Peserta</th>
                            <th class="text-center">Lamanya Kegiatan Instruktur
                                (Jam)</th>
                            <th class="text-center">Link G-Drive Surat tugas </th>
                            <th class="text-center">Link G-Drive Jadwal kegiatan instruktur dan silabusnya</th>
                            <th class="text-center">komentar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; $idx=0; ?>
                        @foreach ($limaD as $row)
                        <tr>
                            <td class="d-none d-sm-table-cell text-center font-size-sm text-center">{{ $no++}}</td>
                            <td class="d-none d-sm-table-cell text-center font-size-sm text-center">
                                {{ $row->jenis}}
                            </td>
                            <td class="font-w600 font-size-sm text-center">
                                <a href="#">{{ $row->waktu}}</a>
                            </td>
                            <td class="font-size-sm text-center">
                                {{ $row->nama_lembaga}}
                            </td>
                            <td class="font-w600 font-size-sm text-center">
                                <a href="#">{{ $row->jumlah}}</a>
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
                            <td width="250" style="text-align: center;">
                            <form action="{{url('komentar5d/'.$row->id)}}" method="post" class="d-inline">
                                    @csrf
                                    <input type="text" class="form-control form-control-lg" name="komentar"  value="{{ $row->komentar}}">
                                    <button type="submit" class="btn btn-sm btn-alt-warning"><i
                                            class="fa fa-edit"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- LIMA E -->
    <div class="block">
        <!-- Judul Halaman -->
        <div class="block-header block-header-default">
            <h3 class="block-title">5E Karya tulis pada penerbitan berkala (jurnal / majalah / surat kabar dlsb)</h3>
        </div>
        <div class="block-content block-content-full">
            <div class="table-responsive">
                <table class="table table-striped table-bordered text-center js-dataTable-edited">
                    <thead>
                        <tr>
                            <th class="d-none d-sm-table-cell text-center">No</th>
                            <th class="d-none d-sm-table-cell text-center">Topik Penerbitan
                            </th>
                            <th class="text-center">Judul Penerbitan</th>
                            <th class="text-center">Jenis Penerbitan
                                Jurnal Nasional Tidak Terakreditasi; Jurnal Nasional Terakreditasi; Jurnal Internasional
                                Terakreditasi; dlsb</th>
                            <!-- <th class="text-center">Jumlah Peserta</th>
                            <th class="text-center">Lamanya Kegiatan Instruktur
                                (Jam)</th> -->
                            <th class="text-center">Link G-Drive Nomor contoh atau fotokopi jurnal/majalah/surat kabar
                            </th>
                            <!-- <th class="text-center">Link G-Drive Jadwal kegiatan instruktur dan silabusnya</th> -->
                            <th class="text-center">komentar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; $idx=0; ?>
                        @foreach ($limaE as $row)
                        <tr>
                            <td class="d-none d-sm-table-cell text-center font-size-sm text-center">{{ $no++}}</td>
                            <td class="d-none d-sm-table-cell text-center font-size-sm text-center">
                                {{ $row->topik}}
                            </td>
                            <td class="font-w600 font-size-sm text-center">
                                <a href="#">{{ $row->judul }}
                            <td class="font-size-sm text-center">
                                {{ $row->jenis}}
                            </td>
                            <!-- <td class="font-w600 font-size-sm text-center">
                                <a href="#">{{ $row->jumlah}}</a>
                            </td>
                            <td class="font-w600 font-size-sm text-center">
                                <a href="#">{{ $row->lamanya}}</a>
                            </td> -->
                            <td class="font-w600 font-size-sm text-center">
                                <a href="#">{{ $row->jadwal}}</a>
                            </td>
                            <!-- <td class="font-w600 font-size-sm text-center">
                                <a href="#">{{ $row->sertifikat}}</a>
                            </td> -->
                            <td width="250" style="text-align: center;">
                            <form action="{{url('komentar5e/'.$row->id)}}" method="post" class="d-inline">
                                    @csrf
                                    <input type="text" class="form-control form-control-lg" name="komentar"  value="{{ $row->komentar}}">
                                    <button type="submit" class="btn btn-sm btn-alt-warning"><i
                                            class="fa fa-edit"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- LIMA F -->
    <div class="block">
        <!-- Judul Halaman -->
        <div class="block-header block-header-default">
            <h3 class="block-title">5F Penulisan Buku Keinsinyuran</h3>
        </div>
        <div class="block-content block-content-full">
            <div class="table-responsive">
                <table class="table table-striped table-bordered text-center js-dataTable-edited">
                    <thead>
                        <tr>
                            <th class="d-none d-sm-table-cell text-center">No</th>
                            <th class="d-none d-sm-table-cell text-center">Judul Buku / Monograf / Standard and Code / Patent / Proceeding Seminar
                            </th>
                            <th class="text-center">Bidang Profesi</th>
                            <th class="text-center">Jumlah Halaman</th>
                            <!-- <th class="text-center">Jumlah Peserta</th>
                            <th class="text-center">Lamanya Kegiatan Instruktur
                                (Jam)</th> -->
                            <th class="text-center">Link G-Drive Nomor contoh atau fotokopi jurnal/majalah/surat kabar
                            </th>
                            <!-- <th class="text-center">Link G-Drive Jadwal kegiatan instruktur dan silabusnya</th> -->
                            <th class="text-center">komentar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; $idx=0; ?>
                        @foreach ($limaF as $row)
                        <tr>
                            <td class="d-none d-sm-table-cell text-center font-size-sm text-center">{{ $no++}}</td>
                            <td class="d-none d-sm-table-cell text-center font-size-sm text-center">
                                {{ $row->judul}}
                            </td>
                            <td class="font-w600 font-size-sm text-center">
                                <a href="#">{{ $row->bidang }}
                            <td class="font-size-sm text-center">
                                {{ $row->jumlah}}
                            </td>
                            <!-- <td class="font-w600 font-size-sm text-center">
                                <a href="#">{{ $row->jumlah}}</a>
                            </td>
                            <td class="font-w600 font-size-sm text-center">
                                <a href="#">{{ $row->lamanya}}</a>
                            </td> -->
                            <td class="font-w600 font-size-sm text-center">
                                <a href="#">{{ $row->jadwal}}</a>
                            </td>
                            <!-- <td class="font-w600 font-size-sm text-center">
                                <a href="#">{{ $row->sertifikat}}</a>
                            </td> -->
                            <td width="250" style="text-align: center;">
                            <form action="{{url('komentar5f/'.$row->id)}}" method="post" class="d-inline">
                                    @csrf
                                    <input type="text" class="form-control form-control-lg" name="komentar"  value="{{ $row->komentar}}">
                                    <button type="submit" class="btn btn-sm btn-alt-warning"><i
                                            class="fa fa-edit"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- ENAM A -->
    <div class="block">
        <!-- Judul Halaman -->
        <div class="block-header block-header-default">
            <h3 class="block-title">6A Sebagai Pakar atau Nara sumber pada bidang keinsinyuran (saksi ahli, tim ahli, dewan pakar dst)</h3>
        </div>
        <div class="block-content block-content-full">
            <div class="table-responsive">
                <table class="table table-striped table-bordered text-center js-dataTable-edited">
                    <thead>
                        <tr>
                            <th class="d-none d-sm-table-cell text-center">No</th>
                            <th class="d-none d-sm-table-cell text-center">Jenis / Kedudukan Sebagai
                                    Pakar /
                                    Nara Sumber
                            </th>
                            <th class="text-center">Waktu dan Tempat
                                    Sebagai Pakar/Nara Sumber</th>
                            <th class="text-center">>Nama Lembaga
                                    Pemberi Tugas</th>
                            <!-- <th class="text-center">Jumlah Peserta</th>
                            <th class="text-center">Lamanya Kegiatan Instruktur
                                (Jam)</th> -->
                            <th class="text-center">Link G-Drive Nomor contoh atau fotokopi jurnal/majalah/surat kabar
                            </th>
                            <th class="text-center">Link G-Drive Jadwal kegiatan instruktur dan silabusnya</th>
                            <th class="text-center">komentar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; $idx=0; ?>
                        @foreach ($enamA as $row)
                        <tr>
                            <td class="d-none d-sm-table-cell text-center font-size-sm text-center">{{ $no++}}</td>
                            <td class="d-none d-sm-table-cell text-center font-size-sm text-center">
                                {{ $row->jenis_pendidikan}}
                            </td>
                            <td class="font-w600 font-size-sm text-center">
                                <a href="#">{{ $row->waktu }}</a></td>
                            <td class="font-size-sm text-center">
                                {{ $row->nama_alamat_telp}}
                            </td>
                            <!-- <td class="font-w600 font-size-sm text-center">
                                <a href="#">{{ $row->jumlah}}</a>
                            </td>
                            <td class="font-w600 font-size-sm text-center">
                                <a href="#">{{ $row->lamanya}}</a>
                            </td> -->
                            <td class="font-w600 font-size-sm text-center">
                                <a href="#">{{ $row->jadwal}}</a>
                            </td>
                            <td class="font-w600 font-size-sm text-center">
                                <a href="#">{{ $row->sertifikat}}</a>
                            </td>
                            <td width="250" style="text-align: center;">
                            <form action="{{url('komentar6a/'.$row->id)}}" method="post" class="d-inline">
                                    @csrf
                                    <input type="text" class="form-control form-control-lg" name="komentar"  value="{{ $row->komentar}}">
                                    <button type="submit" class="btn btn-sm btn-alt-warning"><i
                                            class="fa fa-edit"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- ENAM B -->
    <div class="block">
        <!-- Judul Halaman -->
        <div class="block-header block-header-default">
            <h3 class="block-title">6B Pengurus organisasi profesi atau pimpinan lembaga / institusi</h3>
        </div>
        <div class="block-content block-content-full">
            <div class="table-responsive">
                <table class="table table-striped table-bordered text-center js-dataTable-edited">
                    <thead>
                        <tr>
                            <th class="d-none d-sm-table-cell text-center">No</th>
                            <th class="d-none d-sm-table-cell text-center">Nama Organisasi Profesi / Lembaga / Institusi
                            </th>
                            <!-- <th class="text-center">Waktu dan Tempat
                                Sebagai Pakar/Nara Sumber</th> -->
                            <th class="text-center">Alamat
                                (No. Telp.; Fax; E-mail)</th>
                            <th class="text-center">Kedudukan / Jabatan Dalam Organisasi Profesi / Lembaga / Institusi
                            </th>
                            <th class="text-center">Periode Tahun
                                Masa Jabatan</th>
                            <th class="text-center">Link G-Drive Surat penugasan
                            </th>
                            <th class="text-center">Link G-Drive Sertifikat/surat
                                    keterangan atau keanggotaan</th>
                            <th class="text-center">komentar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; $idx=0; ?>
                        @foreach ($enamB as $row)
                        <tr>
                            <td class="d-none d-sm-table-cell text-center font-size-sm text-center">{{ $no++}}</td>
                            <td class="d-none d-sm-table-cell text-center font-size-sm text-center">
                                {{ $row->nama_organisasi}}
                            </td>
                            <!-- <td class="font-w600 font-size-sm text-center">
                                <a href="#">{{ $row->waktu }} </a></td> -->
                            <td class="font-size-sm text-center">
                                {{ $row->nama_alamat_telp}}
                            </td>
                            <td class="font-w600 font-size-sm text-center">
                                <a href="#">{{ $row->kedudukan}}</a>
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
                            <td width="250" style="text-align: center;">
                            <form action="{{url('komentar6b/'.$row->id)}}" method="post" class="d-inline">
                                    @csrf
                                    <input type="text" class="form-control form-control-lg" name="komentar"  value="{{ $row->komentar}}">
                                    <button type="submit" class="btn btn-sm btn-alt-warning"><i
                                            class="fa fa-edit"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- ENAM C -->
    <div class="block">
        <!-- Judul Halaman -->
        <div class="block-header block-header-default">
            <h3 class="block-title">6C Penerima tanda jasa, award, tanda penghargaan dan sejenisnya</h3>
        </div>
        <div class="block-content block-content-full">
            <div class="table-responsive">
                <table class="table table-striped table-bordered text-center js-dataTable-edited">
                    <thead>
                        <tr>
                            <th class="d-none d-sm-table-cell text-center">No</th>
                            <th class="d-none d-sm-table-cell text-center">Bentuk Tanda Jasa / Award
                            </th>
                            <!-- <th class="text-center">Waktu dan Tempat
                                Sebagai Pakar/Nara Sumber</th> -->
                            <th class="text-center">Instansi Pemberi Tanda Jasa / Award</th>
                            <th class="text-center">Tahun Penerimaan Tanda Jasa / Awardi
                            </th>
                            <!-- <th class="text-center">Periode Tahun
                                Masa Jabatan</th> -->
                            <th class="text-center">Link G-Drive Surat penugasan
                            </th>
                            <th class="text-center">Link G-Drive Sertifikat/surat
                                    keterangan atau keanggotaan</th>
                            <th class="text-center">Komentar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; $idx=0; ?>
                        @foreach ($enamC as $row)
                        <tr>
                            <td class="d-none d-sm-table-cell text-center font-size-sm text-center">{{ $no++}}</td>
                            <td class="d-none d-sm-table-cell text-center font-size-sm text-center">
                                {{ $row->bentuk}}
                            </td>
                            <!-- <td class="font-w600 font-size-sm text-center">
                                <a href="#">{{ $row->waktu }} </a></td> -->
                            <td class="font-size-sm text-center">
                                {{ $row->instansi}}
                            </td>
                            <td class="font-w600 font-size-sm text-center">
                                <a href="#">{{ $row->tahun}}</a>
                            </td>
                            <!-- <td class="font-w600 font-size-sm text-center">
                                <a href="#">{{ $row->lamanya}}</a>
                            </td> -->
                            <td class="font-w600 font-size-sm text-center">
                                <a href="#">{{ $row->jadwal}}</a>
                            </td>
                            <td class="font-w600 font-size-sm text-center">
                                <a href="#">{{ $row->sertifikat}}</a>
                            </td>
                            <td width="250" style="text-align: center;">
                            <form action="{{url('komentar6c/'.$row->id)}}" method="post" class="d-inline">
                                    @csrf
                                    <input type="text" class="form-control form-control-lg" name="komentar"  value="{{ $row->komentar}}">
                                    <button type="submit" class="btn btn-sm btn-alt-warning"><i
                                            class="fa fa-edit"></i></button>
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
<!-- Top Modal -->
<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="modal-top" aria-hidden="true">
    <div class="modal-dialog modal-dialog-top" role="document">
    <form action="{{route('admin.users.destroy','delete')}}" method="post">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">Delete Confirmation</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="si si-close"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    @csrf
                    @method('DELETE')
                    <p class="text-center">Are You Sure Want To Delete ?</p>
                    <input type="hidden" name="user_id" id="user_id" value="">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-alt-danger">
                    <i class="fa fa-check"></i> Yes, Delete
                </button>
            </div>
        </div>
    </form>
    </div>
</div>
<!-- END Top Modal -->
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
@endsection
