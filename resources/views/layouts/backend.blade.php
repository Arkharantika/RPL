<!doctype html>
<html lang="{{ config('app.locale') }}" class="no-focus">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>@yield('title','RPL')</title>

    <meta name="description" content="Portal Teknik Elektro">
    <meta name="author" content="yudhi kusuma">
    <meta name="robots" content="noindex, nofollow">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Icons -->
    <!-- <link rel="shortcut icon" href="{{ asset('media/favicons/favicon.png') }}">
        <link rel="icon" sizes="192x192" type="image/png" href="{{ asset('media/favicons/favicon-192x192.png') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('media/favicons/apple-touch-icon-180x180.png') }}"> -->

    <!-- Fonts and Styles -->
    @yield('css_before')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,400i,600,700">
    <link rel="stylesheet" id="css-main" href="{{ asset('/css/codebase.css') }}">
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('js/plugins/datatables/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" href="{{asset('/js/plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('/js/plugins/flatpickr/flatpickr.min.css')}}">

    <!-- You can include a specific file from public/css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="{{ asset('/css/themes/corporate.css') }}"> -->
    @yield('css_after')

    <!-- Scripts -->
    <script>
        window.Laravel = {
            !!json_encode(['csrfToken' => csrf_token(), ]) !!
        };
    </script>

</head>

<body>
    <!-- Page Container -->
    <!--
            Available classes for #page-container:

        GENERIC

            'enable-cookies'                            Remembers active color theme between pages (when set through color theme helper Template._uiHandleTheme())

        SIDEBAR & SIDE OVERLAY

            'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
            'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
            'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
            'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
            'sidebar-inverse'                           Dark themed sidebar

            'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
            'side-overlay-o'                            Visible Side Overlay by default

            'enable-page-overlay'                       Enables a visible clickable Page Overlay (closes Side Overlay on click) when Side Overlay opens

            'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

        HEADER

            ''                                          Static Header if no class is added
            'page-header-fixed'                         Fixed Header

        HEADER STYLE

            ''                                          Classic Header style if no class is added
            'page-header-modern'                        Modern Header style
            'page-header-inverse'                       Dark themed Header (works only with classic Header style)
            'page-header-glass'                         Light themed Header with transparency by default
                                                        (absolute position, perfect for light images underneath - solid light background on scroll if the Header is also set as fixed)
            'page-header-glass page-header-inverse'     Dark themed Header with transparency by default
                                                        (absolute position, perfect for dark images underneath - solid dark background on scroll if the Header is also set as fixed)

        MAIN CONTENT LAYOUT

            ''                                          Full width Main Content if no class is added
            'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
            'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)
        -->
    <div id="page-container"
        class="sidebar-o enable-page-overlay side-scroll page-header-fixed page-header-modern enable-cookies">
        <!-- Sidebar -->
        <!--
                Helper classes

                Adding .sidebar-mini-hide to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
                Adding .sidebar-mini-show to an element will make it visible (opacity: 1) when the sidebar is in mini mode
                    If you would like to disable the transition, just add the .sidebar-mini-notrans along with one of the previous 2 classes

                Adding .sidebar-mini-hidden to an element will hide it when the sidebar is in mini mode
                Adding .sidebar-mini-visible to an element will show it only when the sidebar is in mini mode
                    - use .sidebar-mini-visible-b if you would like to be a block when visible (display: block)
            -->
        <nav id="sidebar">
            <!-- Sidebar Content -->
            <div class="sidebar-content">
                <!-- Side Header -->
                <div class="content-header content-header-fullrow px-15">
                    <!-- Mini Mode -->
                    <div class="content-header-section sidebar-mini-visible-b">
                        <!-- Logo -->
                        <span class="content-header-item font-w700 font-size-xl float-left animated fadeIn">
                            <span class="text-dual-primary-dark">p</span><span class="text-primary">e</span>
                        </span>
                        <!-- END Logo -->
                    </div>
                    <!-- END Mini Mode -->

                    <!-- Normal Mode -->
                    <div class="content-header-section text-center align-parent sidebar-mini-hidden">
                        <!-- Close Sidebar, Visible only on mobile screens -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r"
                            data-toggle="layout" data-action="sidebar_close">
                            <i class="fa fa-times text-danger"></i>
                        </button>
                        <!-- END Close Sidebar -->

                        <!-- Logo -->
                        <div class="content-header-item">
                            <a class="link-effect font-w700" href="{{url('/home')}}">
                                <span class="font-size-xl text-black">RPL</span>
                            </a>
                        </div>
                        <!-- END Logo -->
                    </div>
                    <!-- END Normal Mode -->
                </div>
                <!-- END Side Header -->

                <!-- Side User -->
                <div class="content-side content-side-full content-side-user px-10 align-parent">
                    <!-- Visible only in mini mode -->
                    <!-- <div class="sidebar-mini-visible-b align-v animated fadeIn">
                            <img class="img-avatar img-avatar32" src="{{ asset('media/avatars/avatar15.jpg') }}" alt="">
                        </div> -->
                    <!-- END Visible only in mini mode -->

                    <!-- Visible only in normal mode -->
                    <div class="sidebar-mini-hidden-b text-center">
                        <div class="img-avatar img-avatar-thumb float-left">
                            <img class="img-avatar" src="{{ asset('media/avatars/avatar15.jpg') }}" alt="">
                        </div>
                        <ul class="list-inline mt-10">
                            <li class="pt-5 pb-10">
                                <a class="link-effect text-dual-primary-dark font-size-sm font-w600 text-uppercase"
                                    href="{{route('profil.index')}}">{{ Auth::user()->name }}</a>
                            </li>
                            <!-- <li class="list-inline-item">
                                     Layout API, functionality initialized in Template._uiApiLayout() 
                                    <a class="link-effect text-dual-primary-dark" data-toggle="layout" data-action="sidebar_style_inverse_toggle" href="javascript:void(0)">
                                        <i class="si si-drop"></i>
                                    </a>
                                </li> -->
                            <li class="list-inline">
                                <a class="link-effect text-dual-primary-dark" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="si si-logout"></i> Sign Out
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- END Visible only in normal mode -->
                </div>
                <!-- END Side User -->

                <!-- Side Navigation -->
                <div class="content-side content-side-full">
                    <ul class="nav-main">
                        <li>
                            <a class="{{ request()->is('home') ? ' active' : '' }}" href="{{url('/home')}}">
                                <i class="si si-home"></i><span class="sidebar-mini-hide">Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a class="{{ request()->is('profil') || request()->is('profil/*') ? ' active' : '' }}"
                                href="{{route('profil.index')}}">
                                <i class="si si-user"></i><span class="sidebar-mini-hide">Profile</span>
                            </a>
                        </li>
                        <!-- <li>
                            <a class="{{ request()->is('usermanual') || request()->is('usermanual/*') ? ' active' : '' }}"
                                href=" @if(Auth::user()->can('manage-users'))
                                    {{route('usermanual.create')}} @else {{route('usermanual.index')}} @endif">
                                <i class="si si-bag"></i><span class="sidebar-mini-hide">Users Manual</span>
                            </a>
                        </li> -->
                        @can('manage-users')
                        <li class="{{ request()->is('dosen/*') ? ' open' : '' }}">
                            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-user"></i><span
                                    class="sidebar-mini-hide">Admin</span></a>
                            <ul>
                                <!-- <li>
                                    <a class="{{ request()->is('admin/lihat') || request()->is('admin/lihat/*') ? ' active' : '' }}"
                                        href="{{url('lihat')}}">
                                        Lihat Data Form</a>
                                </li> -->
                                <li>
                                    <a class="{{ request()->is('admin/users') || request()->is('admin/users/*') ? ' active' : '' }}"
                                        href="{{route('admin.users.index')}}">
                                        User Management</a>
                                </li>
                                <li>
                                    <a class="{{ request()->is('admin/mahasiswa') || request()->is('admin/mahasiswa/*') ? ' active' : '' }}"
                                        href="{{route('admin.mahasiswa.index')}}">
                                        List Mahasiswa</a>
                                </li>
                                <li>
                                    <a class="{{ request()->is('admin/dosen') || request()->is('admin/dosen/*') ? ' active' : '' }}"
                                        href="{{route('admin.dosen.index')}}">
                                        List Dosen</a>
                                </li>
                                <li>
                                    <a class="{{ request()->is('admin/akademik') || request()->is('admin/akademik/*') ? ' active' : '' }}"
                                        href="{{route('admin.akademik.index')}}">
                                        Pembimbing Akademik</a>
                                </li>
                            </ul>
                        </li>
                        @endcan
                        @can('dosen')

                        <li class="{{ request()->is('dosen/*') ? ' open' : '' }}">
                            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-badge"></i><span
                                    class="sidebar-mini-hide">Dosen</span></a>
                            <ul>
                                <li>
                                    <a class="{{ request()->is('dosen/akademik') ? ' active' : '' }}"
                                        href="{{route('dosen.akademik.index')}}">
                                        Bimbingan Akademik</a>
                                </li>
                                <!-- <li>
                                    <a class="{{ request()->is('dosen/kp') || request()->is('dosen/kp/*') ? ' active' : '' }}"
                                        href="{{route('dosen.kp.index')}}">
                                        Bimbingan KP</a>
                                </li>
                                <li>
                                    <a class="{{ request()->is('dosen/ta') || request()->is('dosen/ta/*') ? ' active' : '' }}"
                                        href="{{route('dosen.ta.index')}}">
                                        Bimbingan TA</a>
                                </li> -->
                                <li>
                                    <a class="{{ request()->is('dosen/semhas') || request()->is('dosen/semhas/*') ? ' active' : '' }}"
                                        href="{{route('dosen.semhas.index')}}">
                                        Mahasiswa Yang Diuji</a>
                                </li>
                                <!-- <li>
                                    <a class="{{ request()->is('dosen/pendadaran') || request()->is('dosen/pendadaran/*') ? ' active' : '' }}"
                                        href="{{route('dosen.pendadaran.index')}}">
                                        Pendadaran TA</a>
                                </li>
                                <li>
                                    <a class="{{ request()->is('dosen/tawaran') || request()->is('dosen/tawaran/*') ? ' active' : '' }}"
                                        href="{{route('dosen.tawaran.index')}}">
                                        Tawaran Topik TA</a>
                                </li>
                                <li>
                                    <a class="{{ request()->is('dosen/logbookta') || request()->is('dosen/logbookta/*') ? ' active' : '' }}"
                                        href="{{route('dosen.logbookta.index')}}">
                                        Log Book TA</a>
                                </li>
                                <li>
                                    <a class="{{ request()->is('dosen/judulta') || request()->is('dosen/judulta/*') ? ' active' : '' }}"
                                        href="{{route('dosen.judulta.index')}}">
                                        Perubahan Judul TA</a>
                                </li>
                                <li>
                                    <a class="{{ request()->is('dosen/pembimbingta') || request()->is('dosen/pembimbingta/*') ? ' active' : '' }}"
                                        href="{{route('dosen.pembimbingta.index')}}">
                                        Perubahan Pembimbing TA</a>
                                </li>
                                <li>
                                    <a class="{{ request()->is('dosen/perpanjanganta') || request()->is('dosen/perpanjanganta/*') ? ' active' : '' }}"
                                        href="{{route('dosen.perpanjanganta.index')}}">
                                        Perpanjangan TA</a>
                                </li> -->
                            </ul>
                        </li>
                        <!-- <li class="{{ request()->is('kelengkapanta/*') ? ' open' : '' }}">
                            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i
                                    class="fa fa-check-square-o"></i><span class="sidebar-mini-hide">Kelengkapan
                                    Wisuda</span></a>
                            <ul>
                                <li>
                                    <a class="{{ request()->is('kelengkapanta/persetujuanpa') || request()->is('kelengkapanta/persetujuanpa/*') ? ' active' : '' }}"
                                        href="{{route('dosen.persetujuanpa.index')}}">
                                        Persetujuan Dosen PA</a>
                                </li>
                                <li>
                                    <a class="{{ request()->is('kelengkapanta/persetujuandraft') || request()->is('kelengkapanta/persetujuandraft/*') || request()->is('kelengkapanta/draftpenguji/*')
                                         ? ' active' : '' }}" href="{{route('dosen.persetujuandraft.index')}}">
                                        Persetujuan Draft</a>
                                </li>
                            </ul>
                        </li> -->
                        @endcan
                        @can('kalab')
                        <!-- <li>
                                <a class="{{ request()->is('bebaslab') || request()->is('bebaslab/*') ? ' active' : '' }}" href="{{route('kalab.bebaslab.index')}}">
                                    <i class="si si-paper-clip"></i><span class="sidebar-mini-hide">Surat Bebas Lab</span>
                                </a>
                            </li> -->
                        @endcan
                        @can('mahasiswa')
                        <li class="nav-main-heading">
                            <span class="sidebar-mini-visible">KP</span><span
                                class="sidebar-mini-hidden text-primary">2. Pendidikan Formal</span>
                        </li>
                        <li>
                            <a class="{{ request()->is('kp/seminar') || request()->is('kp/seminar/*') ? ' active' : '' }}"
                                href="{{url('PresensiSeminarKP')}}">
                                <i class="si si-note"></i><span class="sidebar-mini-hide">Pendidikan Strata Satu dan
                                    Lanjut</span>
                            </a>
                        </li>
                        <li>
                            <a class="{{ request()->is('dua/b') || request()->is('dua/b/*') ? ' active' : '' }}"
                                href="{{url('dua/b')}}">
                                <i class="si si-doc"></i><span class="sidebar-mini-hide">Pendidikan Singkat</span>
                            </a>
                        </li>
                        <li>
                            <a class="{{ request()->is('dua/c') || request()->is('dua/c/*') ? ' active' : '' }}"
                                href="{{url('dua/c')}}">
                                <i class="si si-doc"></i><span class="sidebar-mini-hide">Pendidikan / Pelatihan Kerja
                                    Formal</span>
                            </a>
                        </li>
                        <li class="nav-main-heading">
                            <span class="sidebar-mini-visible">KP</span><span
                                class="sidebar-mini-hidden text-primary">3. Pendidikan Nonformal atau Informal</span>
                        </li>
                        <li>
                            <a class="{{ request()->is('tiga/a') || request()->is('tiga/a/*') ? ' active' : '' }}"
                                href="{{url('tiga/a')}}">
                                <i class="si si-note"></i><span class="sidebar-mini-hide">Pembelajaran Mandiri</span>
                            </a>
                        </li>
                        <li>
                            <a class="{{ request()->is('tiga/b') || request()->is('tiga/b/*') ? ' active' : '' }}"
                                href="{{url('tiga/b')}}">
                                <i class="si si-note"></i><span class="sidebar-mini-hide">Pendidikan Sehubungan dengan
                                    Penugasan Kerja</span>
                            </a>
                        </li>

                        <li class="nav-main-heading">
                            <span class="sidebar-mini-visible">KP</span><span
                                class="sidebar-mini-hidden text-primary">4. Pengalaman Kerja Praktik Keinsinyuran</span>
                        </li>

                        <li>
                            <a class="{{ request()->is('empat/a') || request()->is('empat/a/*') ? ' active' : '' }}"
                                href="{{url('empat/a')}}">
                                <i class="si si-note"></i><span class="sidebar-mini-hide">Pengalaman Praktik
                                    Keinsinyuran pada lembaga / institusi formal (memiliki badan hukum)</span>
                            </a>
                        </li>
                        <li>
                            <a class="{{ request()->is('empat/b') || request()->is('empat/b/*') ? ' active' : '' }}"
                                href="{{url('empat/b')}}">
                                <i class="si si-note"></i><span class="sidebar-mini-hide">Pengalaman Praktik
                                    Keinsinyuran pada lembaga / institusi non-formal (tidak ada badan hukum)</span>
                            </a>
                        </li>

                        <li class="nav-main-heading">
                            <span class="sidebar-mini-visible">KP</span><span
                                class="sidebar-mini-hidden text-primary">5. Paparan dan Karya Tulis Keinsinyuran</span>
                        </li>

                        <li>
                            <a class="{{ request()->is('lima/a') || request()->is('lima/a/*') ? ' active' : '' }}"
                                href="{{url('lima/a')}}">
                                <i class="si si-note"></i><span class="sidebar-mini-hide">Paparan dan Laporan Internal,
                                    Konsultasi, dan Inspeksi pada praktik keinsinyuran</span>
                            </a>
                        </li>
                        <li>
                            <a class="{{ request()->is('lima/b') || request()->is('lima/b/*') ? ' active' : '' }}"
                                href="{{url('lima/b')}}">
                                <i class="si si-note"></i><span class="sidebar-mini-hide">Paparan Pada Pertemuan Teknis
                                    (Pemateri dalam pertemuan profesi keinsinyuran)</span>
                            </a>
                        </li>
                        <li>
                            <a class="{{ request()->is('lima/c') || request()->is('lima/c/*') ? ' active' : '' }}"
                                href="{{url('lima/c')}}">
                                <i class="si si-note"></i><span class="sidebar-mini-hide">Penulisan Makalah Untuk
                                    Pertemuan Profesi </span>
                            </a>
                        </li>
                        <li>
                            <a class="{{ request()->is('lima/d') || request()->is('lima/d/*') ? ' active' : '' }}"
                                href="{{url('lima/d')}}">
                                <i class="si si-note"></i><span class="sidebar-mini-hide">Pengajar / Pelatih /
                                    Instruktur / Dosen Tamu pada pembelajaran atau pelatihan keinsinyuran </span>
                            </a>
                        </li>
                        <li>
                            <a class="{{ request()->is('lima/e') || request()->is('lima/e/*') ? ' active' : '' }}"
                                href="{{url('lima/e')}}">
                                <i class="si si-note"></i><span class="sidebar-mini-hide">Karya tulis pada penerbitan
                                    berkala (jurnal / majalah / surat kabar dlsb)</span>
                            </a>
                        </li>
                        <li>
                            <a class="{{ request()->is('lima/f') || request()->is('lima/f/*') ? ' active' : '' }}"
                                href="{{url('lima/f')}}">
                                <i class="si si-note"></i><span class="sidebar-mini-hide">Penulisan Buku
                                    Keinsinyuran</span>
                            </a>
                        </li>

                        <li class="nav-main-heading">
                            <span class="sidebar-mini-visible">KP</span><span
                                class="sidebar-mini-hidden text-primary">6. Kegiatan Penunjang Lain</span>
                        </li>

                        <li>
                            <a class="{{ request()->is('enam/a') || request()->is('enam/a/*') ? ' active' : '' }}"
                                href="{{url('enam/a')}}">
                                <i class="si si-note"></i><span class="sidebar-mini-hide">Sebagai Pakar atau Nara sumber
                                    pada bidang keinsinyuran (saksi ahli, tim ahli, dewan pakar dst)</span>
                            </a>
                        </li>
                        <li>
                            <a class="{{ request()->is('enam/b') || request()->is('enam/b/*') ? ' active' : '' }}"
                                href="{{url('enam/b')}}">
                                <i class="si si-note"></i><span class="sidebar-mini-hide">Pengurus organisasi profesi
                                    atau pimpinan lembaga / institusi</span>
                            </a>
                        </li>
                        <li>
                            <a class="{{ request()->is('enam/c') || request()->is('enam/c/*') ? ' active' : '' }}"
                                href="{{url('enam/c')}}">
                                <i class="si si-note"></i><span class="sidebar-mini-hide">Penerima tanda jasa, award,
                                    tanda penghargaan dan sejenisnya</span>
                            </a>
                        </li>

                        <!-- <li>
                            <a class="{{ request()->is('kp/selesaikp') || request()->is('kp/selesaikp/*') ? ' active' : '' }}"
                                href="{{route('kp.selesaikp.index')}}">
                                <i class="si si-envelope"></i><span class="sidebar-mini-hide">Selesai KP</span>
                            </a>
                        </li>
                        <li>
                            <a class="{{ request()->is('kp/seminar') || request()->is('kp/seminar/*') ? ' active' : '' }}"
                                href="{{url('/kp/seminar')}}">
                                <i class="si si-layers"></i><span class="sidebar-mini-hide">Seminar KP</span>
                            </a>
                        </li>
                        <li>
                            <a class="{{ request()->is('kp/laporan') || request()->is('kp/laporan/*') ? ' active' : '' }}"
                                href="{{url('/kp/laporan')}}">
                                <i class="si si-docs"></i><span class="sidebar-mini-hide">Laporan Seminar KP</span>
                            </a>
                        </li> -->

                        <!-- <li class="nav-main-heading">
                            <span class="sidebar-mini-visible">TA</span><span
                                class="sidebar-mini-hidden text-primary">Tugas Akhir</span>
                        </li>
                        <li>
                            <a class="{{ request()->is('kp/seminar') || request()->is('kp/seminar/*') ? ' active' : '' }}"
                                href="{{url('PresensiSeminarHasil')}}">
                                <i class="si si-note"></i><span class="sidebar-mini-hide">Bantuan Presensi Seminar
                                    Hasil</span>
                            </a>
                        </li> -->

                        <li class="{{ request()->is('ta/pengajuan/*') ? ' open' : '' }}">
                            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-bulb"></i><span
                                    class="sidebar-mini-hide">Tugas Akhir</span></a>
                            <ul>
                                <li>
                                    <a class="{{ request()->is('ta/pengajuan/pendaftaran') || request()->is('ta/pengajuan/pendaftaran/*') ? ' active' : '' }}"
                                        href="{{route('ta.pendaftaran.index')}}">Pendaftaran TA</a>
                                </li>
                                <li>
                                    <a class="{{ request()->is('ta/pengajuan/judul') || request()->is('ta/pengajuan/judul/*') ? ' active' : '' }}"
                                        href="{{route('ta.judul.index')}}">Perubahan Judul</a>
                                </li>
                                <li>
                                    <a class="{{ request()->is('ta/pengajuan/pembimbing') || request()->is('ta/pengajuan/pembimbing/*') ? ' active' : '' }}"
                                        href="{{route('ta.pembimbing.index')}}">Perubahan Pembimbing</a>
                                </li>
                                <li>
                                    <a class="{{ request()->is('ta/pengajuan/perpanjangan') ? ' active' : '' }}"
                                        href="{{route('ta.perpanjangan.index')}}">Perpanjangan TA</a>
                                </li>
                                <li>
                                    <a class="{{ request()->is('ta/pengajuan/pembatalan') ? ' active' : '' }}"
                                        href="{{route('ta.pembatalan.index')}}">Pembatalan TA</a>
                                </li>
                            </ul>
                        </li>

                        <!-- <li>
                            <a class="{{ request()->is('ta/logbook') || request()->is('ta/logbook/*') ? ' active' : '' }}"
                                href="{{route('ta.logbook.index')}}">
                                <i class="si si-book-open"></i><span class="sidebar-mini-hide">Log Book TA</span>
                            </a>
                        </li>
                        <li>
                            <a class="{{ request()->is('ta/semhas') || request()->is('ta/semhas/*') ? ' active' : '' }}"
                                href="{{route('ta.semhas.index')}}">
                                <i class="si si-magic-wand"></i><span class="sidebar-mini-hide">Seminar Hasil</span>
                            </a>
                        </li>
                        <li>
                            <a class="{{ request()->is('ta/pendadaran') || request()->is('ta/pendadaran/*') ? ' active' : '' }}"
                                href="{{route('ta.pendadaran.index')}}">
                                <i class="si si-graduation"></i><span class="sidebar-mini-hide">Pengajuan
                                    Pendadaran</span>
                            </a>
                        </li> -->

                        <!-- <li>
                            <a class="{{ request()->is('ta/wisuda') || request()->is('ta/wisuda/*') ? ' active' : '' }}"
                                href="{{route('ta.wisuda.index')}}">
                                <i class="si si-docs"></i><span class="sidebar-mini-hide">Kelengkapan Wisuda</span>
                            </a>
                        </li> -->

                        @endcan
                        @can('kaprodi')
                        <!-- <li class="nav-main-heading">
                            <span class="sidebar-mini-visible">KKP</span><span
                                class="sidebar-mini-hidden text-primary">Kaprodi</span>
                        </li>
                        <li>
                            <a class="{{ request()->is('kaprodi/listmahasiswa') || request()->is('kaprodi/listmahasiswa/*') ? ' active' : '' }}"
                                href="{{route('kaprodi.listmahasiswa.index')}}">
                                <i class="si si-list"></i><span class="sidebar-mini-hide">Mahasiswa</span>
                            </a>
                        </li>
                        <li>
                            <a class="{{ request()->is('kaprodi/kerjapraktek') || request()->is('kaprodi/kerjapraktek/*') ? ' active' : '' }}"
                                href="{{route('kaprodi.kerjapraktek.index')}}">
                                <i class="si si-feed"></i><span class="sidebar-mini-hide">Kerja Praktek</span>
                            </a>
                        </li>
                        <li>
                            <a class="{{ request()->is('kaprodi/tugasakhir') || request()->is('kaprodi/tugasakhir/*') ? ' active' : '' }}"
                                href="{{route('kaprodi.tugasakhir.index')}}">
                                <i class="si si-layers"></i><span class="sidebar-mini-hide">Tugas Akhir</span>
                            </a>
                        </li>
                        <li>
                            <a class="{{ request()->is('kaprodi/halpengesahan') || request()->is('kaprodi/halpengesahan/*') ? ' active' : '' }}"
                                href="{{route('kaprodi.halpengesahan.index')}}">
                                <i class="si si-layers"></i><span class="sidebar-mini-hide">Hal Pengesahan TA</span>
                            </a>
                        </li> -->
                        @endcan
                        @can('koordinatorkp')
                        <!-- <li class="nav-main-heading">
                            <span class="sidebar-mini-visible">KKP</span><span
                                class="sidebar-mini-hidden text-primary">Koordinator KP</span>
                        </li>
                        <li>
                            <a class="{{ request()->is('koordinator/kp/pembimbing') || request()->is('koordinator/kp/pembimbing/*') ? ' active' : '' }}"
                                href="{{route('admin.pembimbing.index')}}">
                                <i class="si si-users"></i>Pembimbing KP</a>
                        </li>
                        <li>
                            <a class="{{ request()->is('koordinator/kp/pengajuan') || request()->is('koordinator/kp/pengajuan/*') ? ' active' : '' }}"
                                href="{{route('admin.pengajuan.index')}}">
                                <i class="si si-doc"></i>Pengajuan KP</a>
                        </li>
                        <li>
                            <a class="{{ request()->is('koordinator/kp/permohonan') || request()->is('koordinator/kp/permohonan/*') ||
                                        request()->is('koordinator/kp/balasan') || request()->is('koordinator/kp/balasan/*') ? ' active' : '' }}"
                                href="{{route('admin.permohonan.index')}}">
                                <i class="si si-docs"></i>Permohonan & Surat Balasan KP</a>
                        </li>
                        <li>
                            <a class="{{ request()->is('koordinator/kp/penugasan') || request()->is('koordinator/kp/penugasan/*') ? ' active' : '' }}"
                                href="{{route('admin.penugasan.index')}}">
                                <i class="si si-folder"></i>Penugasan KP</a>
                        </li>
                        <li>
                            <a class="{{ request()->is('koordinator/kp/selesaikp') || request()->is('koordinator/kp/selesaikp/*') ? ' active' : '' }}"
                                href="{{route('admin.selesaikp.index')}}">
                                <i class="si si-envelope"></i>Selesai KP</a>
                        </li>
                        <li class="nav-main-heading">
                            <span class="sidebar-mini-visible">SKP</span><span
                                class="sidebar-mini-hidden text-warning">Seminar KP</span>
                        </li>
                        <li>
                            <a class="{{ request()->is('koordinator/kp/listsemkp') ? ' active' : '' }}"
                                href="{{route('admin.listsemkp.index')}}">
                                <i class="si si-clock"></i>List Countdown Seminar KP</a>
                        </li>
                        <li>
                            <a class="{{ request()->is('koordinator/kp/seminarkp') || request()->is('koordinator/kp/seminarkp/*') ? ' active' : '' }}"
                                href="{{route('admin.seminarkp.index')}}">
                                <i class="si si-calendar"></i>Pendaftaran Seminar KP</a>
                        </li>
                        <li>
                            <a class="{{ request()->is('koordinator/kp/presensi') || request()->is('koordinator/kp/presensi/*') ? ' active' : '' }}"
                                href="{{route('admin.presensi.index')}}">
                                <i class="si si-user-following"></i>Presensi Seminar KP</a>
                        </li>
                        <li>
                            <a class="{{ request()->is('koordinator/kp/laporan') || request()->is('koordinator/kp/laporan/*') ? ' active' : '' }}"
                                href="{{route('admin.laporan.index')}}">
                                <i class="si si-folder-alt"></i>Laporan KP</a>
                        </li>
                        <li>
                            <a class="{{ request()->is('koordinator/kp/nilaikp') ? ' active' : '' }}"
                                href="{{route('admin.nilaikp.index')}}">
                                <i class="si si-envelope-open"></i>Nilai KP</a>
                        </li> -->

                        @endcan
                        @can('koordinatorta')
                        <!-- <li class="nav-main-heading">
                            <span class="sidebar-mini-visible">KTA</span><span
                                class="sidebar-mini-hidden text-primary">Koordinator TA</span>
                        </li>
                        <li>
                            <a class="{{ request()->is('koordinator/logbookta') || request()->is('koordinator/logbookta/*') ? ' active' : '' }}"
                                href="{{url('/penguji')}}">
                                <i class="si si-folder-alt"></i><span class="sidebar-mini-hide">List Penguji</span>
                            </a>
                        </li>
                        <li>
                            <a class="{{ request()->is('koordinator/logbookta') || request()->is('koordinator/logbookta/*') ? ' active' : '' }}"
                                href="{{url('/batasan')}}">
                                <i class="si si-envelope"></i><span class="sidebar-mini-hide">Batasan Jumlah
                                    Bimbingan</span>
                            </a>
                        </li>
                        <li class="{{ request()->is('koordinator/ta/*') ? ' open' : '' }}">
                            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-star"></i><span
                                    class="sidebar-mini-hide">Tugas Akhir</span></a>
                            <ul>
                                <li>
                                    <a class="{{ request()->is('koordinator/ta/listta') || request()->is('koordinator/ta/listta/*') ? ' active' : '' }}"
                                        href="{{route('admin.listta.index')}}">
                                        List Tugas Akhir</a>
                                </li>
                                <li>
                                    <a class="{{ request()->is('koordinator/ta/pendaftaran') || request()->is('koordinator/ta/pendaftaran/*') ? ' active' : '' }}"
                                        href="{{route('admin.pendaftaran.index')}}">
                                        Pendaftaran Tugas Akhir</a>
                                </li>
                                <li>
                                    <a class="{{ request()->is('koordinator/ta/surattugas') || request()->is('koordinator/ta/surattugas/*') ? ' active' : '' }}"
                                        href="{{route('admin.surattugas.index')}}">
                                        Surat Tugas TA</a>
                                </li>
                                <li class="nav-main-heading">
                                    <span class="sidebar-mini-visible">SHTA</span><span
                                        class="sidebar-mini-hidden text-warning">Seminar Hasil</span>
                                </li>
                                <li>
                                    <a class="{{ request()->is('koordinator/ta/listsemhas') || request()->is('koordinator/ta/listsemhas/*') ? ' active' : '' }}"
                                        href="{{route('admin.listsemhas.index')}}">
                                        List Seminar Hasil TA</a>
                                </li>
                                <li>
                                    <a class="{{ request()->is('koordinator/ta/semhas') || request()->is('koordinator/ta/semhas/*') ? ' active' : '' }}"
                                        href="{{route('admin.semhas.index')}}">
                                        Seminar Hasil TA</a>
                                </li>
                                <li class="nav-main-heading">
                                    <span class="sidebar-mini-visible">PTA</span><span
                                        class="sidebar-mini-hidden text-warning">Pendadaran</span>
                                </li>
                                <li>
                                    <a class="{{ request()->is('koordinator/ta/listpendadaran') || request()->is('koordinator/ta/listpendadaran/*') ? ' active' : '' }}"
                                        href="{{route('admin.listpendadaran.index')}}">
                                        List Pendadaran TA</a>
                                </li>
                                <li>
                                    <a class="{{ request()->is('koordinator/ta/pendadaran') || request()->is('koordinator/ta/pendadaran/*') ? ' active' : '' }}"
                                        href="{{route('admin.pendadaran.index')}}">
                                        Pendadaran TA</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="{{ request()->is('koordinator/logbookta') || request()->is('koordinator/logbookta/*') ? ' active' : '' }}"
                                href="{{route('admin.logbookta.index')}}">
                                <i class="si si-book-open"></i><span class="sidebar-mini-hide">Log Book TA</span>
                            </a>
                        </li>
                        <li>
                            <a class="{{ request()->is('koordinator/perubahanjudul') || request()->is('koordinator/perubahanjudul/*') ? ' active' : '' }}"
                                href="{{route('admin.perubahanjudul.index')}}">
                                <i class="si si-tag"></i><span class="sidebar-mini-hide">Perubahan Judul TA</span>
                            </a>
                        </li>
                        <li>
                            <a class="{{ request()->is('koordinator/pembimbingta') || request()->is('koordinator/pembimbingta/*') ? ' active' : '' }}"
                                href="{{route('admin.pembimbingta.index')}}">
                                <i class="si si-shuffle"></i><span class="sidebar-mini-hide">Perubahan Pembimbing
                                    TA</span>
                            </a>
                        </li>
                        <li>
                            <a class="{{ request()->is('koordinator/perpanjanganta') || request()->is('koordinator/perpanjanganta/*') ? ' active' : '' }}"
                                href="{{route('admin.perpanjanganta.index')}}">
                                <i class="si si-control-forward"></i><span class="sidebar-mini-hide">Perpanjangan
                                    TA</span>
                            </a>
                        </li>
                        <li>
                            <a class="{{ request()->is('koordinator/pembatalanta') || request()->is('koordinator/pembatalanta/*') ? ' active' : '' }}"
                                href="{{route('admin.pembatalanta.index')}}">
                                <i class="si si-loop"></i><span class="sidebar-mini-hide">Pembatalan TA</span>
                            </a>
                        </li>
                        <li>
                            <a class="{{ request()->is('koordinator/halpengesahan') || request()->is('koordinator/halpengesahan/*') ? ' active' : '' }}"
                                href="{{route('admin.halpengesahan.index')}}">
                                <i class="fa fa-file-text-o"></i><span class="sidebar-mini-hide">Hal Pengesahan</span>
                            </a>
                        </li>
                        <li>
                            <a class="{{ request()->is('koordinator/exitsurvey') || request()->is('koordinator/exitsurvey/*') ? ' active' : '' }}"
                                href="{{route('admin.exitsurvey.index')}}">
                                <i class="fa fa-sign-out"></i><span class="sidebar-mini-hide">Exit Survey
                                    Mahasiswa</span>
                            </a>
                        </li> -->
                        @endcan
                        @can('koordinatorsel')
                        <!-- <li class="nav-main-heading">
                            <span class="sidebar-mini-visible">KBS</span><span
                                class="sidebar-mini-hidden text-primary">Koordinator SEL</span>
                        </li>
                        <li>
                            <a class="{{ request()->is('sel') || request()->is('sel/*') ? ' active' : '' }}"
                                href="{{route('admin.sel.index')}}">
                                <i class="si si-cup"></i><span class="sidebar-mini-hide">Koordinator SEL</span>
                            </a>
                        </li> -->
                        @endcan
                        @can('koordinatorsm')
                        <!-- <li class="nav-main-heading">
                            <span class="sidebar-mini-visible">KBSM</span><span
                                class="sidebar-mini-hidden text-primary">Koordinator SM</span>
                        </li>
                        <li>
                            <a class="{{ request()->is('meka') || request()->is('meka/*') ? ' active' : '' }}"
                                href="{{route('admin.meka.index')}}">
                                <i class="si si-cup"></i><span class="sidebar-mini-hide">Koordinator SM</span>
                            </a>
                        </li> -->
                        @endcan
                        @can('koordinatorict')
                        <!-- <li class="nav-main-heading">
                            <span class="sidebar-mini-visible">KBI</span><span
                                class="sidebar-mini-hidden text-primary">Koordinator ICT</span>
                        </li>
                        <li>
                            <a class="{{ request()->is('ict') || request()->is('ict/*') ? ' active' : '' }}"
                                href="{{route('admin.ict.index')}}">
                                <i class="si si-cup"></i><span class="sidebar-mini-hide">Koordinator ICT</span>
                            </a>
                        </li> -->
                        @endcan
                        @can('operatorta')
                        <!-- <li class="nav-main-heading">
                            <span class="sidebar-mini-visible">OTA</span><span
                                class="sidebar-mini-hidden text-primary">Operator TA</span>
                        </li>
                        <li>
                            <a class="{{ request()->is('opta/ta') || request()->is('opta/ta/*') ? ' active' : '' }}"
                                href="{{route('opta.ta.index')}}">
                                <i class="si si-doc"></i><span class="sidebar-mini-hide">Surat Tugas TA</span>
                            </a>
                        </li>
                        <li>
                            <a class="{{ request()->is('opta/semhas') || request()->is('opta/semhas/*') ? ' active' : '' }}"
                                href="{{route('opta.semhas.index')}}">
                                <i class="si si-docs"></i><span class="sidebar-mini-hide">Seminar Hasil TA</span>
                            </a>
                        </li>
                        <li>
                            <a class="{{ request()->is('opta/pendadaran') || request()->is('opta/pendadaran/*') ? ' active' : '' }}"
                                href="{{route('opta.pendadaran.index')}}">
                                <i class="si si-envelope"></i><span class="sidebar-mini-hide">Pendadaran TA</span>
                            </a>
                        </li> -->
                        @endcan
                        @can('koordinatorkp')
                        <!-- <li class="nav-main-heading">
                            <span class="sidebar-mini-visible">OTA</span><span
                                class="sidebar-mini-hidden text-primary">Report KP</span>
                        </li>
                        <li>
                            <a class="{{ request()->is('koordinator/reportpermohonan') || request()->is('koordinator/reportpermohonan/*') ? ' active' : '' }}"
                                href="{{route('admin.reportpermohonan.index')}}">
                                <i class="fa fa-files-o"></i><span class="sidebar-mini-hide">Permohonan KP</span>
                            </a>
                        </li>
                        <li>
                            <a class="{{ request()->is('koordinator/reportbalasan') || request()->is('koordinator/reportbalasan/*') ? ' active' : '' }}"
                                href="{{route('admin.reportbalasan.index')}}">
                                <i class="fa fa-file"></i><span class="sidebar-mini-hide">Balasan KP</span>
                            </a>
                        </li>
                        <li>
                            <a class="{{ request()->is('koordinator/reportpenugasan') || request()->is('koordinator/reportpenugasan/*') ? ' active' : '' }}"
                                href="{{route('admin.reportpenugasan.index')}}">
                                <i class="fa fa-file-text-o"></i><span class="sidebar-mini-hide">Penugasan KP</span>
                            </a>
                        </li> -->
                        @endcan
                    </ul>
                </div>
                <!-- END Side Navigation -->
            </div>
            <!-- Sidebar Content -->
        </nav>
        <!-- END Sidebar -->

        <!-- Header -->
        <header id="page-header">
            <!-- Header Content -->
            <div class="content-header">
                <!-- Left Section -->
                <div class="content-header-section">
                    <!-- Toggle Sidebar -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout"
                        data-action="sidebar_toggle">
                        <i class="fa fa-navicon"></i>
                    </button>
                    <!-- END Toggle Sidebar -->

                    <!-- Layout Options (used just for demonstration) -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-circle btn-dual-secondary"
                            id="page-header-options-dropdown" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="fa fa-wrench"></i>
                        </button>
                        <div class="dropdown-menu min-width-300" aria-labelledby="page-header-options-dropdown">
                            <h5 class="h6 text-center py-10 mb-10 border-b text-uppercase">Settings</h5>
                            <h6 class="dropdown-header">Color Themes</h6>
                            <div class="row no-gutters text-center mb-5">
                                <div class="col-2 mb-5">
                                    <a class="text-default" data-toggle="theme" data-theme="default"
                                        href="javascript:void(0)">
                                        <i class="fa fa-2x fa-circle"></i>
                                    </a>
                                </div>
                                <div class="col-2 mb-5">
                                    <a class="text-elegance" data-toggle="theme"
                                        data-theme="{{ asset('/css/themes/elegance.css') }}" href="javascript:void(0)">
                                        <i class="fa fa-2x fa-circle"></i>
                                    </a>
                                </div>
                                <div class="col-2 mb-5">
                                    <a class="text-pulse" data-toggle="theme"
                                        data-theme="{{ asset('/css/themes/pulse.css') }}" href="javascript:void(0)">
                                        <i class="fa fa-2x fa-circle"></i>
                                    </a>
                                </div>
                                <div class="col-2 mb-5">
                                    <a class="text-flat" data-toggle="theme"
                                        data-theme="{{ asset('/css/themes/flat.css') }}" href="javascript:void(0)">
                                        <i class="fa fa-2x fa-circle"></i>
                                    </a>
                                </div>
                                <div class="col-2 mb-5">
                                    <a class="text-corporate" data-toggle="theme"
                                        data-theme="{{ asset('/css/themes/corporate.css') }}" href="javascript:void(0)">
                                        <i class="fa fa-2x fa-circle"></i>
                                    </a>
                                </div>
                                <div class="col-2 mb-5">
                                    <a class="text-earth" data-toggle="theme"
                                        data-theme="{{ asset('/css/themes/earth.css') }}" href="javascript:void(0)">
                                        <i class="fa fa-2x fa-circle"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Layout Options -->
                </div>
                <!-- END Left Section -->

                <!-- Right Section -->
                <div class="content-header-section">
                    <!-- User Dropdown -->
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-rounded btn-dual-secondary" id="page-header-user-dropdown"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-user d-sm-none"></i>
                            <span class="d-none d-sm-inline-block">{{ Auth::user()->name }}</span>
                            <i class="fa fa-angle-down ml-5"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right min-width-200"
                            aria-labelledby="page-header-user-dropdown">
                            <h5 class="h6 text-center py-10 mb-5 border-b text-uppercase">User</h5>
                            <a class="dropdown-item" href="{{route('profil.index')}}">
                                <i class="si si-user mr-5"></i> Profile
                            </a>
                            @can('manage-users')
                            <a class="dropdown-item" href="{{ route('admin.users.index')}}">
                                <i class="si si-wrench mr-5"></i> User Management
                            </a>
                            @endcan
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i class="si si-logout mr-5"></i> Sign Out
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>
                    <!-- END User Dropdown -->
                </div>
                <!-- END Right Section -->
            </div>
            <!-- END Header Content -->


        </header>
        <!-- END Header -->

        <!-- Main Container -->
        <main id="main-container">
            @yield('content')
        </main>
        <!-- END Main Container -->

    </div>
    <!-- END Page Container -->

    <!-- Codebase Core JS -->
    <script src="{{ asset('js/codebase.app.js') }}"></script>
    <script src="{{ asset('js/my.js') }}"></script>
    <!-- Page JS Plugins -->
    <script src="{{ asset('js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{asset('/js/plugins/select2/js/select2.full.min.js')}}"></script>
    <script src="{{asset('/js/plugins/flatpickr/flatpickr.min.js')}}"></script>

    <!-- Page JS Code -->
    <script src="{{ asset('js/pages/tables_datatables.js') }}"></script>
    <!-- <script src="{{asset('/js/pages/be_forms_plugins.min.js')}}"></script> -->

    <!-- Laravel Scaffolding JS -->
    <!-- <script src="{{ asset('js/laravel.app.js') }}"></script> -->

    @yield('js_after')
</body>

</html>