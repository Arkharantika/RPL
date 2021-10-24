<!DOCTYPE html>
<html>
    <head>
    <title>Halaman Pengesahan</title>
    <!-- <link rel="stylesheet" id="css-main" href="{{ asset('/css/bootstrap.min.css') }}"> -->
    <style type="text/css">
        .table * {
            border: none;
        }
        .table1 td {
            /* vertical-align: text-top; */
            text-align: center;
            height: 25px;
            /* padding: 2px; */
        }
            .ttd1 td {
                height: 45px;
            }
        body{
            font-size: 14px;
            line-height: 1.3;
            font-family: "Times New Roman", Times, serif;
        }
        @page {
            /* header: page-header; */
            /* footer: page-footer;  */
        }
    </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col">
                        <!-- Judul  -->
                    <p style="text-align: center; font-size: 14px; margin-bottom:0; padding-bottom:0; line-height: 1.5;">
                        <strong>HALAMAN PENGESAHAN</strong>
                    </p>
                    <p style="text-align: center; font-size: 14px; margin-bottom:0; padding-bottom:0; line-height: 1.5; text-transform:uppercase">
                        <strong>{{ $complete->judul_seminar}}</strong>
                    </p>
                    <p style="text-align: center; font-size: 14px; margin-top:0; padding-top:0; text-transform: uppercase; line-height: 1.5;">
                        <strong> {{ $complete->perusahaan_nama}} </strong>
                    </p>                        
                        <!-- Batas  -->
                    <br><br><br><br>
                    <br><br><br><br>
                    <br><br><br><br>
                        <!-- Batas -->
                    <p align="center" style="font-size: 14px;">Disusun Oleh</p>
                    <p align="center" style="font-size: 14px; text-transform:uppercase;">{{$data->nama_mhs}}</p>
                    <p align="center" style="font-size: 14px;">{{$complete->nim}}</p>
                        <!-- Batas  -->
                    <br><br><br><br>
                        <!-- Batas -->
                    <table style="width: 100%">
                        <tr>
                        
                            <!-- Tanda Tangan Koordinator Kerja Praktik -->
                            <td style="width: 50%"><br><br>Koordinator Kerja Praktik<br>
                            @if(($complete->yes_koor ?? '') == 1)
                                @if(($koorkp->signature_dosen))
                                <img src="{{ asset('file_ttd/'.$koorkp->signature_dosen) }}" width="100" height="80" style="postion: relative; z-index: 1; top:10%;"/>
                                @else       
                                <br><br><br><br>
                                @endif
                            @else
                            <br><br><br><br>
                            @endif
                            <br><strong><u>{{$koorkp->nama_dosen}}</u></strong><br>NIP. {{$koorkp->nip}}</td>

                            <!-- Tanda Tangan Dosen Pembimbing -->
                            <td style="width: 50%; text-align: right;"><br><br>Pembimbing Kerja Praktik<br>
                            @if(($complete->yes_pembimbing ?? '') == 1)
                                @if($complete->signature_dosen)
                                <img src="{{ asset('file_ttd/'.$complete->signature_dosen) }}" width="100" height="80" style="postion: relative; z-index: 1; top:10%;"/>
                                @else
                                <br><br><br><br>
                                @endif
                            @else
                            <br><br><br><br>
                            @endif
                            <br><strong><u>{{$complete->nama_dosen}}</u></strong><br>NIP. {{$complete->nip}}</td>
                            
                        </tr>
                    </table>
                        <!-- batas -->
                    <br><br>
                        <!-- batas -->

                    <!-- Tanda Tangan Kaprodi (FINAL) -->
                    <table style="width: 100%; text-center">
                        <tr>
                        <td style="width: 100%; text-align: center;"><br><br>Kepala Prodi Teknik Elektro<br>
                            @if(($complete->yes_kaprodi ?? '') == 1)
                                @if($kaprodi->signature_dosen)
                                <img src="{{ asset('file_ttd/'.$kaprodi->signature_dosen) }}" width="100" height="80" style="postion: relative; z-index: 1; top:10%;"/>
                                @else
                                <br><br><br><br>
                                @endif
                            @else
                            <br><br><br><br>
                            @endif
                            <br><strong><u>{{$kaprodi->nama_dosen}}</u></strong><br>NIP. {{$kaprodi->nip}}</td>
                        </tr>
                    </table>
                    </div>     
                </div>
            </div>
        </div>
    </body>
</html>