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

                <p style="text-align:center; line-height:18pt;"><strong><span
                            style="font-size:14pt; vertical-align:3pt;">FORMULIR ISIAN PROGRAM REKOGNISI PEMBELAJARAN
                            LAMPAU</span></strong></p>
                <p
                    style="margin-top:0pt; margin-left:54pt; margin-bottom:0pt; text-indent:-54pt; text-align:justify; line-height:18pt;">
                    <strong><span style="font-size:14pt; vertical-align:3pt;">&nbsp;</span></strong></p>
                <h1
                    style="margin-top:0pt; margin-left:2pt; margin-bottom:0pt;  text-align:justify; line-height:18pt;">
                    <span style="font-size:14pt; vertical-align:3pt;">1.</span><span
                        style="width:3.7pt; font:7pt 'Times New Roman'; display:inline-block;">&nbsp;&nbsp;&nbsp;</span><span
                        style="font-size:14pt; vertical-align:3pt;">Data Pribadi Peserta PS PPI</span></h1>
                <p style="margin-top:0pt; margin-left:18pt; margin-bottom:0pt; text-align:justify; line-height:18pt;">
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
                                    <img src=" {{asset('file_ttd/'.$mahasiswa->signature_mhs)}} " width="137"
                                        height="200" alt=""></p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3"
                                style="width:121.35pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                <p style="margin-top:0pt; margin-bottom:0pt; line-height:18pt;"><span
                                        style="font-size:12pt; vertical-align:3pt;">Tempat &amp; Tanggal Lahir</span>
                                </p>
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
                                        style="font-size:12pt; vertical-align:3pt;">{{$mahasiswa->no_karmas}}</span></p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3"
                                style="width:121.35pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                <p style="margin-top:0pt; margin-bottom:0pt; line-height:18pt;"><span
                                        style="font-size:12pt; vertical-align:3pt;">No. Ijazah S1, S2 dan S3</span></p>
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
                                        style="font-size:12pt; vertical-align:3pt;">Lembaga / Institusi Profesi</span>
                                </p>
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
                                        style="font-size:12pt; vertical-align:3pt;">: {{$mahasiswa->nama_lembaga}}</span></p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3"
                                style="width:308.25pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                <p style="margin-top:0pt; margin-bottom:0pt; line-height:18pt;"><span
                                        style="font-size:12pt; vertical-align:3pt;">Jabatan di Lembaga : {{$mahasiswa->jabatan_di_lembaga}}</span></p>
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
                                        style="font-size:12pt; vertical-align:3pt;">Kota : {{$mahasiswa->kota_rumah}}</span></p>
                                
                            </td>
                            <td
                                style="width:137.6pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                <p style="margin-top:0pt; margin-bottom:0pt; line-height:18pt;"><span
                                        style="font-size:12pt; vertical-align:3pt;">Kode Pos : {{$mahasiswa->pos_rumah}}</span></p>
                            </td>
                            <td
                                style="width:149.55pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                <p style="margin-top:0pt; margin-bottom:0pt; line-height:18pt;"><span
                                        style="font-size:12pt; vertical-align:3pt;">Kota : {{$mahasiswa->kota_lembaga}}</span></p>
                            </td>
                            <td colspan="2"
                                style="width:148pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                <p style="margin-top:0pt; margin-bottom:0pt; line-height:18pt;"><span
                                        style="font-size:12pt; vertical-align:3pt;">Kode Pos : {{$mahasiswa->pos_lembaga}}</span></p>
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
                                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:18pt;"><span
                                        style="font-size:12pt; vertical-align:3pt;">{{$mahasiswa->telepon_rumah}}</span></p>
                            </td>
                            <td
                                style="width:137.6pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                <p style="margin-top:0pt; margin-bottom:0pt; line-height:18pt;"><span
                                        style="font-size:12pt; vertical-align:3pt;">Faksimil : {{$mahasiswa->fax_pribadi}}</span></p>
                                <p style="margin-top:0pt; margin-bottom:0pt; line-height:18pt;"><span
                                        style="font-size:12pt; vertical-align:3pt;">&nbsp;</span></p>
                            </td>
                            <td
                                style="width:149.55pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                <p style="margin-top:0pt; margin-bottom:0pt; line-height:18pt;"><span
                                        style="font-size:12pt; vertical-align:3pt;">Telepon: {{$mahasiswa->telepon_kantor}}</span></p>
                            </td>
                            <td colspan="2"
                                style="width:148pt; border-style:solid; border-width:0.75pt; padding-right:4.97pt; padding-left:4.97pt; vertical-align:middle;">
                                <p style="margin-top:0pt; margin-bottom:0pt; line-height:18pt;"><span
                                        style="font-size:12pt; vertical-align:3pt;">Faksimili : {{$mahasiswa->fax_kantor}}</span></p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2"
                                style="width:115.1pt; border-style:solid; border-width:0.75pt; padding-right:2.33pt; padding-left:2.33pt; vertical-align:middle;">
                                <p style="margin-top:0pt; margin-bottom:0pt; line-height:18pt;"><span
                                        style="font-size:12pt; vertical-align:3pt;">HP : {{$mahasiswa->no_telp}}</span></p>
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
                                        style="font-size:12pt; vertical-align:3pt;">E-mail kantor :
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
                <p style="margin-top:0pt; margin-bottom:0pt;"><strong>&nbsp;</strong></p>

            </div>
        </div>
    </div>
</body>

</html>
