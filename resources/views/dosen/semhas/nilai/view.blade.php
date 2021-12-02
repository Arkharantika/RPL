@extends('layouts.backend')

@section('title','Seminar Hasil Tugas Akhir')

@section('content')
<div class="content">
    <h2 class="content-heading">Penilaian RPL</h2>
    <div class="row">
        <div class="col-md-12">
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Mahasiswa</h3>
                </div>
                <div class="block-content">
                    <div class="form-group row">
                        <label class="col-2" for="nama">Nama</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="nama" name="nama" value="{{$data->nama_mhs }}" placeholder="masukkan nama" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2" for="nim">NIM</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="nim" name="nim" value="{{$data->nim }}" placeholder="masukkan nim" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2" for="sks">Total SKS</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="sks" name="sks" value="{{$data->sks }}" placeholder="Total SKS yang dicapai" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2" for="ipk">Indeks Prestasi Kumulatif</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="ipk" name="ipk" value="{{$data->ipk }}" placeholder="IPK terakhir" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="peminatan" class="col-2">Peminatan</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control"  name="peminatan" Value="{{$data->nama_peminatan}}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2" for="judul">Judul</label>
                        <div class="col-md-10">
                            <textarea type="text" class="form-control" id="judul" name="judul" rows="4" readonly>{{$data->judul}}</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Nilai RPL</h3>
                </div>
                <div class="block-content">
                <form action="{{route('dosen.nilai_semhas.store')}}" method="post">
                    @csrf
                    <h5>KODE ETIK DAN ETIKA  PROFESI  INSINYUR</h5>
                    <h6>Pengalaman Organisasi Profesi</h6>
                    <input type="hidden" name="id_pembimbing" value="{{$data->id}}">
                    <div class="form-group row">
                        <label class="col-md-4" for="a1">1. Ketua/Wkl Ketua </label>
                        <div class="col-md-8">
                            <input required type="number"step="1" min="0" max="100" class="form-control" name="a1" value="{{old('a1')}}" placeholder="Nilai 0 - 100">
                            <span class="text-danger">{{ $errors->first('a1') }}</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4" for="a2">2. Pengurus Inti  </label>
                        <div class="col-md-8">
                            <input required type="number"step="1" min="0" max="100" class="form-control" name="a2" value="{{old('a2')}}" placeholder="Nilai 0 - 100">
                            <span class="text-danger">{{ $errors->first('a2') }}</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4" for="a3">3. Pengurus bidang</label>
                        <div class="col-md-8">
                            <input required type="number"step="1" min="0" max="100" class="form-control" name="a3" value="{{old('a3')}}" placeholder="Nilai 0 - 100">
                            <span class="text-danger">{{ $errors->first('a3') }}</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4" for="a4">4. Anggota</label>
                        <div class="col-md-8">
                            <input required type="number"step="1" min="0" max="100" class="form-control" name="a4" value="{{old('a4')}}" placeholder="Nilai 0 - 100">
                            <span class="text-danger">{{ $errors->first('a4') }}</span>
                        </div>
                    </div>
                    <h6>Pengalaman mengikuti pertemuan etika keprofesian</h6>
                    <input type="hidden" name="id_pembimbing" value="{{$data->id}}">
                    <div class="form-group row">
                        <label class="col-md-4" for="a1">1. pembicara </label>
                        <div class="col-md-8">
                            <input required type="number"step="1" min="0" max="100" class="form-control" name="a1" value="{{old('a1')}}" placeholder="Nilai 0 - 100">
                            <span class="text-danger">{{ $errors->first('a1') }}</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4" for="a2">2. panitia  </label>
                        <div class="col-md-8">
                            <input required type="number"step="1" min="0" max="100" class="form-control" name="a2" value="{{old('a2')}}" placeholder="Nilai 0 - 100">
                            <span class="text-danger">{{ $errors->first('a2') }}</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4" for="a3">3. peserta</label>
                        <div class="col-md-8">
                            <input required type="number"step="1" min="0" max="100" class="form-control" name="a3" value="{{old('a3')}}" placeholder="Nilai 0 - 100">
                            <span class="text-danger">{{ $errors->first('a3') }}</span>
                        </div>
                    </div>
                    <h6>Penerapan etika profesi keinsinyuran</h6>
                    <input type="hidden" name="id_pembimbing" value="{{$data->id}}">
                    <div class="form-group row">
                        <label class="col-md-4" for="a1">1. Sertifikat Pendidik bidang keinsinyuran </label>
                        <div class="col-md-8">
                            <input required type="number"step="1" min="0" max="100" class="form-control" name="a1" value="{{old('a1')}}" placeholder="Nilai 0 - 100">
                            <span class="text-danger">{{ $errors->first('a1') }}</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4" for="a2">2. Sertifikat ahli profesi (pengalaman kerja)  </label>
                        <div class="col-md-8">
                            <input required type="number"step="1" min="0" max="100" class="form-control" name="a2" value="{{old('a2')}}" placeholder="Nilai 0 - 100">
                            <span class="text-danger">{{ $errors->first('a2') }}</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4" for="a3">3. surat keterangan kerja bid etika keinsinyuran</label>
                        <div class="col-md-8">
                            <input required type="number"step="1" min="0" max="100" class="form-control" name="a3" value="{{old('a3')}}" placeholder="Nilai 0 - 100">
                            <span class="text-danger">{{ $errors->first('a3') }}</span>
                        </div>
                    </div>
                    <h6>Lain - Lain</h6>
                    <input type="hidden" name="id_pembimbing" value="{{$data->id}}">
                    <div class="form-group row">
                        <label class="col-md-4" for="a1">1. Claim CV (1 item jenis pek, claim 0,25)</label>
                        <div class="col-md-8">
                            <input required type="number"step="1" min="0" max="100" class="form-control" name="a1" value="{{old('a1')}}" placeholder="Nilai 0 - 100">
                            <span class="text-danger">{{ $errors->first('a1') }}</span>
                        </div>
                    </div>
                    <br>
                    <h5>PROFESIONALISME KEINSINYURAN </h5>
                    <h6>Praktik profesi keinsinyuran</h6>
                    <div class="form-group row">
                        <label class="col-md-4" for="b1">1. lembaga formal</label>
                        <div class="col-md-8">
                            <input required type="number"step="1" min="0" max="100" class="form-control" name="b1" value="{{old('b1')}}" placeholder="Nilai 0 - 100">
                            <span class="text-danger">{{ $errors->first('b1') }}</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4" for="b2">2. lembaga non formal</label>
                        <div class="col-md-8">
                            <input required type="number"step="1" min="0" max="100" class="form-control" name="b2" value="{{old('b2')}}" placeholder="Nilai 0 - 100">
                            <span class="text-danger">{{ $errors->first('b2') }}</span>
                        </div>
                    </div>
                    <h6>Pendidikan</h6>
                    <div class="form-group row">
                        <label class="col-md-4" for="b3">1. strata lanjut</label>
                        <div class="col-md-8">
                            <input required type="number"step="1" min="0" max="100" class="form-control" name="b3" value="{{old('b3')}}" placeholder="Nilai 0 - 100">
                            <span class="text-danger">{{ $errors->first('b3') }}</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4" for="b4">2. singkat/course</label>
                        <div class="col-md-8">
                            <input required type="number"step="1" min="0" max="100" class="form-control" name="b4" value="{{old('b4')}}" placeholder="Nilai 0 - 100">
                            <span class="text-danger">{{ $errors->first('b4') }}</span>
                        </div>
                    </div>
                    <h6>Pelatihan</h6>
                    <div class="form-group row">
                        <label class="col-md-4" for="b5">1. kerja formal</label>
                        <div class="col-md-8">
                            <input required type="number"step="1" min="0" max="100" class="form-control" name="b5" value="{{old('b5')}}" placeholder="Nilai 0 - 100">
                            <span class="text-danger">{{ $errors->first('b5') }}</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4" for="b5">2. kerja non formal</label>
                        <div class="col-md-8">
                            <input required type="number"step="1" min="0" max="100" class="form-control" name="b5" value="{{old('b5')}}" placeholder="Nilai 0 - 100">
                            <span class="text-danger">{{ $errors->first('b5') }}</span>
                        </div>
                    </div>
                    <h6>Penugasan kerja </h6>
                    <div class="form-group row">
                        <label class="col-md-4" for="b5">1. setingkat leader/pimpinan/ketua</label>
                        <div class="col-md-8">
                            <input required type="number"step="1" min="0" max="100" class="form-control" name="b5" value="{{old('b5')}}" placeholder="Nilai 0 - 100">
                            <span class="text-danger">{{ $errors->first('b5') }}</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4" for="b5">2. setingkat pelaksana</label>
                        <div class="col-md-8">
                            <input required type="number"step="1" min="0" max="100" class="form-control" name="b5" value="{{old('b5')}}" placeholder="Nilai 0 - 100">
                            <span class="text-danger">{{ $errors->first('b5') }}</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4" for="b5">3. setingkat operator</label>
                        <div class="col-md-8">
                            <input required type="number"step="1" min="0" max="100" class="form-control" name="b5" value="{{old('b5')}}" placeholder="Nilai 0 - 100">
                            <span class="text-danger">{{ $errors->first('b5') }}</span>
                        </div>
                    </div>
                    <br>
                    <h5>KESELAMATAN, KESEHATAN, KEAMANAN KERJA DAN LINGKUNGAN</h5>
                    <h6>Bekerja Bidang K3</h6>
                    <div class="form-group row">
                        <label class="col-md-4" for="c1">1. setingkat representative/kebijakan</label>
                        <div class="col-md-8">
                            <input required type="number"step="1" min="0" max="100" class="form-control" name="c1" value="{{old('c1')}}" placeholder="Nilai 0 - 100">
                            <span class="text-danger">{{ $errors->first('c1') }}</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4" for="c2">2. setingkat manager</label>
                        <div class="col-md-8">
                            <input required type="number"step="1" min="0" max="100" class="form-control" name="c2" value="{{old('c2')}}" placeholder="Nilai 0 - 100">
                            <span class="text-danger">{{ $errors->first('c2') }}</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4" for="c3">3. setingkat pelaksana</label>
                        <div class="col-md-8">
                            <input required type="number"step="1" min="0" max="100" class="form-control" name="c3" value="{{old('c3')}}" placeholder="Nilai 0 - 100">
                            <span class="text-danger">{{ $errors->first('c3') }}</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4" for="revisi">4. setingkat operator</label>
                        <div class="col-md-8">
                            <input required type="number"step="1" min="0" max="100" class="form-control" name="c3" value="{{old('c3')}}" placeholder="Nilai 0 - 100">
                            <span class="text-danger">{{ $errors->first('c3') }}</span>
                        </div>
                    </div>
                    <h6>Pelatihan / Workshop / Seminar</h6>
                    <div class="form-group row">
                        <label class="col-md-4" for="revisi">1. pemateri/pemakalah</label>
                        <div class="col-md-8">
                            <input required type="number"step="1" min="0" max="100" class="form-control" name="c3" value="{{old('c3')}}" placeholder="Nilai 0 - 100">
                            <span class="text-danger">{{ $errors->first('c3') }}</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4" for="revisi">2. peserta</label>
                        <div class="col-md-8">
                            <input required type="number"step="1" min="0" max="100" class="form-control" name="c3" value="{{old('c3')}}" placeholder="Nilai 0 - 100">
                            <span class="text-danger">{{ $errors->first('c3') }}</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4" for="revisi">3. panitia</label>
                        <div class="col-md-8">
                            <input required type="number"step="1" min="0" max="100" class="form-control" name="c3" value="{{old('c3')}}" placeholder="Nilai 0 - 100">
                            <span class="text-danger">{{ $errors->first('c3') }}</span>
                        </div>
                    </div>
                    <br>
                    <h5>PRAKTIK KEINSINYURAN</h5>
                    <h6>Pendidikan</h6>
                    <div class="form-group row">
                        <label class="col-md-4" for="revisi">1. Melaksanakan pengembangan hasil pendidikan </label>
                        <div class="col-md-8">
                            <input required type="number"step="1" min="0" max="100" class="form-control" name="c3" value="{{old('c3')}}" placeholder="Nilai 0 - 100">
                            <span class="text-danger">{{ $errors->first('c3') }}</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4" for="revisi">2. Melaksanakan pengembangan hasil  penelitian </label>
                        <div class="col-md-8">
                            <input required type="number"step="1" min="0" max="100" class="form-control" name="c3" value="{{old('c3')}}" placeholder="Nilai 0 - 100">
                            <span class="text-danger">{{ $errors->first('c3') }}</span>
                        </div>
                    </div>
                    <h6>Pekerjaan / Proyek Keinsinyuran</h6>
                    <div class="form-group row">
                        <label class="col-md-4" for="revisi">1. Direksi/GM</label>
                        <div class="col-md-8">
                            <input required type="number"step="1" min="0" max="100" class="form-control" name="c3" value="{{old('c3')}}" placeholder="Nilai 0 - 100">
                            <span class="text-danger">{{ $errors->first('c3') }}</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4" for="revisi">2. Leader/manager</label>
                        <div class="col-md-8">
                            <input required type="number"step="1" min="0" max="100" class="form-control" name="c3" value="{{old('c3')}}" placeholder="Nilai 0 - 100">
                            <span class="text-danger">{{ $errors->first('c3') }}</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4" for="revisi">3. Engineer </label>
                        <div class="col-md-8">
                            <input required type="number"step="1" min="0" max="100" class="form-control" name="c3" value="{{old('c3')}}" placeholder="Nilai 0 - 100">
                            <span class="text-danger">{{ $errors->first('c3') }}</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4" for="revisi">4. Operator </label>
                        <div class="col-md-8">
                            <input required type="number"step="1" min="0" max="100" class="form-control" name="c3" value="{{old('c3')}}" placeholder="Nilai 0 - 100">
                            <span class="text-danger">{{ $errors->first('c3') }}</span>
                        </div>
                    </div>
                    <h6>Paparan Dan Laporan Teknis Internal Paparan Pada Pertemuan Keinsinyuran</h6>
                    <div class="form-group row">
                        <label class="col-md-4" for="revisi">1. Paparan Dan Laporan Teknis Internal </label>
                        <div class="col-md-8">
                            <input required type="number"step="1" min="0" max="100" class="form-control" name="c3" value="{{old('c3')}}" placeholder="Nilai 0 - 100">
                            <span class="text-danger">{{ $errors->first('c3') }}</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4" for="revisi">2. Paparan Pada Pertemuan Keinsinyuran </label>
                        <div class="col-md-8">
                            <input required type="number"step="1" min="0" max="100" class="form-control" name="c3" value="{{old('c3')}}" placeholder="Nilai 0 - 100">
                            <span class="text-danger">{{ $errors->first('c3') }}</span>
                        </div>
                    </div>
                    <br>
                    <h5>STUDI KASUS </h5>
                    <div class="form-group row">
                        <label class="col-md-4" for="revisi">1. Studi kasus keinsinyuran </label>
                        <div class="col-md-8">
                            <input required type="number"step="1" min="0" max="100" class="form-control" name="c3" value="{{old('c3')}}" placeholder="Nilai 0 - 100">
                            <span class="text-danger">{{ $errors->first('c3') }}</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4" for="revisi">2. Memberi pelayanan kepada masyarakat atau kegiatan lain bidang keinsinyuran </label>
                        <div class="col-md-8">
                            <input required type="number"step="1" min="0" max="100" class="form-control" name="c3" value="{{old('c3')}}" placeholder="Nilai 0 - 100">
                            <span class="text-danger">{{ $errors->first('c3') }}</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4" for="revisi">3. Menunjang pelaksanaan tugas umum pemerintah dan pembangunan </label>
                        <div class="col-md-8">
                            <input required type="number"step="1" min="0" max="100" class="form-control" name="c3" value="{{old('c3')}}" placeholder="Nilai 0 - 100">
                            <span class="text-danger">{{ $errors->first('c3') }}</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4" for="revisi">4. Pengajaran Sebagai Pengajar/Instruktur </label>
                        <div class="col-md-8">
                            <input required type="number"step="1" min="0" max="100" class="form-control" name="c3" value="{{old('c3')}}" placeholder="Nilai 0 - 100">
                            <span class="text-danger">{{ $errors->first('c3') }}</span>
                        </div>
                    </div>
                    <br>
                    <h5>SEMINAR, WORKSHOP, DISKUSI</h5>
                    <div class="form-group row">
                        <label class="col-md-4" for="revisi">1. Sebagai Pakar atau Narasumber</label>
                        <div class="col-md-8">
                            <input required type="number"step="1" min="0" max="100" class="form-control" name="c3" value="{{old('c3')}}" placeholder="Nilai 0 - 100">
                            <span class="text-danger">{{ $errors->first('c3') }}</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4" for="revisi">2. Sebagai Penerima Tanda Jasa, Award, dan sejenisnya</label>
                        <div class="col-md-8">
                            <input required type="number"step="1" min="0" max="100" class="form-control" name="c3" value="{{old('c3')}}" placeholder="Nilai 0 - 100">
                            <span class="text-danger">{{ $errors->first('c3') }}</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4" for="revisi">3. Melaksanakan pengembangan hasil pendidikan dan penelitian </label>
                        <div class="col-md-8">
                            <input required type="number"step="1" min="0" max="100" class="form-control" name="c3" value="{{old('c3')}}" placeholder="Nilai 0 - 100">
                            <span class="text-danger">{{ $errors->first('c3') }}</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4" for="revisi">4. Memberi latihan/penyuluhan/penataran/ceramah pada masyarakat </label>
                        <div class="col-md-8">
                            <input required type="number"step="1" min="0" max="100" class="form-control" name="c3" value="{{old('c3')}}" placeholder="Nilai 0 - 100">
                            <span class="text-danger">{{ $errors->first('c3') }}</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4" for="revisi">5.  Berperan serta aktif dalam pertemuan ilmiah </label>
                        <div class="col-md-8">
                            <input required type="number"step="1" min="0" max="100" class="form-control" name="c3" value="{{old('c3')}}" placeholder="Nilai 0 - 100">
                            <span class="text-danger">{{ $errors->first('c3') }}</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4" for="revisi">6. Berperan serta aktif dalam pengelolaan jurnal ilmiah </label>
                        <div class="col-md-8">
                            <input required type="number"step="1" min="0" max="100" class="form-control" name="c3" value="{{old('c3')}}" placeholder="Nilai 0 - 100">
                            <span class="text-danger">{{ $errors->first('c3') }}</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4" for="revisi">7. Penulisan Makalah Untuk Pertemuan Profesi </label>
                        <div class="col-md-8">
                            <input required type="number"step="1" min="0" max="100" class="form-control" name="c3" value="{{old('c3')}}" placeholder="Nilai 0 - 100">
                            <span class="text-danger">{{ $errors->first('c3') }}</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4" for="revisi">8. Penulisan Untuk Majalah </label>
                        <div class="col-md-8">
                            <input required type="number"step="1" min="0" max="100" class="form-control" name="c3" value="{{old('c3')}}" placeholder="Nilai 0 - 100">
                            <span class="text-danger">{{ $errors->first('c3') }}</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4" for="revisi">9. Penulisan Buku </label>
                        <div class="col-md-8">
                            <input required type="number"step="1" min="0" max="100" class="form-control" name="c3" value="{{old('c3')}}" placeholder="Nilai 0 - 100">
                            <span class="text-danger">{{ $errors->first('c3') }}</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-8">
                            <!-- <button class="btn btn-primary mr-5 mb-5">Simpan</button> -->
                            <!-- <button class="btn btn-primary mr-5 mb-5">Simpan</button> -->
                            <!-- <a href="{{route('dosen.semhas.index')}}" class="btn btn-secondary mr-5 mb-5">Kembali</a> -->
                            <a href="" class="btn btn-primary mr-5 mb-5">Simpan</a>
                            <a href="" class="btn btn-secondary mr-5 mb-5">Kembali</a>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
