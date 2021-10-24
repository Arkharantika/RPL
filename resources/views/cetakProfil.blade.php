<!DOCTYPE html>
<html>

<head>
    <title>Surat Bebas LAB</title>
    <!-- <link rel="stylesheet" id="css-main" href="{{ asset('/css/bootstrap.min.css') }}"> -->
    <style type="text/css">
        .table * {
            /* height: 30px; */
            border: none;
        }

        .table1 td {
            vertical-align: text-top;
            text-align: left;
            height: 25px;
            /* padding: 2px; */
        }

        .ttd {
            border-collapse: collapse;
        }

        .ttd tr td {
            border: 1px;
            border-style: solid;
        }

        .ttd td {
            /* vertical-align: text-top; */
            text-align: left;
            height: 90px;
        }

        body {
            font-size: 14px;
            line-height: 1.3;
            font-family: "Times New Roman", Times, serif;
        }

        @page {
            header: page-header;
            /* footer: page-footer;  */
        }
    </style>
    <style>
        textarea:disabled,
        textarea[disabled] {
            /* border: 1px solid #999999; */
            background-color: #ffffff !important;
            /* color: #666990; */
        }
    </style>
</head>

<body>
    <!-- <htmlpageheader name="page-header">
            <table width="100%">
                <tr>
                    <td style="width: 20%; text-align: center;">
                        <img src="{{ asset('media/logo-uns-biru.png') }}" style="height: 100px;" />
                    </td>
                    <td style="width: 80%; color: #4FA9BA;" align="center">
                        <p style="font-size: 16px; margin:0; padding:0;"> KEMENTERIAN PENDIDIKAN DAN KEBUDAYAAN<br />
                            UNIVERSITAS SEBELAS MARET<br />
                            FAKULTAS TEKNIK<br />
                            <strong>PROGRAM STUDI TEKNIK ELEKTRO</strong></p>
                        <p style="font-style: italic; margin:0; padding:0;">Jalan. Ir. Sutami nomor 36 A Kentingan Surakarta
                            57126
                            <br /> Telepon. 0271 647069 psw 438, faksimili: 0271 662118</p>
                        <hr style="border: 1px solid; color: #4FA9BA; margin:0; padding:0">
                    </td>
                </tr>
            </table>
        </htmlpageheader> -->
    <htmlpagefooter name="page-footer">
        <span style="background-color: #000000; color: white;">
            TE-KP-006
        </span>
    </htmlpagefooter>
    <div class="container" style="margin-left: 25px;">
        <div class="row">
            <div class="col">

                <!-- ------- -->
                <!-- PROFILE -->
                <!-- ------- -->

                
                <div>
                    <p style="text-align:center; line-height:18pt;"><strong><span
                                style="font-size:14pt; vertical-align:3pt;">FORMULIR ISIAN PROGRAM REKOGNISI
                                PEMBELAJARAN
                                LAMPAU</span></strong></p>
                    <p
                        style="margin-top:0pt; margin-left:54pt; margin-bottom:0pt; text-indent:-54pt; text-align:justify; line-height:18pt;">
                        <strong><span style="font-size:14pt; vertical-align:3pt;">&nbsp;</span></strong></p>
                    <h1
                    style="margin-top:0pt; margin-left:14.2pt; margin-bottom:0pt; text-indent:-14.2pt; text-align:justify; line-height:18pt;">
                        <span style="font-size:14pt; vertical-align:3pt;">1.</span><span
                            style="width:3.7pt; font:7pt 'Times New Roman'; display:inline-block;">&nbsp;&nbsp;&nbsp;</span><span
                            style="font-size:14pt; vertical-align:3pt;">Data Pribadi Peserta PS PPI.</span></h1>
                    <p
                    style="margin-top:0pt; margin-left:18pt; margin-bottom:0pt; text-align:justify; line-height:18pt;">
                        <span style="width:36pt; display:inline-block;">&nbsp;</span><span
                            style="width:18pt; display:inline-block;">&nbsp;</span><span
                            style="width:36pt; display:inline-block;">&nbsp;</span><span
                            style="width:36pt; display:inline-block;">&nbsp;</span><span
                            style="width:36pt; display:inline-block;">&nbsp;</span><span
                            style="width:36pt; display:inline-block;">&nbsp;</span><span
                            style="width:36pt; display:inline-block;">&nbsp;</span><span
                            style="width:36pt; display:inline-block;">&nbsp;</span><span
                            style="width:36pt; display:inline-block;">&nbsp;</span><span
                            style="width:36pt; display:inline-block;">&nbsp;</span><span
                            style="width:36pt; display:inline-block;">&nbsp;</span><span
                            style="width:36pt; display:inline-block;">&nbsp;</span><span
                            style="width:36pt; display:inline-block;">&nbsp;</span><strong><span
                                style="vertical-align:3pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></strong>
                            </p>
                    <table cellpadding="0" cellspacing="0"
                        style="width:664.35pt; margin-left:2.4pt; border-collapse:collapse;">
                        <tbody>
                            <tr>
                                <td colspan="3"
                                    style="width:121.35pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:18pt;"><span
                                            style="font-size:12pt; vertical-align:3pt;">Nama</span><span
                                            style="font-size:12pt; vertical-align:3pt;">&nbsp;&nbsp;</span><span
                                            style="font-size:12pt; vertical-align:3pt;">Lengkap</span></p>
                                </td>
                                <td colspan="4"
                                    style="width:418.25pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:18pt;"><span
                                            style="font-size:12pt;">{{$mahasiswa->nama_mhs}}</span></p>
                                </td>
                                <td rowspan="6"
                                    style="width:91.9pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p
                                        style="margin-top:0pt; margin-left:9.25pt; margin-bottom:0pt; text-indent:-9.25pt; line-height:18pt;">
                                        <img src="{{asset('file_ttd/'.$mahasiswa->signature_mhs)}}" width="137"
                                            height="200" alt=""></p>
                                        </td>
                            </tr>
                            <tr>
                                <td colspan="3"
                                    style="width:121.35pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:18pt;"><span
                                            style="font-size:12pt; vertical-align:3pt;">Tempat &amp; Tanggal
                                            Lahir</span></p>
                                        </td>
                                <td colspan="4"
                                    style="width:418.25pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:18pt;"><span
                                            style="font-size:12pt;">{{$mahasiswa->tempat_lahir}},
                                            {{date("d ",strtotime($mahasiswa->tanggal_lahir ?? ''))}}
                                            {{$monthList[date("M",strtotime(($mahasiswa->tanggal_lahir ?? '')))]}}
                                            {{date(" Y",strtotime($mahasiswa->tanggal_lahir ?? ''))}}</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3"
                                    style="width:121.35pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:18pt;"><span
                                    style="font-size:12pt; vertical-align:3pt;">No. Kartu Mahasiswa</span></p>
                                </td>
                                <td colspan="4"
                                    style="width:418.25pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:18pt;"><span
                                            style="font-size:12pt; vertical-align:3pt;">{{$mahasiswa->no_karmas}}</span>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3"
                                style="width:121.35pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:18pt;"><span
                                            style="font-size:12pt; vertical-align:3pt;">No. Ijazah S1, S2 dan S3</span>
                                        </p>
                                </td>
                                <td colspan="4"
                                    style="width:418.25pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:150%; font-size:12pt;">No
                                        Ijazah S1: {{$mahasiswa->s1}}</p>
                                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:150%; font-size:12pt;">No
                                        Ijazah S2 : {{$mahasiswa->s2}}</p>
                                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:150%; font-size:12pt;">No
                                        Ijazah S3 : {{$mahasiswa->s3}}</p>
                                    </td>
                            </tr>
                            <tr>
                                <td colspan="3"
                                    style="width:121.35pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:18pt;"><span
                                            style="font-size:12pt; vertical-align:3pt;">Jurusan&nbsp;</span><strong><span
                                            style="font-size:12pt; vertical-align:3pt;">/&nbsp;</span></strong><span
                                            style="font-size:12pt; vertical-align:3pt;">Program Studi</span></p>
                                </td>
                                <td colspan="4"
                                    style="width:418.25pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:18pt;"><span
                                            style="font-size:12pt; vertical-align:3pt;">{{$mahasiswa->prodi}}</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td
                                    style="width:60.15pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:18pt;"><span
                                            style="font-size:12pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td colspan="4"
                                    style="width:263.1pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:18pt;"><span
                                            style="font-size:12pt; vertical-align:3pt;">R u m a h</span></p>
                                </td>
                                <td colspan="2"
                                    style="width:205.65pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:18pt;"><span
                                            style="font-size:12pt; vertical-align:3pt;">Lembaga / Institusi
                                            Profesi</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td rowspan="4"
                                    style="width:60.15pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:18pt;"><span
                                            style="font-size:12pt; vertical-align:3pt;">Alamat</span></p>
                                </td>
                                <td colspan="4" rowspan="3"
                                    style="width:263.1pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:18pt;"><span
                                            style="font-size:12pt;">{{$mahasiswa->alamat_rumah}}</span></p>
                                </td>
                                <td colspan="3"
                                    style="width:308.25pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p
                                    style="margin-top:0pt; margin-left:101.15pt; margin-bottom:0pt; text-indent:-101.15pt; line-height:18pt;">
                                        <span style="font-size:12pt; vertical-align:3pt;">Nama Lembaga</span><span
                                        style="font-size:12pt; vertical-align:3pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
                                            style="font-size:12pt; vertical-align:3pt;">:{{$mahasiswa->nama_lembaga}}</span>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3"
                                style="width:308.25pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:18pt;"><span
                                            style="font-size:12pt; vertical-align:3pt;">Jabatan di Lembaga :
                                            {{$mahasiswa->jabatan_di_lembaga}}</span></p>
                                        </td>
                            </tr>
                            <tr style="height:3.25pt;">
                                <td colspan="3"
                                    style="width:308.25pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:18pt;"><span
                                            style="font-size:12pt; vertical-align:3pt;">&nbsp;</span></p>
                                        </td>
                            </tr>
                            <tr style="height:29.65pt;">
                                <td colspan="3"
                                    style="width:114.8pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:18pt;"><span
                                    style="font-size:12pt; vertical-align:3pt;">Kota :
                                            {{$mahasiswa->kota_rumah}}</span></p>
                                        </td>
                                <td
                                    style="width:137.6pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:18pt;"><span
                                            style="font-size:12pt; vertical-align:3pt;">Kode Pos :
                                            {{$mahasiswa->pos_rumah}}</span></p>
                                        </td>
                                <td
                                    style="width:149.55pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:18pt;"><span
                                            style="font-size:12pt; vertical-align:3pt;">Kota :
                                            {{$mahasiswa->kota_lembaga}}</span></p>
                                        </td>
                                <td colspan="2"
                                    style="width:148pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:18pt;"><span
                                            style="font-size:12pt; vertical-align:3pt;">Kode Pos :
                                            {{$mahasiswa->pos_lembaga}}</span></p>
                                        </td>
                            </tr>
                            <tr>
                                <td
                                    style="width:60.15pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:18pt;"><span
                                    style="font-size:12pt; vertical-align:3pt;">Komunikasi</span></p>
                                </td>
                                <td colspan="3"
                                    style="width:114.8pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:18pt;"><span
                                            style="font-size:12pt; vertical-align:3pt;">Telepon :</span></p>
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:18pt;">
                                        <span
                                            style="font-size:12pt; vertical-align:3pt;">{{$mahasiswa->telepon_rumah}}</span>
                                    </p>
                                </td>
                                <td
                                    style="width:137.6pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:18pt;"><span
                                            style="font-size:12pt; vertical-align:3pt;">Faksimil :
                                            {{$mahasiswa->fax_pribadi}}</span></p>
                                </td>
                                <td
                                    style="width:149.55pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:18pt;"><span
                                            style="font-size:12pt; vertical-align:3pt;">Telepon:
                                            {{$mahasiswa->telepon_kantor}}</span></p>
                                </td>
                                <td colspan="2"
                                    style="width:148pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:18pt;"><span
                                            style="font-size:12pt; vertical-align:3pt;">Faksimili :
                                            {{$mahasiswa->fax_kantor}}</span>
                                        </p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"
                                    style="width:115.1pt; border-style:solid; border-width:0.75pt; padding-right:2.33pt; padding-left:2.33pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:18pt;"><span
                                    style="font-size:12pt; vertical-align:3pt;">HP :
                                            {{$mahasiswa->no_telp}}</span></p>
                                </td>
                                <td colspan="3"
                                    style="width:218.75pt; border-style:solid; border-width:0.75pt; padding-right:2.33pt; padding-left:2.33pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:18pt;"><span
                                            style="font-size:12pt; vertical-align:3pt;">E-mail pribadi :
                                            {{$mahasiswa->email_pribadi}}</span></p>
                                </td>
                                <td colspan="3"
                                    style="width:313.55pt; border-style:solid; border-width:0.75pt; padding-right:2.33pt; padding-left:2.33pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:18pt;"><span
                                    style="font-size:12pt; vertical-align:3pt;">E-Mail kantor :
                                            {{$mahasiswa->email_kantor}}</span></p>
                                </td>
                            </tr>
                            <tr style="height:0pt;">
                                <td style="width:70.85pt;"><br></td>
                                <td style="width:49.65pt;"><br></td>
                                <td style="width:11.55pt;"><br></td>
                                <td style="width:64.3pt;"><br></td>
                                <td style="width:148.3pt;"><br></td>
                                <td style="width:160.25pt;"><br></td>
                                <td style="width:56.1pt;"><br></td>
                                <td style="width:102.6pt;"><br></td>
                            </tr>
                        </tbody>
                    </table>
                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:18pt;"><strong><span
                                style="vertical-align:3pt;">&nbsp;</span></strong></p>
                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:18pt;"><strong><span
                                style="vertical-align:3pt;">&nbsp;</span></strong></p>
                                <p style="margin-top:0pt; margin-bottom:0pt; line-height:18pt;"><strong><span
                                style="vertical-align:3pt;">&nbsp;</span></strong></p>
                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:18pt;"><strong><span
                                style="vertical-align:3pt;">&nbsp;</span></strong></p>
                                <p style="margin-top:0pt; margin-bottom:0pt; line-height:18pt;"><strong><span
                                style="vertical-align:3pt;">&nbsp;</span></strong></p>
                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:18pt;"><strong><span
                                style="vertical-align:3pt;">&nbsp;</span></strong></p>
                                <p style="margin-top:0pt; margin-bottom:0pt; line-height:18pt;"><strong><span
                                style="vertical-align:3pt;">&nbsp;</span></strong></p>

                    <!-- Bagian END Profil -->

                    <!-- -------- -->
                    <!-- PART 2.1 -->
                    <!-- -------- -->

                    <h1
                    style="margin-top:0pt; margin-left:14.2pt; margin-bottom:0pt; text-indent:-14.2pt; text-align:justify; line-height:18pt;">
                        <span style="font-size:14pt; vertical-align:3pt;">2.</span><span
                            style="width:3.7pt; font:7pt 'Times New Roman'; display:inline-block;">&nbsp;&nbsp;&nbsp;</span><span
                            style="font-size:14pt; vertical-align:3pt;">Pendidikan Formal (Total Bobot&nbsp;</span><a
                            name="_cmntref1"><span style="font-size:14pt; vertical-align:3pt;">20</span></a><span
                            style="font-size:14pt; vertical-align:3pt;">%)</span></h1>
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:8pt;">&nbsp;</p>
                    <h2
                    style="margin-top:0pt; margin-left:42.55pt; margin-bottom:0pt; text-indent:-28.35pt; page-break-after:avoid; font-size:14pt;">
                        2.1.<span
                            style="width:7.35pt; font:7pt 'Times New Roman'; display:inline-block;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            Pendidikan Strata satu dan strata lanjut.<span
                            style="width:4.26pt; text-indent:0pt; display:inline-block;">&nbsp;</span><span
                            style="width:36pt; text-indent:0pt; display:inline-block;">&nbsp;</span><span
                            style="width:36pt; text-indent:0pt; display:inline-block;">&nbsp;</span><span
                            style="width:36pt; text-indent:0pt; display:inline-block;">&nbsp;</span><span
                            style="width:36pt; text-indent:0pt; display:inline-block;">&nbsp;</span><span
                            style="width:36pt; text-indent:0pt; display:inline-block;">&nbsp;</span><span
                            style="width:36pt; text-indent:0pt; display:inline-block;">&nbsp;</span><span
                            style="width:36pt; text-indent:0pt; display:inline-block;">&nbsp;</span><span
                            style="width:36pt; text-indent:0pt; display:inline-block;">&nbsp;</span><span
                            style="width:36pt; text-indent:0pt; display:inline-block;">&nbsp;</span></h2>
                    <br>
                    <table cellpadding="0" cellspacing="0" style="margin-left:0.15pt; border-collapse:collapse;">
                        <tbody>
                            <tr style="height:17pt;">
                                <td rowspan="2"
                                    style="width:17.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                                        <span style="vertical-align:3pt;">No.</span></p>
                                </td>
                                <td rowspan="2"
                                    style="width:66.85pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                                        <span style="vertical-align:3pt;">Gelar Yang Diperoleh dan Bulan/Tahun
                                            Kelulusan</span></p>
                                </td>
                                <td rowspan="2"
                                    style="width:53.05pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                                        <span style="vertical-align:3pt;">Jurusan/ Bidang</span></p>
                                </td>
                                <td rowspan="2"
                                    style="width:131.05pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                                        <span style="vertical-align:3pt;">Nama &amp; Alamat&nbsp;</span></p>
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                                        <span style="vertical-align:3pt;">Perguruan Tinggi</span></p>
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                                        <span style="vertical-align:3pt;">(No. Telpon, Fax, E-mail)</span></p>
                                </td>
                                <td rowspan="2"
                                    style="width:31.85pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                                        <span style="vertical-align:3pt;">Jumlah SKS</span></p>
                                </td>
                                <td rowspan="2"
                                    style="width:102.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                                        <span style="vertical-align:3pt;">Judul Tugas Akhir</span></p>
                                </td>
                                <td rowspan="2"
                                    style="width:82.5pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                                        <span style="vertical-align:3pt;">Nama Pembimbing dan Alamat (jika ada)</span>
                                    </p>
                                </td>
                                <td colspan="3"
                                    style="width:101.5pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle; background-color:#cccccc;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                                        <span style="font-family:Tahoma; vertical-align:3pt;">Diisi oleh Tim **** PT.
                                            &hellip;.</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle; background-color:#cccccc;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                                        <span style="font-family:Tahoma; vertical-align:3pt;">A</span></p>
                                </td>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle; background-color:#cccccc;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                                        <span style="font-family:Tahoma; vertical-align:3pt;">B</span></p>
                                </td>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle; background-color:#cccccc;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                                        <span style="font-family:Tahoma; vertical-align:3pt;">C</span></p>
                                </td>
                            </tr>
                            @if(($duaA ?? '') != null)
                            @foreach ($duaA as $row)
                            <tr>
                                <td
                                    style="width:17.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p
                                        style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:115%; font-size:12pt;">
                                        <span style="vertical-align:3pt;">{{ $no++}}</span></p>
                                </td>
                                <td
                                    style="width:66.85pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:12pt;">{{ $row->gelar_tahun}}
                                    </p>
                                </td>
                                <td
                                    style="width:53.05pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:12pt;">{{ $row->jurusan}}</p>
                                </td>
                                <td
                                    style="width:131.05pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:12pt;">
                                        <span style="vertical-align:3pt;">{{ $row->nama_alamat_telp}}</span>
                                    </p>
                                </td>
                                <td
                                    style="width:31.85pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:12pt;">
                                        <span style="vertical-align:3pt;">{{ $row->sks }}</span></p>
                                </td>
                                <td
                                    style="width:102.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:12pt;">
                                        {{$row->judul_skripsi}}</p>
                                </td>
                                <td
                                    style="width:82.5pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:12pt;">{{ $row->nama_pem }}
                                    </p>
                                </td>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p
                                        style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:115%; font-size:12pt;">
                                        <span style="vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:18pt;">
                                        <span style="font-size:11pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:18pt;">
                                        <span style="font-size:11pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                            </tr>
                            @endforeach
                            @endif
                            <tr style="height:21.7pt;">
                                <td
                                    style="width:17.7pt; border-top-style:solid; border-top-width:0.75pt; padding-right:5.35pt; padding-left:5.35pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:18pt;">
                                        <span style="font-size:11pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:66.85pt; border-top-style:solid; border-top-width:0.75pt; padding-right:5.35pt; padding-left:5.35pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:18pt;">
                                        <span style="font-size:11pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:53.05pt; border-top-style:solid; border-top-width:0.75pt; padding-right:5.35pt; padding-left:5.35pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:18pt;">
                                        <span style="font-size:11pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:131.05pt; border-top-style:solid; border-top-width:0.75pt; padding-right:5.35pt; padding-left:5.35pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:18pt;">
                                        <span style="font-size:11pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:31.85pt; border-top-style:solid; border-top-width:0.75pt; padding-right:5.35pt; padding-left:5.35pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:18pt;">
                                        <span style="font-size:11pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:102.7pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; padding-right:4.97pt; padding-left:5.35pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:18pt;">
                                        <span style="font-size:11pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:82.5pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:18pt;">
                                        <span style="font-size:12pt; vertical-align:3pt;">Jumlah</span></p>
                                </td>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:18pt;">
                                        <span style="font-size:11pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:18pt;">
                                        <span style="font-size:11pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:18pt;">
                                        <span style="font-size:11pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:8pt;"><span
                            style="width:54pt; display:inline-block;">&nbsp;</span><span
                            style="width:18pt; display:inline-block;">&nbsp;</span><span
                            style="width:36pt; display:inline-block;">&nbsp;</span><span
                            style="width:36pt; display:inline-block;">&nbsp;</span><span
                            style="width:36pt; display:inline-block;">&nbsp;</span><span
                            style="width:36pt; display:inline-block;">&nbsp;</span><span
                            style="width:36pt; display:inline-block;">&nbsp;</span><span
                            style="width:36pt; display:inline-block;">&nbsp;</span></p>
                    <p style="margin-top:0pt; margin-bottom:0pt;"><strong>Kelengkapan (ditunjukan)</strong><span
                            style="width:5.37pt; display:inline-block;">&nbsp;</span><strong>: - Ijazah (ada/tidak);
                            Transkrip akademik</strong></p>

                    <!-- Bagian END PART 2.1 -->

                    <!-- -------- -->
                    <!-- PART 2.2 -->
                    <!-- -------- -->

                    <br>
                    <h2
                        style="margin-top:0pt; margin-left:42.55pt; margin-bottom:0pt; text-indent:-28.35pt; page-break-after:avoid; font-size:14pt;">
                        2.2.<span
                            style="width:7.35pt; font:7pt 'Times New Roman'; display:inline-block;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                        Pendidikan <a name="_cmntref2">Singkat</a></h2>
                    <p style="margin-top:0pt; margin-bottom:0pt;">&nbsp;</p>
                    <table cellpadding="0" cellspacing="0"
                        style="width:678.2pt; margin-left:0.15pt; border-collapse:collapse;">
                        <tbody>
                            <tr style="height:17pt;">
                                <td rowspan="3"
                                    style="width:17.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">No.</span></p>
                                </td>
                                <td rowspan="3"
                                    style="width:102.25pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">Jenis Pendidikan Singkat</span></p>
                                </td>
                                <td rowspan="3"
                                    style="width:81.45pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">Waktu Pelaksanaan</span></p>
                                </td>
                                <td rowspan="3"
                                    style="width:81.45pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">Nama & Alamat
                                            Penyelenggara
                                            (No. Telpon, Fax, E-mail)</span></p>
                                </td>
                                <td rowspan="3"
                                    style="width:173.55pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">Materi Pendidikan</span></p>
                                </td>
                                <td rowspan="3"
                                    style="width:53.1pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">Lamanya Pendidikan</span></p>
                                </td>
                                <td colspan="3"
                                    style="width:93.05pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle; background-color:#cccccc;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">Diisi oleh Tim Ahli PT. &hellip;.</span></p>
                                </td>
                            </tr>
                            <tr style="height:17pt;">
                                <td colspan="3"
                                    style="width:93.05pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle; background-color:#cccccc;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td
                                    style="width:23.85pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle; background-color:#cccccc;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">A</span></p>
                                </td>
                                <td
                                    style="width:23.9pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle; background-color:#cccccc;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">B</span></p>
                                </td>
                                <td
                                    style="width:23.9pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle; background-color:#cccccc;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">C</span></p>
                                </td>
                            </tr>
                            @if(($duaB ?? '') != null)
                            @foreach ($duaB as $row)
                            <tr>
                                <td
                                    style="width:17.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:18pt;">
                                        <span style="font-size:12pt; vertical-align:3pt;">{{$no++}}</span></p>
                                </td>
                                <td
                                    style="width:102.25pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:12pt;">
                                        <span style="vertical-align:3pt;">{{$row->jenis_pendidikan}}&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:81.45pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:12pt;">
                                        <span style="vertical-align:3pt;">{{$row->waktu}}</span></p>
                                </td>
                                <td
                                    style="width:81.45pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:12pt;">
                                        <span style="vertical-align:3pt;">{{$row->nama_alamat_telp}}</span></p>
                                </td>
                                <td
                                    style="width:173.55pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:12pt;">
                                        <span style="vertical-align:3pt;">{{$row->materi}}</span></p>
                                </td>
                                <td
                                    style="width:53.1pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p
                                        style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:115%; font-size:12pt;">
                                        <span style="vertical-align:3pt;">{{$row->lamanya}}</span></p>
                                </td>
                                <td
                                    style="width:23.85pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:18pt;">
                                        <span style="font-size:12pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:23.9pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:18pt;">
                                        <span style="font-size:12pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:23.9pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:18pt;">
                                        <span style="font-size:12pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                            </tr>
                            @endforeach
                            @endif
                            <tr>
                                <td
                                    style="width:17.7pt; border-top-style:solid; border-top-width:0.75pt; padding-right:5.35pt; padding-left:5.35pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:18pt;">
                                        <span style="font-size:12pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:102.25pt; border-top-style:solid; border-top-width:0.75pt; padding-right:5.35pt; padding-left:5.35pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:12pt;">
                                        <span style="vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:81.45pt; border-top-style:solid; border-top-width:0.75pt; padding-right:5.35pt; padding-left:5.35pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:12pt;">
                                        <span style="vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:81.45pt; border-top-style:solid; border-top-width:0.75pt; padding-right:5.35pt; padding-left:5.35pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:12pt;">
                                        <span style="vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:173.55pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; padding-right:4.97pt; padding-left:5.35pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:12pt;">
                                        <span style="vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:53.1pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:12pt;">
                                        <span style="vertical-align:3pt;">Jumlah</span></p>
                                </td>
                                <td
                                    style="width:23.85pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:18pt;">
                                        <span style="font-size:12pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:23.9pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:18pt;">
                                        <span style="font-size:12pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:23.9pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:18pt;">
                                        <span style="font-size:12pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:8pt;"><span
                            style="width:54pt; display:inline-block;">&nbsp;</span><span
                            style="width:18pt; display:inline-block;">&nbsp;</span><span
                            style="width:36pt; display:inline-block;">&nbsp;</span><span
                            style="width:36pt; display:inline-block;">&nbsp;</span><span
                            style="width:36pt; display:inline-block;">&nbsp;</span><span
                            style="width:36pt; display:inline-block;">&nbsp;</span><span
                            style="width:36pt; display:inline-block;">&nbsp;</span><span
                            style="width:36pt; display:inline-block;">&nbsp;</span></p>
                    <p style="margin-top:0pt; margin-bottom:0pt;"><strong>Kelengkapan (ditunjukan)</strong><span
                            style="width:5.37pt; display:inline-block;">&nbsp;</span><strong>: - Jadwal Pendidikan
                            singkat dan silabus (ada/tidak)</strong></p>
                    <ul style="margin:0pt; padding-left:0pt;" type="disc">
                        <li style="text-indent:148.85pt; font-family:serif; list-style-position:inside;"><strong><span
                                    style="font-family:'Times New Roman';">Setifikat lulus atau surat keterangan telah
                                    menyelesaikan kegiatan pendidikan dengan baik</span></strong></li>
                    </ul>
                    <p style="margin-top:0pt; margin-bottom:0pt;">&nbsp;</p>

                    <!-- Bagian END PART 2.2 -->

                    <!-- -------- -->
                    <!-- PART 2.3 -->
                    <!-- -------- -->

                    <h2
                        style="margin-top:0pt; margin-left:42.55pt; margin-bottom:0pt; text-indent:-28.35pt; page-break-after:avoid; font-size:14pt;">
                        2.3.<span
                            style="width:7.35pt; font:7pt 'Times New Roman'; display:inline-block;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                        Pendidikan / Pelatihan Kerja Formal.
                    </h2>
                    <p style="margin-top:0pt; margin-bottom:0pt;">&nbsp;</p>
                    <table cellpadding="0" cellspacing="0"
                        style="width:682.7pt; margin-left:0.15pt; border-collapse:collapse;">
                        <tbody>
                            <tr style="height:17pt;">
                                <td rowspan="2"
                                    style="width:17.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                                        <span style="vertical-align:3pt;">No.</span></p>
                                </td>
                                <td rowspan="2"
                                    style="width:137.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                                        <span style="vertical-align:3pt;">Jenis Pendidikan / Pelatihan Kerja
                                            Formal&nbsp;</span></p>
                                </td>
                                <td rowspan="2"
                                    style="width:53.1pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                                        <span style="vertical-align:3pt;">Waktu Pelaksanaan</span></p>
                                </td>
                                <td rowspan="2"
                                    style="width:95.6pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                                        <span style="vertical-align:3pt;">Nama &amp; Alamat&nbsp;</span></p>
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                                        <span style="vertical-align:3pt;">Penyelenggara</span></p>
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                                        <span style="vertical-align:3pt;">(No. Telpon, Fax, E-mail)</span></p>
                                </td>
                                <td rowspan="2"
                                    style="width:138.15pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                                        <span style="vertical-align:3pt;">Materi Pendidikan / Pelatihan Kerja
                                            Formal</span></p>
                                </td>
                                <td rowspan="2"
                                    style="width:63.3pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                                        <span style="vertical-align:3pt;">Lamanya Pendidikan / Pelatihan Kerja</span>
                                    </p>
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                                        <span style="vertical-align:3pt;">(jam)&nbsp;</span></p>
                                </td>
                                <td colspan="3"
                                    style="width:101.5pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle; background-color:#cccccc;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                                        <span style="font-family:Tahoma; vertical-align:3pt;">Diisi oleh Tim Ahli PT.
                                            &hellip;.</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle; background-color:#cccccc;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                                        <span style="font-family:Tahoma; vertical-align:3pt;">A</span></p>
                                </td>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle; background-color:#cccccc;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                                        <span style="font-family:Tahoma; vertical-align:3pt;">B</span></p>
                                </td>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle; background-color:#cccccc;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                                        <span style="font-family:Tahoma; vertical-align:3pt;">C</span></p>
                                </td>
                            </tr>
                            @if(($duaC ?? '') != null)
                            @foreach ($duaC as $row)
                            <tr>
                                <td
                                    style="width:17.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:18pt;">
                                        <span style="font-size:11pt; vertical-align:3pt;">{{$no++}}</span></p>
                                </td>
                                <td
                                    style="width:137.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p
                                        style="margin-top:0pt; margin-bottom:0pt; line-height:115%; widows:0; orphans:0; font-size:12pt;">
                                        {{$row->jenis_pendidikan}}</p>
                                </td>
                                <td
                                    style="width:53.1pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p
                                        style="margin-top:0pt; margin-left:2.1pt; margin-bottom:0pt; line-height:115%; widows:0; orphans:0; font-size:12pt;">
                                        {{$row->waktu}}</p>
                                </td>
                                <td
                                    style="width:95.6pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p
                                        style="margin-top:0pt; margin-left:5pt; margin-bottom:0pt; line-height:115%; widows:0; orphans:0; font-size:12pt;">
                                        {{$row->nama_alamat_telp}}</p>
                                </td>
                                <td
                                    style="width:138.15pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <ul style="margin:0pt; padding-left:0pt;" type="disc">
                                        <li
                                            style="margin-left:10.52pt; line-height:115%; widows:0; orphans:0; padding-left:0.38pt; font-family:serif; font-size:12pt;">
                                            <span style="font-family:'Times New Roman';">{{$row->materi}}</span></li>
                                    </ul>
                                </td>
                                <td
                                    style="width:63.3pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p
                                        style="margin-top:0pt; margin-right:21.3pt; margin-bottom:0pt; line-height:115%; widows:0; orphans:0; font-size:12pt;">
                                        {{$row->lamanya}}</p>
                                </td>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:18pt;">
                                        <span style="font-size:11pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:18pt;">
                                        <span style="font-size:11pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:18pt;">
                                        <span style="font-size:11pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                            </tr>
                            @endforeach
                            @endif
                            <tr style="height:19.9pt;">
                                <td
                                    style="width:17.7pt; border-top-style:solid; border-top-width:0.75pt; padding-right:5.35pt; padding-left:5.35pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:18pt;"><span
                                            style="font-size:11pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:137.7pt; border-top-style:solid; border-top-width:0.75pt; padding-right:5.35pt; padding-left:5.35pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:18pt;"><span
                                            style="font-size:11pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:53.1pt; border-top-style:solid; border-top-width:0.75pt; padding-right:5.35pt; padding-left:5.35pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:18pt;"><span
                                            style="font-size:11pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:95.6pt; border-top-style:solid; border-top-width:0.75pt; padding-right:5.35pt; padding-left:5.35pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:18pt;"><span
                                            style="font-size:11pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:138.15pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; padding-right:4.97pt; padding-left:5.35pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:18pt;"><span
                                            style="font-size:11pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:63.3pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:18pt;">
                                        <span style="font-size:12pt; vertical-align:3pt;">Jumlah</span></p>
                                </td>
                                <td colspan="3"
                                    style="width:101.5pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:18pt;">
                                        <span style="font-size:11pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <p style="margin-top:0pt; margin-bottom:0pt;">Kelengkapan (ditunjukan): -<span
                            style="width:8.04pt; display:inline-block;">&nbsp;</span>Jadwal Pelatihan Kerja Formal dan
                        Silabusnya (ada / tidak)</p>
                    <p style="margin-top:0pt; margin-bottom:0pt;"><span
                            style="width:56.1pt; display:inline-block;">&nbsp;</span><span
                            style="width:9.35pt; display:inline-block;">&nbsp;</span>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        -<span style="width:8.55pt; display:inline-block;">&nbsp;</span>Sertifikat Lulus atau Surat
                        Keterangan telah menyelesaikan Kegiatan Pelatihan dengan baik</p>
                    <p style="margin-top:0pt; margin-bottom:0pt;">&nbsp;</p>

                    <!-- -------- -->
                    <!-- PART 3.1 -->
                    <!-- -------- -->
                    
                    <h1
                        style="margin-top:0pt; margin-left:14.2pt; margin-bottom:0pt; text-indent:-14.2pt; text-align:justify; line-height:18pt;">
                        <span style="font-size:14pt; vertical-align:3pt;">3.</span><span
                            style="width:3.7pt; font:7pt 'Times New Roman'; display:inline-block;">&nbsp;&nbsp;&nbsp;</span><span
                            style="font-size:14pt; vertical-align:3pt;">Pendidikan nonformal atau Informal (Total Bobot
                            10%)</span></h1>
                    <h2
                        style="margin-top:0pt; margin-left:42.55pt; margin-bottom:0pt; text-indent:-28.35pt; page-break-after:avoid; font-size:14pt;">
                        3.1.<span
                            style="width:7.35pt; font:7pt 'Times New Roman'; display:inline-block;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                        <a name="_cmntref4">Pembelajaran</a> Mandiri.</h2>
                    <p style="margin-top:0pt; margin-bottom:0pt;">&nbsp;</p>
                    <table cellpadding="0" cellspacing="0"
                        style="width:673.55pt; margin-left:0.15pt; border-collapse:collapse;">
                        <tbody>
                            <tr style="height:17pt;">
                                <td rowspan="2"
                                    style="width:17.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">No.</span></p>
                                </td>
                                <td rowspan="2"
                                    style="width:66.85pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">Bentuk Kegiatan Pembelajaran Mandiri</span>
                                    </p>
                                </td>
                                <td rowspan="2"
                                    style="width:74.35pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p
                                        style="margin-top:0pt; margin-right:4.3pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">Waktu Pelaksanaan dan Lama Pelaksanaan</span>
                                    </p>
                                </td>
                                <td rowspan="2"
                                    style="width:131.05pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">Judul Kegiatan Pembelajaran Mandiri</span></p>
                                </td>
                                <td rowspan="2"
                                    style="width:109.75pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">Nama dan alamat Instruktur (No. Telpon, Fax,
                                            E-mail)</span></p>
                                </td>
                                <td rowspan="2"
                                    style="width:96.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">Daftar Bacaan</span></p>
                                </td>
                                <td colspan="3"
                                    style="width:101.5pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle; background-color:#cccccc;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">Diisi oleh Tim Ahli PT. &hellip;.</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle; background-color:#cccccc;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">A</span></p>
                                </td>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle; background-color:#cccccc;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">B</span></p>
                                </td>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle; background-color:#cccccc;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">C</span></p>
                                </td>
                            </tr>
                            
                            @if(($tigaA ?? '') != null)
                            @foreach ($tigaA as $row)
                            <tr>
                                <td
                                    style="width:17.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">
                                        <span style="vertical-align:3pt;">{{$no++}}</span></p>
                                </td>
                                <td
                                    style="width:66.85pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">
                                        <span style="vertical-align:3pt;">{{$row->bentuk_kegiatan}}</span></p>
                                </td>
                                <td
                                    style="width:74.35pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p
                                        style="margin-top:0pt; margin-right:4.3pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">
                                        <span style="vertical-align:3pt;">{{$row->waktu}}</span></p>
                                </td>
                                <td
                                    style="width:131.05pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">
                                        <span style="vertical-align:3pt;">{{$row->judul}}</span></p>
                                </td>
                                <td
                                    style="width:109.75pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">
                                        <span style="vertical-align:3pt;">{{$row->nama_alamat_telp}}</span></p>
                                </td>
                                <td
                                    style="width:96.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">
                                        <span style="vertical-align:3pt;">{{$row->daftar}}</span></p>
                                </td>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">
                                        <span style="vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">
                                        <span style="vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">
                                        <span style="vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                            </tr>
                            @endforeach
                            @endif
                            <tr style="height:22.1pt;">
                                <td
                                    style="width:17.7pt; border-top-style:solid; border-top-width:0.75pt; padding-right:5.35pt; padding-left:5.35pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">
                                        <span style="vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:66.85pt; border-top-style:solid; border-top-width:0.75pt; padding-right:5.35pt; padding-left:5.35pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">
                                        <span style="vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:74.35pt; border-top-style:solid; border-top-width:0.75pt; padding-right:5.35pt; padding-left:5.35pt; vertical-align:top;">
                                    <p
                                        style="margin-top:0pt; margin-right:4.3pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">
                                        <span style="vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:131.05pt; border-top-style:solid; border-top-width:0.75pt; padding-right:5.35pt; padding-left:5.35pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">
                                        <span style="vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:109.75pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; padding-right:4.97pt; padding-left:5.35pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">
                                        <span style="vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:96.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">Jumlah</span></p>
                                </td>
                                <td colspan="3"
                                    style="width:101.5pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">
                                        <span style="vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:8pt;"><span
                            style="width:54pt; display:inline-block;">&nbsp;</span><span
                            style="width:18pt; display:inline-block;">&nbsp;</span><span
                            style="width:36pt; display:inline-block;">&nbsp;</span><span
                            style="width:36pt; display:inline-block;">&nbsp;</span><span
                            style="width:36pt; display:inline-block;">&nbsp;</span><span
                            style="width:36pt; display:inline-block;">&nbsp;</span><span
                            style="width:36pt; display:inline-block;">&nbsp;</span><span
                            style="width:36pt; display:inline-block;">&nbsp;</span></p>
                    <p style="margin-top:0pt; margin-bottom:0pt;"><strong>Kelengkapan (ditunjukan)</strong><span
                            style="width:5.37pt; display:inline-block;">&nbsp;</span><strong>: - Extended abstract atau
                            Executive Summary</strong></p>
                    <p style="margin-top:0pt; margin-bottom:0pt;"><strong>&nbsp;</strong></p>
                    <p style="margin-top:0pt; margin-bottom:0pt;"><strong>&nbsp;</strong></p>

                    <!-- -------- -->
                    <!-- PART 3.2 -->
                    <!-- -------- -->

                    <h2
                        style="margin-top:0pt; margin-left:42.55pt; margin-bottom:0pt; text-indent:-28.35pt; page-break-after:avoid; font-size:14pt;">
                        3.2.<span
                            style="width:7.35pt; font:7pt 'Times New Roman'; display:inline-block;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><a
                            name="_cmntref5">Pembelajaran</a> Sehubungan Dengan Penugasan Kerja</h2>
                    <p style="margin-top:0pt; margin-bottom:0pt;">&nbsp;</p>
                    <table cellpadding="0" cellspacing="0"
                        style="width:672.5pt; margin-left:0.15pt; border-collapse:collapse;">
                        <tbody>
                            <tr style="height:17pt;">
                                <td rowspan="2"
                                    style="width:17.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                                        <span style="vertical-align:3pt;">No.</span></p>
                                </td>
                                <td rowspan="2"
                                    style="width:73.9pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                                        <span style="vertical-align:3pt;">Bentuk Kegiatan Pembelajaran sehubungan Dengan
                                            Penugasan Kerja</span></p>
                                </td>
                                <td rowspan="2"
                                    style="width:53.1pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                                        <span style="vertical-align:3pt;">waktu Pelaksanaan dan Lama Pelaksanaan</span>
                                    </p>
                                </td>
                                <td rowspan="2"
                                    style="width:180.65pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                                        <span style="vertical-align:3pt;">Judul Kegiatan pembelajaran Sehubungan Dengan
                                            penugasan Kerja</span></p>
                                </td>
                                <td rowspan="2"
                                    style="width:74.35pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                                        <span style="vertical-align:3pt;">Nama dan alamat Instruktur (No. Telpon, Fax,
                                            E-mail)</span></p>
                                </td>
                                <td rowspan="2"
                                    style="width:95.65pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                                        <span style="vertical-align:3pt;">Daftar Bacaan</span></p>
                                </td>
                                <td colspan="3"
                                    style="width:101.5pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle; background-color:#cccccc;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                                        <span style="font-family:Tahoma; vertical-align:3pt;">Diisi oleh Tim Ahli PT.
                                            &hellip;&hellip;.</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle; background-color:#cccccc;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                                        <span style="font-family:Tahoma; vertical-align:3pt;">A</span></p>
                                </td>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle; background-color:#cccccc;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                                        <span style="font-family:Tahoma; vertical-align:3pt;">B</span></p>
                                </td>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle; background-color:#cccccc;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                                        <span style="font-family:Tahoma; vertical-align:3pt;">C</span></p>
                                </td>
                            </tr>
                            @if(($tigaB ?? '') != null)
                            @foreach ($tigaB as $row)
                            <tr>
                                <td
                                    style="width:17.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:11pt;">
                                        <span style="vertical-align:3pt;">{{$no++}}</span></p>
                                </td>
                                <td
                                    style="width:73.9pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:12pt;"><span
                                            style="vertical-align:3pt;">{{$row->bentuk_kegiatan}}</span></p>
                                </td>
                                <td
                                    style="width:53.1pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; widows:0; orphans:0; font-size:12pt;">
                                        <span style="letter-spacing:0.1pt;">{{$row->waktu}}</span></p>
                                </td>
                                <td
                                    style="width:180.65pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <!-- <textarea disabled name="" id="" cols="30" rows="10">{{$row->judul}}</textarea> -->
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">
                                        <span style="vertical-align:3pt;">{{$row->judul}}</span></p>

                                </td>
                                <td
                                    style="width:74.35pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">
                                        <span style="vertical-align:3pt;">{{$row->nama_alamat_telp}}</span></p>
                                </td>
                                <td
                                    style="width:95.65pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">
                                        <span style="vertical-align:3pt;">{{$row->daftar}}</span></p>
                                </td>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:11pt;">
                                        <span style="vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:11pt;">
                                        <span style="vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:11pt;">
                                        <span style="vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                            </tr>
                            @endforeach
                            @endif
                            <tr>
                                <td
                                    style="width:17.7pt; border-top-style:solid; border-top-width:0.75pt; padding-right:5.35pt; padding-left:5.35pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:11pt;">
                                        <span style="vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:73.9pt; border-top-style:solid; border-top-width:0.75pt; padding-right:5.35pt; padding-left:5.35pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; widows:0; orphans:0; font-size:11pt;">
                                        <span style="letter-spacing:0.1pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:53.1pt; border-top-style:solid; border-top-width:0.75pt; padding-right:5.35pt; padding-left:5.35pt; vertical-align:top;">
                                    <p
                                        style="margin:0.75pt 4.85pt 0pt 5.15pt; text-align:center; widows:0; orphans:0; font-size:11pt;">
                                        &nbsp;</p>
                                </td>
                                <td
                                    style="width:180.65pt; border-top-style:solid; border-top-width:0.75pt; padding-right:5.35pt; padding-left:5.35pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">
                                        <span style="vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:74.35pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; padding-right:4.97pt; padding-left:5.35pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">
                                        <span style="vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:95.65pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">
                                        <span style="vertical-align:3pt;">Jumlah</span></p>
                                </td>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:11pt;">
                                        <span style="vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:11pt;">
                                        <span style="vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:11pt;">
                                        <span style="vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:8pt;"><span
                            style="width:54pt; display:inline-block;">&nbsp;</span><span
                            style="width:18pt; display:inline-block;">&nbsp;</span><span
                            style="width:36pt; display:inline-block;">&nbsp;</span><span
                            style="width:36pt; display:inline-block;">&nbsp;</span><span
                            style="width:36pt; display:inline-block;">&nbsp;</span><span
                            style="width:36pt; display:inline-block;">&nbsp;</span><span
                            style="width:36pt; display:inline-block;">&nbsp;</span><span
                            style="width:36pt; display:inline-block;">&nbsp;</span></p>
                    <p style="margin-top:0pt; margin-bottom:0pt;"><strong>Kelengkapan (ditunjukan)</strong><span
                            style="width:5.37pt; display:inline-block;">&nbsp;</span><strong>: - Extended abstrak atau
                            executive summary</strong></p>
                    <p style="margin-top:0pt; margin-bottom:0pt;">&nbsp;</p>

                    <!-- -------- -->
                    <!-- PART 4.1 -->
                    <!-- -------- -->
                    <h1
                        style="margin-top:0pt; margin-left:14.2pt; margin-bottom:0pt; text-indent:-14.2pt; text-align:justify; line-height:18pt;">
                        <span style="font-size:14pt; vertical-align:3pt;">4.</span><span
                            style="width:3.7pt; font:7pt 'Times New Roman'; display:inline-block;">&nbsp;&nbsp;&nbsp;</span><span
                            style="font-size:14pt; vertical-align:3pt;">Pengalaman Kerja Praktik
                            Keinsinyuran</span><span
                            style="width:30.55pt; text-indent:0pt; display:inline-block;">&nbsp;</span><span
                            style="font-size:14pt; vertical-align:3pt;">(Total Bobot 50%)</span></h1>
                    <h2
                        style="margin-top:0pt; margin-left:42.55pt; margin-bottom:0pt; text-indent:-28.35pt; page-break-after:avoid; font-size:14pt;">
                        4.1.<span
                            style="width:7.35pt; font:7pt 'Times New Roman'; display:inline-block;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><a
                            name="_cmntref6">Pengalaman</a> Praktik Keinsinyuran pada
                        lembaga / institusi formal (memiliki badan hukum)</h2>
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:14pt;"><strong>&nbsp;</strong></p>
                    <table cellpadding="0" cellspacing="0"
                        style="width:675.55pt; margin-left:0.15pt; border-collapse:collapse;">
                        <tbody>
                            <tr style="height:17pt;">
                                <td rowspan="2"
                                    style="width:17.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">No.</span></p>
                                </td>
                                <td rowspan="2"
                                    style="width:82.05pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">Jenis Praktik Bidang Keinsinyuran</span><span
                                            style="vertical-align:3pt;">&nbsp;&nbsp;</span></p>
                                </td>
                                <td rowspan="2"
                                    style="width:56.75pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">Waktu Pelaksanaan&nbsp;</span></p>
                                </td>
                                <td rowspan="2"
                                    style="width:142.3pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">Nama &amp; Alamat&nbsp;</span></p>
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">Penyelenggara</span></p>
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">(No. Telpon,</span><span
                                            style="vertical-align:3pt;">&nbsp;&nbsp;</span><span
                                            style="vertical-align:3pt;">Fax, E-mail)</span></p>
                                </td>
                                <td rowspan="2"
                                    style="width:88.3pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">Jabatan Formal</span></p>
                                </td>
                                <td rowspan="2"
                                    style="width:111.3pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">Uraian Tugas Keinsinyuran&nbsp;</span></p>
                                </td>
                                <td colspan="3"
                                    style="width:101.5pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle; background-color:#cccccc;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="font-family:Tahoma; vertical-align:3pt;">Diisi oleh Tim Ahli PT.
                                            &hellip;&hellip;.</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle; background-color:#cccccc;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="font-family:Tahoma; vertical-align:3pt;">A</span></p>
                                </td>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle; background-color:#cccccc;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="font-family:Tahoma; vertical-align:3pt;">B</span></p>
                                </td>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle; background-color:#cccccc;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="font-family:Tahoma; vertical-align:3pt;">C</span></p>
                                </td>
                            </tr>
                            @if(($empatA ?? '') != null)
                            @foreach ($empatA as $row)
                            <tr>
                                <td
                                    style="width:17.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:12pt;"><span
                                            style="vertical-align:3pt;">{{$no++}}</span></p>
                                </td>
                                <td
                                    style="width:82.05pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:12pt;"><span
                                            style="vertical-align:3pt;">{{$row->jenis_bidang}}</span></p>
                                </td>
                                <td
                                    style="width:56.75pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:12pt;"><span
                                            style="vertical-align:3pt;">{{$row->waktu}}</span></p>
                                </td>
                                <td
                                    style="width:142.3pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:12pt;"><span
                                            style="vertical-align:3pt;">{{$row->nama_alamat_telp}}</span></p>
                                </td>
                                <td
                                    style="width:88.3pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:12pt;"><span
                                            style="vertical-align:3pt;">{{$row->jabatan}}</span></p>
                                </td>
                                <td
                                    style="width:111.3pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-left:0.2pt; margin-bottom:0pt; font-size:12pt;">
                                        <span style="vertical-align:3pt;">{{$row->uraian}}</span></p>
                                </td>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="font-family:Tahoma; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="font-family:Tahoma; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="font-family:Tahoma; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                            </tr>
                            @endforeach
                            @endif
                            <tr style="height:19.9pt;">
                                <td
                                    style="width:17.7pt; padding-right:5.35pt; padding-left:5.35pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:18pt;"><span
                                            style="font-size:12pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:82.05pt; padding-right:5.35pt; padding-left:5.35pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:18pt;"><span
                                            style="font-size:12pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:56.75pt; padding-right:5.35pt; padding-left:5.35pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:18pt;"><span
                                            style="font-size:12pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:142.3pt; padding-right:5.35pt; padding-left:5.35pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:18pt;"><span
                                            style="font-size:12pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:88.3pt; border-right-style:solid; border-right-width:0.75pt; padding-right:4.97pt; padding-left:5.35pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:18pt;"><span
                                            style="font-size:12pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:111.3pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:18pt;">
                                        <span style="font-size:12pt; vertical-align:3pt;">Jumlah</span></p>
                                </td>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:18pt;">
                                        <span style="font-size:12pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:18pt;">
                                        <span style="font-size:12pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:18pt;">
                                        <span style="font-size:12pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:14pt;"><strong>&nbsp;</strong></p>
                    <p style="margin-top:0pt; margin-bottom:0pt;"><strong>Kelengkapan (ditunjukan)</strong><span
                            style="width:5.37pt; display:inline-block;">&nbsp;</span><strong>: - Surat keterangan telah
                            menyelesaikan praktik keinsinyuran dengan baik</strong></p>
                    <p style="margin-top:0pt; margin-bottom:0pt;"><strong>&nbsp;</strong></p>
                    <p style="margin-top:0pt; margin-bottom:0pt;">&nbsp;</p>
                    <ol style="margin:0pt; padding-left:0pt;" type="a">
                    <h2
                        style="margin-top:0pt; margin-left:42.55pt; margin-bottom:0pt; text-indent:-28.35pt; page-break-after:avoid; font-size:14pt;">
                        4.2.<span
                            style="width:7.35pt; font:7pt 'Times New Roman'; display:inline-block;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><a
                            name="_cmntref6">Pengalaman</a> Praktik Keinsinyuran pada
                        lembaga / institusi non-formal (tidak ada badan hukum)</h2>
                    </ol>
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:14pt;"><strong>&nbsp;</strong></p>
                    <table cellpadding="0" cellspacing="0"
                        style="width:675.55pt; margin-left:0.15pt; border-collapse:collapse;">
                        <tbody>
                            <tr style="height:17pt;">
                                <td rowspan="2"
                                    style="width:17.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                                        <span style="vertical-align:3pt;">No.</span></p>
                                </td>
                                <td rowspan="2"
                                    style="width:82.05pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                                        <span style="vertical-align:3pt;">Jenis Praktik Bidang Keinsinyuran</span><span
                                            style="vertical-align:3pt;">&nbsp;&nbsp;</span></p>
                                </td>
                                <td rowspan="2"
                                    style="width:56.75pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                                        <span style="vertical-align:3pt;">Waktu Pelaksanaan&nbsp;</span></p>
                                </td>
                                <td rowspan="2"
                                    style="width:142.3pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                                        <span style="vertical-align:3pt;">Nama &amp; Alamat&nbsp;</span></p>
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                                        <span style="vertical-align:3pt;">Penyelenggara</span></p>
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                                        <span style="vertical-align:3pt;">(No. Telpon,</span><span
                                            style="vertical-align:3pt;">&nbsp;&nbsp;</span><span
                                            style="vertical-align:3pt;">Fax, E-mail)</span></p>
                                </td>
                                <td rowspan="2"
                                    style="width:65.5pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                                        <span style="vertical-align:3pt;">Jabatan Formal</span></p>
                                </td>
                                <td rowspan="2"
                                    style="width:134.1pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                                        <span style="vertical-align:3pt;">Uraian Tugas Keinsinyuran&nbsp;</span></p>
                                </td>
                                <td colspan="3"
                                    style="width:101.5pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle; background-color:#cccccc;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                                        <span style="font-family:Tahoma; vertical-align:3pt;">Diisi oleh Tim **** PT.
                                            &hellip;&hellip;.</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle; background-color:#cccccc;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                                        <span style="font-family:Tahoma; vertical-align:3pt;">A</span></p>
                                </td>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle; background-color:#cccccc;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                                        <span style="font-family:Tahoma; vertical-align:3pt;">B</span></p>
                                </td>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle; background-color:#cccccc;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                                        <span style="font-family:Tahoma; vertical-align:3pt;">C</span></p>
                                </td>
                            </tr>
                            @if(($empatB ?? '') != null)
                            @foreach ($empatB as $row)
                            <tr>
                                <td
                                    style="width:17.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">
                                        <span style="vertical-align:3pt;">{{$no++}}</span></p>
                                </td>
                                <td
                                    style="width:82.05pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:12pt;">{{$row->jenis_bidang}}</p>
                                </td>
                                <td
                                    style="width:56.75pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:12pt;"><span
                                            style="vertical-align:3pt;">{{$row->waktu}}</span></p>
                                </td>
                                <td
                                    style="width:142.3pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:12pt;"><span
                                            style="vertical-align:3pt;">{{$row->nama_alamat_telp}}&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:65.5pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:12pt;"><span
                                            style="vertical-align:3pt;">{{$row->jabatan}}</span></p>
                                </td>
                                <td
                                    style="width:134.1pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:12pt;"><span
                                            style="vertical-align:3pt;">{{$row->uraian}}</span></p>
                                </td>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:18pt;">
                                        <span style="font-size:11pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:18pt;">
                                        <span style="font-size:11pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:18pt;">
                                        <span style="font-size:11pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                            </tr>
                            @endforeach
                            @endif
                            <tr style="height:19.9pt;">
                                <td
                                    style="width:17.7pt; border-top-style:solid; border-top-width:0.75pt; padding-right:5.35pt; padding-left:5.35pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:18pt;"><span
                                            style="font-size:11pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:82.05pt; border-top-style:solid; border-top-width:0.75pt; padding-right:5.35pt; padding-left:5.35pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:18pt;"><span
                                            style="font-size:11pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:56.75pt; border-top-style:solid; border-top-width:0.75pt; padding-right:5.35pt; padding-left:5.35pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:18pt;"><span
                                            style="font-size:11pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:142.3pt; border-top-style:solid; border-top-width:0.75pt; padding-right:5.35pt; padding-left:5.35pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:18pt;"><span
                                            style="font-size:11pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:65.5pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; padding-right:4.97pt; padding-left:5.35pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:18pt;"><span
                                            style="font-size:11pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:134.1pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:18pt;">
                                        <span style="font-size:12pt; vertical-align:3pt;">Jumlah</span></p>
                                </td>
                                <td colspan="3"
                                    style="width:101.5pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:18pt;">
                                        <span style="font-size:11pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:14pt;"><strong>&nbsp;</strong></p>
                    <p style="margin-top:0pt; margin-bottom:0pt;"><strong>Kelengkapan (ditunjukan)</strong><span
                            style="width:5.37pt; display:inline-block;">&nbsp;</span><strong>: - Surat keterangan telah
                            menyelesaikan praktik keinsinyuran dengan baik</strong></p>
                    <p style="margin-top:0pt; margin-bottom:0pt;">&nbsp;</p>
                    <p style="margin-top:0pt; margin-bottom:0pt;">&nbsp;</p>
                    <p style="margin-top:0pt; margin-bottom:0pt;">&nbsp;</p>

                    <!-- -------- -->
                    <!-- PART 5.1 -->
                    <!-- -------- -->
                    <h1
                        style="margin-top:0pt; margin-left:14.2pt; margin-bottom:0pt; text-indent:-14.2pt; text-align:justify; line-height:18pt;">
                        <span style="font-size:14pt; vertical-align:3pt;">5.</span><span
                            style="width:3.7pt; font:7pt 'Times New Roman'; display:inline-block;">&nbsp;&nbsp;&nbsp;</span><span
                            style="font-size:14pt; vertical-align:3pt;">Paparan dan Karya Tulis
                            Keinsinyuran.</span><span
                            style="width:35.95pt; text-indent:0pt; display:inline-block;">&nbsp;</span><span
                            style="font-size:14pt; vertical-align:3pt;">(Total Bobot 10%)</span></h1>
                    <h2
                        style="margin-top:0pt; margin-left:42.55pt; margin-bottom:0pt; text-indent:-28.35pt; page-break-after:avoid; font-size:14pt;">
                        5.1.<span
                            style="width:7.35pt; font:7pt 'Times New Roman'; display:inline-block;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>Paparan
                        <a name="_cmntref8">dan</a> Laporan Internal; Konsultasi; dan Inspeksi Pada Praktik keinsinyuran.</h2>
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:14pt;"><strong>&nbsp;</strong></p>
                    <table cellpadding="0" cellspacing="0"
                        style="width:673.55pt; margin-left:0.15pt; border-collapse:collapse;">
                        <tbody>
                            <tr style="height:17pt;">
                                <td rowspan="2"
                                    style="width:17.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">No.</span></p>
                                </td>
                                <td rowspan="2"
                                    style="width:73.9pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">Topik Paparan</span></p>
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">dan Laporan Teknis Internal</span></p>
                                </td>
                                <td rowspan="2"
                                    style="width:173.6pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">Judul Paparan&nbsp;</span></p>
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">dan Laporan Teknis Internal</span></p>
                                </td>
                                <td rowspan="2"
                                    style="width:88.5pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">Nama Lembaga Pemberi Tugas</span></p>
                                </td>
                                <td rowspan="2"
                                    style="width:60.2pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">Kedudukan di Dalam Paparan</span></p>
                                </td>
                                <td rowspan="2"
                                    style="width:82.5pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">Kedudukan di Dalam Penulisan Laporan
                                            Teknis</span></p>
                                </td>
                                <td colspan="3"
                                    style="width:101.5pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle; background-color:#cccccc;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="font-family:Tahoma; vertical-align:3pt;">***** oleh Tim Ahli PT.
                                            &hellip;..</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle; background-color:#cccccc;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="font-family:Tahoma; vertical-align:3pt;">A</span></p>
                                </td>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle; background-color:#cccccc;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="font-family:Tahoma; vertical-align:3pt;">B</span></p>
                                </td>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle; background-color:#cccccc;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="font-family:Tahoma; vertical-align:3pt;">C</span></p>
                                </td>
                            </tr>
                            @if(($limaA ?? '') != null)
                            @foreach ($limaA as $row)
                            <tr>
                                <td
                                    style="width:17.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:18pt;">
                                        <span style="font-size:12pt; vertical-align:3pt;">{{$no++}}</span></p>
                                </td>
                                <td
                                    style="width:73.9pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:18pt;">
                                        <span style="font-size:12pt; vertical-align:3pt;">{{$row->topik}}</span></p>
                                </td>
                                <td
                                    style="width:173.6pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:12pt;"><span
                                            style="vertical-align:3pt;">{{$row->judul}}</span></p>
                                </td>
                                <td
                                    style="width:88.5pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:18pt;">
                                        <span style="font-size:12pt; vertical-align:3pt;">{{$row->nama_lembaga}}</span></p>
                                </td>
                                <td
                                    style="width:60.2pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:18pt;">
                                        <span style="font-size:12pt; vertical-align:3pt;">{{$row->kedudukan}}</span></p>
                                </td>
                                <td
                                    style="width:82.5pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:18pt;">
                                        <span style="font-size:12pt; vertical-align:3pt;">{{$row->kedudukan_penulisan}}</span></p>
                                </td>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:18pt;">
                                        <span style="font-size:12pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:18pt;">
                                        <span style="font-size:12pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:18pt;">
                                        <span style="font-size:12pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                            </tr>
                            @endforeach
                            @endif
                            <tr style="height:19.35pt;">
                                <td
                                    style="width:17.7pt; border-top-style:solid; border-top-width:0.75pt; padding-right:5.35pt; padding-left:5.35pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:18pt;"><span
                                            style="font-size:12pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:73.9pt; border-top-style:solid; border-top-width:0.75pt; padding-right:5.35pt; padding-left:5.35pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:18pt;"><span
                                            style="font-size:12pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:173.6pt; border-top-style:solid; border-top-width:0.75pt; padding-right:5.35pt; padding-left:5.35pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:18pt;"><span
                                            style="font-size:12pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:88.5pt; border-top-style:solid; border-top-width:0.75pt; padding-right:5.35pt; padding-left:5.35pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:18pt;"><span
                                            style="font-size:12pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:60.2pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; padding-right:4.97pt; padding-left:5.35pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:18pt;"><span
                                            style="font-size:12pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:82.5pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:18pt;"><span
                                            style="font-size:12pt; vertical-align:3pt;">Jumlah</span></p>
                                </td>
                                <td colspan="3"
                                    style="width:101.5pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:18pt;"><span
                                            style="font-size:12pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <p style="margin-top:0pt; margin-bottom:0pt;">&nbsp;</p>
                    <p style="margin-top:0pt; margin-bottom:0pt;"><strong>Kelengkapan (ditunjukan)</strong><span
                            style="width:5.37pt; display:inline-block;">&nbsp;</span><strong>: - Surat keputusan
                            penugasan</strong></p>
                    <ul style="margin:0pt; padding-left:0pt;" type="disc">
                        <li style="text-indent:148.85pt; font-family:serif; list-style-position:inside;"><strong><span
                                    style="font-family:'Times New Roman';">Executive summary atau fotokopi laporan
                                    teknis</span></strong></li>
                    </ul>
                    <p style="margin-top:0pt; margin-bottom:0pt;">&nbsp;</p>
                    <p style="margin-top:0pt; margin-left:127.6pt; margin-bottom:0pt;">&nbsp;</p>

                    <!-- -------- -->
                    <!-- PART 5.2 -->
                    <!-- -------- -->
                    <h2
                        style="margin-top:0pt; margin-left:42.55pt; margin-bottom:0pt; text-indent:-28.35pt; page-break-after:avoid; font-size:14pt;">
                        5.2.<span
                            style="width:7.35pt; font:7pt 'Times New Roman'; display:inline-block;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>Paparan
                        Pada <a name="_cmntref9">Pertemuan</a> Teknis (Pemateri dalam pertemuan profesi
                        keinsinyuran)</h2>
                    <p style="margin-top:0pt; margin-left:72pt; margin-bottom:0pt; font-size:14pt;">
                        <strong>&nbsp;</strong></p>
                    <table cellpadding="0" cellspacing="0"
                        style="width:673.55pt; margin-left:0.15pt; border-collapse:collapse;">
                        <tbody>
                            <tr style="height:17pt;">
                                <td rowspan="2"
                                    style="width:17.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">No.</span></p>
                                </td>
                                <td rowspan="2"
                                    style="width:102.25pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">Topik Paparan Pada Pertemuan Teknis</span></p>
                                </td>
                                <td rowspan="2"
                                    style="width:237.4pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">Judul Paparan&nbsp;</span></p>
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">Pada Pertemuan Teknis</span></p>
                                </td>
                                <td rowspan="2"
                                    style="width:95.6pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">Nama Lembaga</span></p>
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">Pemberi Tugas</span></p>
                                </td>
                                <td rowspan="2"
                                    style="width:54.15pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">Kedudukan di&nbsp;</span></p>
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">Dalam Paparan</span></p>
                                </td>
                                <td colspan="3"
                                    style="width:101.5pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle; background-color:#cccccc;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">Diisi oleh Tim Ahli PT. &hellip;</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle; background-color:#cccccc;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">A</span></p>
                                </td>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle; background-color:#cccccc;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">B</span></p>
                                </td>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle; background-color:#cccccc;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">C</span></p>
                                </td>
                            </tr>
                            <!-- <tr>
                                <td
                                    style="width:17.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:12pt;"><span
                                            style="vertical-align:3pt;">1</span></p>
                                </td>
                                <td
                                    style="width:102.25pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:12pt;">Innovation in Polymer
                                        Science and Technology, Bali, November 28-December, 2011</p>
                                </td>
                                <td
                                    style="width:237.4pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:12pt;">The Influences of
                                        elastomer toward crystallization of poly(****** acid)</p>
                                </td>
                                <td
                                    style="width:95.6pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:12pt;">Himpunan polimer
                                        Indonesia (HPI)- Asian Polymer Association (APA)</p>
                                </td>
                                <td
                                    style="width:54.15pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:12pt;"><span
                                            style="vertical-align:3pt;">Pemateri</span></p>
                                </td>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:18pt;">
                                        <span style="font-size:12pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:18pt;">
                                        <span style="font-size:12pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:18pt;">
                                        <span style="font-size:12pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                            </tr> -->
                            <tr style="height:14.25pt;">
                                <td
                                    style="width:17.7pt; border-top-style:solid; border-top-width:0.75pt; padding-right:5.35pt; padding-left:5.35pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:18pt;"><span
                                            style="font-size:12pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:102.25pt; border-top-style:solid; border-top-width:0.75pt; padding-right:5.35pt; padding-left:5.35pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:18pt;"><span
                                            style="font-size:12pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:237.4pt; border-top-style:solid; border-top-width:0.75pt; padding-right:5.35pt; padding-left:5.35pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:18pt;"><span
                                            style="font-size:12pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:95.6pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; padding-right:4.97pt; padding-left:5.35pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:18pt;"><span
                                            style="font-size:12pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:54.15pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:18pt;"><span
                                            style="font-size:12pt; vertical-align:3pt;">Jumlah</span></p>
                                </td>
                                <td colspan="3"
                                    style="width:101.5pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:18pt;"><span
                                            style="font-size:12pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:14pt;"><strong>&nbsp;&nbsp;</strong></p>
                    <p style="margin-top:0pt; margin-bottom:0pt;"><strong>Kelengkapan (ditunjukan)</strong><span
                            style="width:5.37pt; display:inline-block;">&nbsp;</span><strong>: - Surat keputusan
                            penugasan</strong></p>
                    <ul style="margin:0pt; padding-left:0pt;" type="disc">
                        <li style="text-indent:148.85pt; font-family:serif; list-style-position:inside;"><strong><span
                                    style="font-family:'Times New Roman';">Sertifikat resmi/ucapan terima
                                    kasih</span></strong></li>
                    </ul>
                    <p style="margin-top:0pt; margin-bottom:0pt;">&nbsp;</p>

                    <!-- -------- -->
                    <!-- PART 5.3 -->
                    <!-- -------- -->
                    <h2
                        style="margin-top:0pt; margin-left:42.55pt; margin-bottom:0pt; text-indent:-28.35pt; page-break-after:avoid; font-size:14pt;">
                        5.3.<span
                            style="width:7.35pt; font:7pt 'Times New Roman'; display:inline-block;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>Penulisan
                        <a name="_cmntref10">Makalah</a> Untuk Pertemuan Profesi</h2>
                    <p style="margin-top:0pt; margin-bottom:0pt;">&nbsp;</p>
                    <table cellpadding="0" cellspacing="0"
                        style="width:673.55pt; margin-left:0.15pt; border-collapse:collapse;">
                        <tbody>
                            <tr style="height:17pt;">
                                <td rowspan="2"
                                    style="width:17.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">No.</span></p>
                                </td>
                                <td rowspan="2"
                                    style="width:173.15pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">Judul Makalah Pada Pertemuan Profesi</span>
                                    </p>
                                </td>
                                <td rowspan="2"
                                    style="width:67.25pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">Waktu dan Tempat Pertemuan Profesi</span></p>
                                </td>
                                <td rowspan="2"
                                    style="width:116.9pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">Nama Penyelenggara Pertemuan Profesi</span>
                                    </p>
                                </td>
                                <td rowspan="2"
                                    style="width:46pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">Jumlah Peserta Pertemuan Profesi</span></p>
                                </td>
                                <td rowspan="2"
                                    style="width:75.4pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">Jenis Pertemuan Profesi (Lokal, Nasional,
                                            Internasional)</span></p>
                                </td>
                                <td colspan="3"
                                    style="width:101.5pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle; background-color:#cccccc;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="font-family:Tahoma; vertical-align:3pt;">Diisi oleh Tim Ahli PT.
                                            &hellip;&hellip;</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle; background-color:#cccccc;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="font-family:Tahoma; vertical-align:3pt;">A</span></p>
                                </td>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle; background-color:#cccccc;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="font-family:Tahoma; vertical-align:3pt;">B</span></p>
                                </td>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle; background-color:#cccccc;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="font-family:Tahoma; vertical-align:3pt;">C</span></p>
                                </td>
                            </tr>
                            <!-- <tr>
                                <td
                                    style="width:17.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:12pt;"><span
                                            style="vertical-align:3pt;">1</span></p>
                                </td>
                                <td
                                    style="width:173.15pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:12pt;">The Effects of
                                        Molecular Weight of Poly Lactic Acid Matrix on Release Time of Smart Urea
                                        Fertilizer (SUF)</p>
                                </td>
                                <td
                                    style="width:67.25pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:12pt;">Hotel Alana,
                                        Surakarta, 9-11 Oktober 2018</p>
                                </td>
                                <td
                                    style="width:116.9pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:12pt;">ICIMECE 2017
                                        (International Conference on Industrial, Mechanical, and Chemical Engineering)
                                    </p>
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:12pt;">Universitas *******
                                        Maret</p>
                                </td>
                                <td
                                    style="width:46pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:12pt;"><span
                                            style="vertical-align:3pt;">200</span></p>
                                </td>
                                <td
                                    style="width:75.4pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:12pt;"><span
                                            style="vertical-align:3pt;">International</span></p>
                                </td>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:18pt;">
                                        <span style="font-size:12pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:18pt;">
                                        <span style="font-size:12pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:18pt;">
                                        <span style="font-size:12pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                            </tr> -->
                            <tr style="height:28.35pt;">
                                <td
                                    style="width:17.7pt; border-top-style:solid; border-top-width:0.75pt; padding-right:5.35pt; padding-left:5.35pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:18pt;">
                                        <span style="font-size:12pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:173.15pt; border-top-style:solid; border-top-width:0.75pt; padding-right:5.35pt; padding-left:5.35pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:18pt;">
                                        <span style="font-size:12pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:67.25pt; border-top-style:solid; border-top-width:0.75pt; padding-right:5.35pt; padding-left:5.35pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:18pt;">
                                        <span style="font-size:12pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:116.9pt; border-top-style:solid; border-top-width:0.75pt; padding-right:5.35pt; padding-left:5.35pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:18pt;">
                                        <span style="font-size:12pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:46pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; padding-right:4.97pt; padding-left:5.35pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:18pt;">
                                        <span style="font-size:12pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:75.4pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:18pt;">
                                        <span style="font-size:12pt; vertical-align:3pt;">Jumlah</span></p>
                                </td>
                                <td colspan="3"
                                    style="width:101.5pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:18pt;">
                                        <span style="font-size:12pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <p style="margin-top:0pt; margin-bottom:0pt;"><strong>Kelengkapan (ditunjukan)</strong><span
                            style="width:5.37pt; display:inline-block;">&nbsp;</span><strong>: - Cover dan Daftar isi
                            prosiding</strong></p>
                    <ul style="margin:0pt; padding-left:0pt;" type="disc">
                        <li style="text-indent:148.85pt; font-family:serif; list-style-position:inside;"><strong><span
                                    style="font-family:'Times New Roman';">Fotokopi judul dan abstratk
                                    makalah</span></strong></li>
                    </ul>
                    <p style="margin-top:0pt; margin-left:28.35pt; margin-bottom:0pt; font-size:14pt;">
                        <strong>&nbsp;</strong></p>

                    <!-- -------- -->
                    <!-- PART 5.4 -->
                    <!-- -------- -->
                    <h2
                        style="margin-top:0pt; margin-left:42.55pt; margin-bottom:0pt; text-indent:-28.35pt; page-break-after:avoid; font-size:14pt;">
                        5.4.<span
                            style="width:7.35pt; font:7pt 'Times New Roman'; display:inline-block;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>Pengajar
                        / <a name="_cmntref11">Pelatih</a> / Instruktur / Dosen Tamu
                        pada pembelajaran atau pelatihan keinsinyuran.</h2>
                    <p style="margin-top:0pt; margin-bottom:0pt;"><strong>&nbsp;</strong></p>
                    <table cellpadding="0" cellspacing="0"
                        style="width:673.55pt; margin-left:0.15pt; border-collapse:collapse;">
                        <tbody>
                            <tr style="height:17pt;">
                                <td rowspan="2"
                                    style="width:17.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">No.</span></p>
                                </td>
                                <td rowspan="2"
                                    style="width:119.45pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">Jenis Instruktur</span></p>
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">(Pengajar / Dosen Tamu/ Mentor /
                                            Pembimbing)</span></p>
                                </td>
                                <td rowspan="2"
                                    style="width:142.2pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">Waktu dan Tempat Sebagai Instruktur</span></p>
                                </td>
                                <td rowspan="2"
                                    style="width:102.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">Nama Lembaga Pemberi Tugas</span></p>
                                </td>
                                <td rowspan="2"
                                    style="width:53.1pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">Jumlah Peserta</span></p>
                                </td>
                                <td rowspan="2"
                                    style="width:61.25pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">Lamanya Kegiatan Instruktur&nbsp;</span></p>
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">(Jam)</span></p>
                                </td>
                                <td colspan="3"
                                    style="width:101.5pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle; background-color:#cccccc;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="font-family:Tahoma; vertical-align:3pt;">Diisi oleh Tim Ahli PT.
                                            &hellip;.</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle; background-color:#cccccc;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="font-family:Tahoma; vertical-align:3pt;">A</span></p>
                                </td>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle; background-color:#cccccc;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="font-family:Tahoma; vertical-align:3pt;">B</span></p>
                                </td>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle; background-color:#cccccc;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="font-family:Tahoma; vertical-align:3pt;">C</span></p>
                                </td>
                            </tr>
                            <!-- <tr>
                                <td
                                    style="width:17.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">
                                        <span style="vertical-align:3pt;">1</span></p>
                                </td>
                                <td
                                    style="width:119.45pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">
                                        <span style="vertical-align:3pt;">Dosen Tamu</span></p>
                                </td>
                                <td
                                    style="width:142.2pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">
                                        <span style="vertical-align:3pt;">***** ****** Kimia, Universitas Setia Budi, 3
                                            November 2018</span></p>
                                </td>
                                <td
                                    style="width:102.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">
                                        <span style="vertical-align:3pt;">Universitas Setia Budi, Surakarta</span></p>
                                </td>
                                <td
                                    style="width:53.1pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">
                                        <span style="vertical-align:3pt;">100</span></p>
                                </td>
                                <td
                                    style="width:61.25pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">
                                        <span style="vertical-align:3pt;">6</span></p>
                                </td>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:18pt;">
                                        <span style="font-size:12pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:18pt;">
                                        <span style="font-size:12pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:18pt;">
                                        <span style="font-size:12pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                            </tr> -->
                            <tr style="height:22.15pt;">
                                <td
                                    style="width:17.7pt; border-top-style:solid; border-top-width:0.75pt; padding-right:5.35pt; padding-left:5.35pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:18pt;"><span
                                            style="font-size:12pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:119.45pt; border-top-style:solid; border-top-width:0.75pt; padding-right:5.35pt; padding-left:5.35pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:18pt;"><span
                                            style="font-size:12pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:142.2pt; border-top-style:solid; border-top-width:0.75pt; padding-right:5.35pt; padding-left:5.35pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:18pt;"><span
                                            style="font-size:12pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:102.7pt; border-top-style:solid; border-top-width:0.75pt; padding-right:5.35pt; padding-left:5.35pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:18pt;"><span
                                            style="font-size:12pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:53.1pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; padding-right:4.97pt; padding-left:5.35pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:18pt;"><span
                                            style="font-size:12pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:61.25pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:18pt;"><span
                                            style="font-size:12pt; vertical-align:3pt;">Jumlah</span></p>
                                </td>
                                <td colspan="3"
                                    style="width:101.5pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:18pt;"><span
                                            style="font-size:12pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <p style="margin-top:0pt; margin-bottom:0pt;"><strong>&nbsp;</strong></p>
                    <p style="margin-top:0pt; margin-bottom:0pt;"><strong>Kelengkapan (ditunjukan)</strong><span
                            style="width:5.37pt; display:inline-block;">&nbsp;</span><strong>: - Surat tugas</strong>
                    </p>
                    <ul style="margin:0pt; padding-left:0pt;" type="disc">
                        <li style="text-indent:148.85pt; font-family:serif; list-style-position:inside;"><strong><span
                                    style="font-family:'Times New Roman';">Jadwal kegiatan instruktur dan
                                    silabusnya</span></strong></li>
                    </ul>

                    <!-- -------- -->
                    <!-- PART 5.5 -->
                    <!-- -------- -->
                    <h2
                        style="margin-top:0pt; margin-left:42.55pt; margin-bottom:0pt; text-indent:-28.35pt; page-break-after:avoid; font-size:14pt;">
                        5.5.<span
                            style="width:7.35pt; font:7pt 'Times New Roman'; display:inline-block;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>Karya
                        tulis <a name="_cmntref12">pada</a> penerbitan berkala (jurnal
                        / majalah / surat kabar dlsb)</h2>
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:14pt;"><strong>&nbsp;</strong></p>
                    <table cellpadding="0" cellspacing="0"
                        style="width:673.55pt; margin-left:0.15pt; border-collapse:collapse;">
                        <tbody>
                            <tr style="height:17pt;">
                                <td rowspan="2"
                                    style="width:17.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">No.</span></p>
                                </td>
                                <td rowspan="2"
                                    style="width:88.1pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">Topik Penerbitan</span></p>
                                </td>
                                <td rowspan="2"
                                    style="width:209pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">Judul Penerbitan</span></p>
                                </td>
                                <td rowspan="2"
                                    style="width:203pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">Jenis Penerbitan&nbsp;</span></p>
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">Jurnal Nasional Tidak Terakreditasi; Jurnal
                                            Nasional Terakreditasi; Jurnal Internasional Terakreditasi; dlsb</span></p>
                                </td>
                                <td colspan="3"
                                    style="width:101.5pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle; background-color:#cccccc;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">Diisi oleh Tim Ahli PT. &hellip;..</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle; background-color:#cccccc;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">A</span></p>
                                </td>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle; background-color:#cccccc;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">B</span></p>
                                </td>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle; background-color:#cccccc;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">C</span></p>
                                </td>
                            </tr>
                            <!-- <tr>
                                <td
                                    style="width:17.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:12pt;"><span
                                            style="vertical-align:3pt;">1</span></p>
                                </td>
                                <td
                                    style="width:88.1pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:12pt;"><span
                                            style="vertical-align:3pt;">Material Science</span></p>
                                </td>
                                <td
                                    style="width:209pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:12pt;"><span
                                            style="background-color:#ffffff;">Grafted ********** based on the modified
                                            taro starch varied by length of polyacrylamide chain</span></p>
                                </td>
                                <td
                                    style="width:203pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:12pt;"><span
                                            style="background-color:#ffffff;">IOP Conference Series: Materials Science
                                            and Engineering 403 (1), 012010, 2018</span></p>
                                </td>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:12pt;"><span
                                            style="vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:12pt;"><span
                                            style="vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:12pt;"><span
                                            style="vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                            </tr> -->
                            <tr style="height:22.15pt;">
                                <td
                                    style="width:17.7pt; border-top-style:solid; border-top-width:0.75pt; padding-right:5.35pt; padding-left:5.35pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:18pt;">
                                        <span style="font-size:12pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:88.1pt; border-top-style:solid; border-top-width:0.75pt; padding-right:5.35pt; padding-left:5.35pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:18pt;">
                                        <span style="font-size:12pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:209pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; padding-right:4.97pt; padding-left:5.35pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:18pt;">
                                        <span style="font-size:12pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:203pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:18pt;">
                                        <span style="font-size:12pt; vertical-align:3pt;">Jumlah</span></p>
                                </td>
                                <td colspan="3"
                                    style="width:101.5pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:18pt;">
                                        <span style="font-size:12pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <p style="margin-top:0pt; margin-bottom:0pt;"><strong>&nbsp;</strong></p>
                    <p style="margin-top:0pt; margin-bottom:0pt;"><strong>Kelengkapan (ditunjukan)</strong><span
                            style="width:5.37pt; display:inline-block;">&nbsp;</span><strong>: - Nomor contoh atau
                            fotokopi jurnal/majalah/surat kabar</strong></p>
                    <p style="margin-top:0pt; margin-bottom:0pt;">&nbsp;</p>

                    <!-- -------- -->
                    <!-- PART 5.6 -->
                    <!-- -------- -->
                    <h2
                        style="margin-top:0pt; margin-left:42.55pt; margin-bottom:0pt; text-indent:-28.35pt; page-break-after:avoid; font-size:14pt;">
                        5.6.<span
                            style="width:7.35pt; font:7pt 'Times New Roman'; display:inline-block;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><a
                            name="_cmntref13">Penulisan</a> Buku Keinsinyuran.</h2>
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:14pt;"><strong>&nbsp;</strong></p>
                    <table cellpadding="0" cellspacing="0"
                        style="width:673.55pt; margin-left:0.15pt; border-collapse:collapse;">
                        <tbody>
                            <tr style="height:17pt;">
                                <td rowspan="2"
                                    style="width:17.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">No.</span></p>
                                </td>
                                <td rowspan="2"
                                    style="width:385.75pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">Judul Buku / Monograf / Standard and Code /
                                            Patent / Proceeding Seminar</span></p>
                                </td>
                                <td rowspan="2"
                                    style="width:67.3pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">Bidang Profesi</span></p>
                                </td>
                                <td rowspan="2"
                                    style="width:47.05pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">Jumlah Halaman</span></p>
                                </td>
                                <td colspan="3"
                                    style="width:101.5pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle; background-color:#cccccc;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">Diisi oleh Tim Ahli PT.
                                            &hellip;&hellip;</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle; background-color:#cccccc;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">A</span></p>
                                </td>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle; background-color:#cccccc;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">B</span></p>
                                </td>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle; background-color:#cccccc;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">C</span></p>
                                </td>
                            </tr>
                            <!-- <tr>
                                <td
                                    style="width:17.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">
                                        <span style="vertical-align:3pt;">1</span></p>
                                </td>
                                <td
                                    style="width:385.75pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:12pt;">Proses Start Up
                                        Produksi Bioetanol dari Tepung ******* *********** Reaktor Anaerobik
                                        Berpenghalang (********** seminar 2016)</p>
                                </td>
                                <td
                                    style="width:67.3pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:12pt;"><span
                                            style="vertical-align:3pt;">Teknik Kimia</span></p>
                                </td>
                                <td
                                    style="width:47.05pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">
                                        <span style="vertical-align:3pt;">6</span></p>
                                </td>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">
                                        <span style="vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">
                                        <span style="vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">
                                        <span style="vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                            </tr> -->
                            <tr style="height:23.95pt;">
                                <td
                                    style="width:17.7pt; border-top-style:solid; border-top-width:0.75pt; padding-right:5.35pt; padding-left:5.35pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">
                                        <span style="vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:385.75pt; border-top-style:solid; border-top-width:0.75pt; padding-right:5.35pt; padding-left:5.35pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">
                                        <span style="vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:67.3pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; padding-right:4.97pt; padding-left:5.35pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:12pt;">
                                        <span style="vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:47.05pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">Jumlah</span></p>
                                </td>
                                <td colspan="3"
                                    style="width:101.5pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:14pt;"><strong>&nbsp;</strong></p>
                    <p style="margin-top:0pt; margin-bottom:0pt;"><strong>Kelengkapan (ditunjukan)</strong><span
                            style="width:5.37pt; display:inline-block;">&nbsp;</span><strong>: - Nomer contoh atau
                            fotokopi buku/monograf/standar dan code/patent/proceeding seminar dll</strong></p>
                    <p
                        style="margin-top:0pt; margin-left:14.2pt; margin-bottom:0pt; text-indent:-14.2pt; font-size:14pt;">
                        <strong>&nbsp;</strong></p>

                    <!-- -------- -->
                    <!-- PART 6.1 -->
                    <!-- -------- -->
                    <h1
                        style="margin-top:0pt; margin-left:14.2pt; margin-bottom:0pt; text-indent:-14.2pt; text-align:justify; line-height:18pt;">
                        <span style="font-size:14pt; vertical-align:3pt;">6.</span><span
                            style="width:3.7pt; font:7pt 'Times New Roman'; display:inline-block;">&nbsp;&nbsp;&nbsp;</span><span
                            style="font-size:14pt; vertical-align:3pt;">Kegiatan Penunjang lain.</span><span
                            style="font-size:14pt; vertical-align:3pt;">&nbsp;&nbsp;</span><span
                            style="font-size:14pt; vertical-align:3pt;">(Total Bobot 10%).</span></h1>
                    <h2
                        style="margin-top:0pt; margin-left:42.55pt; margin-bottom:0pt; text-indent:-28.35pt; page-break-after:avoid; font-size:14pt;">
                        6.1.<span
                            style="width:7.35pt; font:7pt 'Times New Roman'; display:inline-block;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><a
                            name="_cmntref14">Sebagai</a> Pakar atau Nara sumber pada
                        bidang keinsinyuran (saksi ahli, tim ahli, dewan pakar dst).</h2>
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:14pt;"><strong>&nbsp;</strong></p>
                    <table cellpadding="0" cellspacing="0"
                        style="width:673.55pt; margin-left:0.15pt; border-collapse:collapse;">
                        <tbody>
                            <tr style="height:17pt;">
                                <td rowspan="2"
                                    style="width:17.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">No.</span></p>
                                </td>
                                <td rowspan="2"
                                    style="width:88.1pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">Jenis / Kedudukan Sebagai Pakar /&nbsp;</span>
                                    </p>
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">Nara Sumber</span></p>
                                </td>
                                <td rowspan="2"
                                    style="width:336.6pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">Waktu dan Tempat&nbsp;</span></p>
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">Sebagai Pakar/Nara Sumber</span></p>
                                </td>
                                <td rowspan="2"
                                    style="width:75.4pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">Nama Lembaga</span></p>
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">Pemberi Tugas</span></p>
                                </td>
                                <td colspan="3"
                                    style="width:101.5pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle; background-color:#cccccc;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">Diisi oleh *** Ahli PT. &hellip;..</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle; background-color:#cccccc;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">A</span></p>
                                </td>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle; background-color:#cccccc;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">B</span></p>
                                </td>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle; background-color:#cccccc;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">C</span></p>
                                </td>
                            </tr>
                            <!-- <tr>
                                <td
                                    style="width:17.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:18pt;">
                                        <span style="font-size:12pt; vertical-align:3pt;">1</span></p>
                                </td>
                                <td
                                    style="width:88.1pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:12pt;">
                                        ***** Tim</p>
                                </td>
                                <td
                                    style="width:336.6pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:12pt;"><span
                                            style="vertical-align:3pt;">2018, Teknik Kimia UNS</span></p>
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:12pt;"><span
                                            style="vertical-align:3pt;">Hibah Penelitian Terapan Unggulan Perguruan
                                            Tinggi</span></p>
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:12pt;"><span
                                            style="vertical-align:3pt;">Pengembangan poli asam laktat berberat molekul
                                            rendah sebagai matrik pupuk **** dalam bentuk&nbsp;</span><em><span
                                                style="vertical-align:3pt;">slow release fertilizer</span></em><span
                                            style="vertical-align:3pt;">&nbsp;(</span><strong><span
                                                style="vertical-align:3pt;">tahun Kedua</span></strong><span
                                            style="vertical-align:3pt;">)</span></p>
                                </td>
                                <td
                                    style="width:75.4pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:12pt;">
                                        Kemenristek</p>
                                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:12pt;">
                                        dikti</p>
                                </td>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:18pt;">
                                        <span style="font-size:12pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:18pt;">
                                        <span style="font-size:12pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:18pt;">
                                        <span style="font-size:12pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                            </tr> -->
                            <tr style="height:23.05pt;">
                                <td
                                    style="width:17.7pt; border-top-style:solid; border-top-width:0.75pt; padding-right:5.35pt; padding-left:5.35pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:18pt;">
                                        <span style="font-size:12pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:88.1pt; border-top-style:solid; border-top-width:0.75pt; padding-right:5.35pt; padding-left:5.35pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:18pt;">
                                        <span style="font-size:12pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:336.6pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; padding-right:4.97pt; padding-left:5.35pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:18pt;">
                                        <span style="font-size:12pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:75.4pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:18pt;">
                                        <span style="font-size:12pt; vertical-align:3pt;">Jumlah</span></p>
                                </td>
                                <td colspan="3"
                                    style="width:101.5pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:18pt;">
                                        <span style="font-size:12pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <p style="margin-top:0pt; margin-bottom:0pt;"><strong>Kelengkapan (ditunjukan)</strong><span
                            style="width:5.37pt; display:inline-block;">&nbsp;</span><strong>: - Sertifikat</strong></p>
                    <ul style="margin:0pt; padding-left:0pt;" type="disc">
                        <li style="text-indent:148.85pt; font-family:serif; list-style-position:inside;"><strong><span
                                    style="font-family:'Times New Roman';">Surat penugasan/undangan</span></strong></li>
                        <li style="text-indent:148.85pt; font-family:serif; list-style-position:inside;"><strong><span
                                    style="font-family:'Times New Roman';">Surat ucapan terima kasih dll</span></strong>
                        </li>
                    </ul>
                    <p style="margin-top:0pt; margin-bottom:0pt;">&nbsp;</p>

                    <!-- -------- -->
                    <!-- PART 6.2 -->
                    <!-- -------- -->
                    <h2
                        style="margin-top:0pt; margin-left:42.55pt; margin-bottom:0pt; text-indent:-28.35pt; page-break-after:avoid; font-size:14pt;">
                        6.2.<span
                            style="width:7.35pt; font:7pt 'Times New Roman'; display:inline-block;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>Pengurus
                        organisasi <a name="_cmntref15">profesi</a> atau pimpinan lembaga /
                        institusi.</h2>
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:14pt;"><strong>&nbsp;</strong></p>
                    <table cellpadding="0" cellspacing="0"
                        style="width:673.55pt; margin-left:0.15pt; border-collapse:collapse;">
                        <tbody>
                            <tr style="height:17pt;">
                                <td rowspan="2"
                                    style="width:17.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                                        <span style="vertical-align:3pt;">No.</span></p>
                                </td>
                                <td rowspan="2"
                                    style="width:119.45pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                                        <span style="vertical-align:3pt;">Nama Organisasi Profesi / Lembaga /
                                            Institusi</span></p>
                                </td>
                                <td rowspan="2"
                                    style="width:138.9pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                                        <span style="vertical-align:3pt;">Alamat&nbsp;</span></p>
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                                        <span style="vertical-align:3pt;">(No. Telp.; Fax; E-mail)</span></p>
                                </td>
                                <td rowspan="2"
                                    style="width:129.55pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                                        <span style="vertical-align:3pt;">Kedudukan / Jabatan Dalam Organisasi Profesi /
                                            Lembaga / Institusi</span></p>
                                </td>
                                <td rowspan="2"
                                    style="width:101.5pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                                        <span style="vertical-align:3pt;">Periode Tahun&nbsp;</span></p>
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                                        <span style="vertical-align:3pt;">Masa Jabatan</span></p>
                                </td>
                                <td colspan="3"
                                    style="width:101.5pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle; background-color:#cccccc;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                                        <span style="font-family:Tahoma; vertical-align:3pt;">Diisi oleh Tim Ahli PT.
                                            &hellip;..</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle; background-color:#cccccc;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                                        <span style="font-family:Tahoma; vertical-align:3pt;">A</span></p>
                                </td>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle; background-color:#cccccc;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                                        <span style="font-family:Tahoma; vertical-align:3pt;">B</span></p>
                                </td>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle; background-color:#cccccc;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                                        <span style="font-family:Tahoma; vertical-align:3pt;">C</span></p>
                                </td>
                            </tr>
                            <!-- <tr>
                                <td
                                    style="width:17.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:18pt;">
                                        <span style="font-size:11pt; vertical-align:3pt;">1</span></p>
                                </td>
                                <td
                                    style="width:119.45pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:11pt;">
                                        <span style="vertical-align:3pt;">Korps Pegawai Republik Indonesia</span></p>
                                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:11pt;">
                                        <span style="vertical-align:3pt;">(KORPRI)</span></p>
                                </td>
                                <td
                                    style="width:138.9pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:11pt;">
                                        <span style="vertical-align:3pt;">Unit *********** Sebelas Maret (UNS)
                                            Surakarta</span></p>
                                </td>
                                <td
                                    style="width:129.55pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:11pt;">
                                        <span style="vertical-align:3pt;">Anggota</span></p>
                                </td>
                                <td
                                    style="width:101.5pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:11pt;">
                                        <span style="vertical-align:3pt;">2003-sekarang</span></p>
                                </td>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:18pt;">
                                        <span style="font-size:11pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:18pt;">
                                        <span style="font-size:11pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:18pt;">
                                        <span style="font-size:11pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                            </tr> -->
                            <tr style="height:18.7pt;">
                                <td
                                    style="width:17.7pt; padding-right:5.35pt; padding-left:5.35pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:18pt;">
                                        <span style="font-size:11pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:119.45pt; padding-right:5.35pt; padding-left:5.35pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:18pt;">
                                        <span style="font-size:11pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:138.9pt; padding-right:5.35pt; padding-left:5.35pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:18pt;">
                                        <span style="font-size:11pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:129.55pt; border-right-style:solid; border-right-width:0.75pt; padding-right:4.97pt; padding-left:5.35pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:18pt;">
                                        <span style="font-size:11pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:101.5pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:18pt;">
                                        <span style="font-size:12pt; vertical-align:3pt;">Jumlah</span></p>
                                </td>
                                <td colspan="3"
                                    style="width:101.5pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:18pt;">
                                        <span style="font-size:12pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:14pt;"><strong>&nbsp;</strong></p>
                    <p style="margin-top:0pt; margin-bottom:0pt;"><strong>Kelengkapan (ditunjukan)</strong><span
                            style="width:5.37pt; display:inline-block;">&nbsp;</span><strong>: - Sertifikat/surat
                            keterangan atau keanggotaan.</strong></p>
                    <ul style="margin:0pt; padding-left:0pt;" type="disc">
                        <li style="text-indent:148.85pt; font-family:serif; list-style-position:inside;"><strong><span
                                    style="font-family:'Times New Roman';">Surat penugasan</span></strong></li>
                    </ul>
                    <p style="margin-top:0pt; margin-bottom:0pt;"><strong>&nbsp;</strong></p>
                    <p style="margin-top:0pt; margin-bottom:0pt;"><strong>&nbsp;</strong></p>
                    <p style="margin-top:0pt; margin-bottom:0pt;"><strong>&nbsp;</strong></p>
                    <h2
                        style="margin-top:0pt; margin-left:42.55pt; margin-bottom:0pt; text-indent:-28.35pt; page-break-after:avoid; font-size:14pt;">
                        6.3.<span
                            style="width:7.35pt; font:7pt 'Times New Roman'; display:inline-block;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>Penerima
                        tanda <a name="_cmntref16">jasa</a>, award, tanda penghargaan
                        dan sejenisnya.</h2>
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:14pt;"><strong>&nbsp;</strong></p>
                    <table cellpadding="0" cellspacing="0"
                        style="width:673.55pt; margin-left:0.15pt; border-collapse:collapse;">
                        <tbody>
                            <tr style="height:17pt;">
                                <td rowspan="2"
                                    style="width:17.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">No.</span></p>
                                </td>
                                <td rowspan="2"
                                    style="width:187.3pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">Bentuk Tanda Jasa / Award</span></p>
                                </td>
                                <td rowspan="2"
                                    style="width:209.05pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">Instansi Pemberi Tanda Jasa / Award</span></p>
                                </td>
                                <td rowspan="2"
                                    style="width:103.75pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">Tahun Penerimaan Tanda Jasa / Award</span></p>
                                </td>
                                <td colspan="3"
                                    style="width:101.5pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle; background-color:#cccccc;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">Diisi Oleh MP</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle; background-color:#cccccc;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">A</span></p>
                                </td>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle; background-color:#cccccc;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">B</span></p>
                                </td>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle; background-color:#cccccc;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">
                                        <span style="vertical-align:3pt;">C</span></p>
                                </td>
                            </tr>
                            <!-- <tr>
                                <td
                                    style="width:17.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:18pt;">
                                        <span style="font-size:12pt; vertical-align:3pt;">1</span></p>
                                </td>
                                <td
                                    style="width:187.3pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:18pt;">
                                        <span style="font-size:12pt;">Pemenang kedua ******** lingkungan pada
                                            3</span><span style="font-size:8pt;"><sup>rd</sup></span><span
                                            style="font-size:12pt;">&nbsp;International Biotechnology Competition and
                                            Exhibitions 2017 sebagai pembimbing</span></p>
                                </td>
                                <td
                                    style="width:209.05pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p
                                        style="margin-top:0pt; margin-right:1.9pt; margin-bottom:0pt; text-align:justify; line-height:18pt;">
                                        <span style="font-size:12pt;">Deputy vice ********** (Academic and
                                            International), Universiti Teknologi Malaysia</span></p>
                                </td>
                                <td
                                    style="width:103.75pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:18pt;">
                                        <span style="font-size:12pt;">15 ***** 2017</span></p>
                                </td>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:18pt;">
                                        <span style="font-size:12pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:18pt;">
                                        <span style="font-size:12pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:26.7pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:18pt;">
                                        <span style="font-size:12pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                            </tr> -->
                            <tr style="height:22.7pt;">
                                <td
                                    style="width:17.7pt; border-top-style:solid; border-top-width:0.75pt; padding-right:5.35pt; padding-left:5.35pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:18pt;">
                                        <span style="font-size:12pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:187.3pt; border-top-style:solid; border-top-width:0.75pt; padding-right:5.35pt; padding-left:5.35pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:18pt;">
                                        <span style="font-size:12pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:209.05pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; padding-right:4.97pt; padding-left:5.35pt; vertical-align:top;">
                                    <p
                                        style="margin-top:0pt; margin-right:1.9pt; margin-bottom:0pt; text-align:justify; line-height:18pt;">
                                        <span style="font-size:12pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:103.75pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:18pt;">
                                        <span style="font-size:12pt; vertical-align:3pt;">Jumlah</span></p>
                                </td>
                                <td colspan="3"
                                    style="width:101.5pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:18pt;">
                                        <span style="font-size:12pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                            </tr>
                            <tr style="height:22.7pt;">
                                <td
                                    style="width:17.7pt; padding-right:5.35pt; padding-left:5.35pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:18pt;">
                                        <span style="font-size:12pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:187.3pt; padding-right:5.35pt; padding-left:5.35pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:18pt;">
                                        <span style="font-size:12pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:209.05pt; border-right-style:solid; border-right-width:0.75pt; padding-right:4.97pt; padding-left:5.35pt; vertical-align:top;">
                                    <p
                                        style="margin-top:0pt; margin-right:1.9pt; margin-bottom:0pt; text-align:justify; line-height:18pt;">
                                        <span style="font-size:12pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:103.75pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <h1
                                        style="margin-top:0pt; margin-left:14.2pt; margin-bottom:0pt; text-indent:-14.2pt; text-align:justify; line-height:18pt;">
                                        <span style="font-size:14pt; vertical-align:3pt;">7.</span><span
                                            style="width:3.7pt; font:7pt 'Times New Roman'; display:inline-block;">&nbsp;&nbsp;&nbsp;</span><span
                                            style="font-size:14pt; vertical-align:3pt;">TOTAL</span></h1>
                                </td>
                                <td colspan="3"
                                    style="width:101.5pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:18pt;">
                                        <span style="font-size:12pt; vertical-align:3pt;">&nbsp;</span></p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <p style="margin-top:0pt; margin-bottom:0pt;"><strong>&nbsp;</strong></p>
                    <p style="margin-top:0pt; margin-bottom:0pt;"><strong>Kelengkapan
                            (ditunjukan):</strong><strong>&nbsp;&nbsp;</strong><strong>- Photo copy tanda jasa, award,
                            tanda penghargaan dan sejenisnya.</strong></p>
                </div>
                <hr style="width:33%; height:1px; text-align:left;">
            </div>
        </div>
    </div>
</body>

</html>