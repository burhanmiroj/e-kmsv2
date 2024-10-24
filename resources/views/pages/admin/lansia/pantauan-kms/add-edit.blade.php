@extends('layouts.default', ['topMenu' => true, 'sidebarHide' => true])

@section('title', isset($data) ? 'Edit Pantauan KMS' : 'Create Pantauan KMS')

@push('css')
    <link href="{{ asset('/assets/plugins/smartwizard/dist/css/smart_wizard.css') }}" rel="stylesheet" />
    <link href="/assets/plugins/smartwizard/dist/css/smart_wizard.css" rel="stylesheet" />
@endpush

@section('content')
    <!-- begin breadcrumb -->
    <ol class="breadcrumb float-xl-right">
        <li class="breadcrumb-item"><a href="/admin/data-lansia/pantauankms">Pantauan KMS</a></li>

        <li class="breadcrumb-item active">@yield('title')</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Catatan Pantauan KMS</h1>
    <!-- end page-header -->


    <!-- begin panel -->
    <form action="{{ isset($data) ? route('admin.data-lansia.pantauankms.update', $data->id) : route('admin.data-lansia.pantauankms.store') }}"
        id="form" name="form" method="POST" data-parsley-validate="true" class="form-control-with-bg">
        @csrf
        @if (isset($data))
            {{ method_field('PUT') }}
        @endif
        <!-- begin wizard -->
        <div id="wizard">
            <!-- START : FORM STEP -->
            <ul>
                <li>
                    <a href="#step-1">
                        <span class="number" style="min-width: 30px; min-height: 30px; display: flex; justify-content: center; align-items: center;">1</span>
                        <span class="info">
                            KMS LANSIA
                            <small style="font-size: 10px; text-wrap: wrap">Tanggal Pemeriksaan, Nama Lansia, Penanggungjawab</small>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#step-2">
                        <span class="number" style="min-width: 30px; min-height: 30px; display: flex; justify-content: center; align-items: center;">2</span>
                        <span class="info">
                            KMS LANSIA
                            <small style="font-size: 10px; text-wrap: wrap">Lawton</small>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#step-3">
                        <span class="number" style="min-width: 30px; min-height: 30px; display: flex; justify-content: center; align-items: center;">3</span>
                        <span class="info">
                            KMS LANSIA
                            <small style="font-size: 10px; text-wrap: wrap">Barthel</small>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#step-4">
                        <span class="number" style="min-width: 30px; min-height: 30px; display: flex; justify-content: center; align-items: center;">4</span>
                        <span class="info">
                            KMS LANSIA
                            <small style="font-size: 10px; text-wrap: wrap">Nutrisi Gizi</small>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#step-5">
                        <span class="number" style="min-width: 30px; min-height: 30px; display: flex; justify-content: center; align-items: center;">5</span>
                        <span class="info">
                            KMS LANSIA
                            <small style="font-size: 10px; text-wrap: wrap">Indeks Masa Tubuh & Tekanan Darah</small>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#step-6">
                        <span class="number" style="min-width: 30px; min-height: 30px; display: flex; justify-content: center; align-items: center;">6</span>
                        <span class="info">
                            KMS LANSIA
                            <small style="font-size: 10px; text-wrap: wrap">Hemoglobin, Reduksi Urine, Protein Urine</small>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#step-7">
                        <span class="number" style="min-width: 30px; min-height: 30px; display: flex; justify-content: center; align-items: center;">7</span>
                        <span class="info">
                            KMS LANSIA
                            <small style="font-size: 10px; text-wrap: wrap">Gizi dan Keluhan Tindakan</small>
                        </span>
                    </a>
                </li>
            </ul>
            {{-- END : FORM STEP --}}
            <!-- START : FORM STEP CONTENT -->
            <div class="mt-3 border-t">
                <!-- START : STEP 1 -->
                <div id="step-1">
                    <!-- begin fieldset -->
                    <fieldset>
                        <!-- begin row -->
                        <div class="row">
                            <!-- begin col-8 -->
                            <div class="col-xl-8 offset-xl-2">
                                <legend class="no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse">Tanggal
                                    Pemeriksaan, Nama Lansia dan Penanggungjawab</legend>
                                <!-- begin form-group row -->
                                <div class="form-group row m-b-10">
                                    <label class="col-lg-3 text-lg-right col-form-label">Tanggal Pemeriksaan</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <input type="date" id="tanggal_pemeriksaan" name="tanggal_pemeriksaan"
                                            class="form-control" autofocus data-parsley-required="true"
                                            value="{{ $data->tanggal_pemeriksaan ?? old('tanggal_pemeriksaan') }}">
                                    </div>
                                </div>
                                <!-- end form-group row -->
                                <!-- begin form-group row -->
                                <div class="form-group row m-b-10">
                                    <label class="col-lg-3 text-lg-right col-form-label">Nama Lansia</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <x-form.Dropdown name="nama_lansia1" :options="$nama_lansia"
                                            selected="{{ old('nama_lansia1') ?? ($data['nama_lansia1'] ?? null) }}"
                                            required />
                                    </div>
                                </div>
                                <!-- end form-group row -->
                                <!-- begin form-group row -->
                                <div class="form-group row m-b-10">
                                    <label class="col-lg-3 text-lg-right col-form-label">Nama Penanggungjawab</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <x-form.Dropdown name="kader" :options="$kaders"
                                            selected="{{ old('kader') ?? ($data['kader'] ?? null) }}" required />
                                    </div>
                                </div>
                                <!-- end form-group row -->
                            </div>
                            <!-- end col-8 -->
                        </div>
                        <!-- end row -->
                    </fieldset>
                    <!-- end fieldset -->
                </div>
                <!-- END : STEP 1 -->
                <!-- START : STEP 2 -->
                <div id="step-2">
                    <!-- begin fieldset -->
                    <fieldset>
                        <!-- begin row -->
                        <div class="row">
                            <!-- begin col-8 -->
                            <div class="col-xl-8 offset-xl-2">
                                {{-- LAWTON --}}
                                <div class="card-body">
                                    {{-- 1. SINGLE QUESTION --}}
                                    <div class="mt-3 border-t">
                                        <label class="col-form-label">1. Dapat menggunakan telepon</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="one_lawton" id="exampleRadios1" value="3">
                                            <label class="form-check-label" for="exampleRadios1">Mengoperasikan telepon sendiri, mencari dan menghubungi nomor (skor : 3)</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="one_lawton" id="exampleRadios2" value="2">
                                            <label class="form-check-label" for="exampleRadios2">Menghubungi beberapa nomor yang diketahui (skor : 2)</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="one_lawton" id="exampleRadios3" value="1">
                                            <label class="form-check-label" for="exampleRadios3">Menjawab telepon tetapi tidak menghubungi (skor : 1)</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="one_lawton" id="exampleRadios4" value="0">
                                            <label class="form-check-label" for="exampleRadios4">Tidak bisa menggunakan telepon sama sekali (skor : 0)</label>
                                        </div>
                                    </div>
                                    {{-- 2. SINGLE QUESTION --}}
                                    <div class="mt-3 border-t">
                                        <label class="col-form-label">2. Mampu pergi ke suatu tempat</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="two_lawton" id="exampleRadios5" value="3">
                                            <label class="form-check-label" for="exampleRadios5">Berpergian sendiri menggunakan kendaraan umum/menyetir sendiri (skor : 3)</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="two_lawton" id="exampleRadios6" value="2">
                                            <label class="form-check-label" for="exampleRadios6">Mengatur perjalanan sendiri (skor : 2)</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="two_lawton" id="exampleRadios7" value="1">
                                            <label class="form-check-label" for="exampleRadios7">Perjalanan menggunakan transportasi umum jika ada yang menyertai (skor : 1)</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="two_lawton" id="exampleRadios8" value="0">
                                            <label class="form-check-label" for="exampleRadios8">Tidak melakukan perjalanan sama sekali (skor : 0)</label>
                                        </div>
                                    </div>
                                    {{-- 3. SINGLE QUESTION --}}
                                    <div class="mt-3 border-t">
                                        <label class="col-form-label">3. Dapat berbelanja</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="three_lawton" id="exampleRadios9" value="2">
                                            <label class="form-check-label" for="exampleRadios9">Mengatur semua kebutuhan belanja sendiri (skor : 2)</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="three_lawton" id="exampleRadios10" value="1">
                                            <label class="form-check-label" for="exampleRadios10">Perlu bantuan untuk mengantar belanja (skor : 1)</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="three_lawton" id="exampleRadios11" value="0">
                                            <label class="form-check-label" for="exampleRadios11">Sama sekali tidak mampu belanja (skor : 0)</label>
                                        </div>
                                    </div>
                                    {{-- 4. SINGLE QUESTION --}}
                                    <div class="mt-3 border-t">
                                        <label class="col-form-label">4. Dapat menyiapkan makanan</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="four_lawton" id="exampleRadios12" value="3">
                                            <label class="form-check-label" for="exampleRadios12">Merencanakan, menyiapkan, dan menghidangkan makanan (skor : 3)</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="four_lawton" id="exampleRadios13" value="2">
                                            <label class="form-check-label" for="exampleRadios13">Menyiapkan makanan jika sudah tersedia bahan makanan (skor : 2)</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="four_lawton" id="exampleRadios14" value="1">
                                            <label class="form-check-label" for="exampleRadios14">Menyiapkan makanan tetapi tidak mengatur diet yang cukup (skor : 1)</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="four_lawton" id="exampleRadios15" value="0">
                                            <label class="form-check-label" for="exampleRadios15">Perlu disiapkan dan dilayani (skor : 0)</label>
                                        </div>
                                    </div>
                                    {{-- 5. SINGLE QUESTION --}}
                                    <div class="mt-3 border-t">
                                        <label class="col-form-label">5. Dapat melakukan pekerjaan rumah tangga </label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="five_lawton" id="exampleRadios16" value="3">
                                            <label class="form-check-label" for="exampleRadios16">Merawat rumah sendiri atau bantuan kadang-kadang (skor : 3)</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="five_lawton" id="exampleRadios17" value="2">
                                            <label class="form-check-label" for="exampleRadios17">Mengerjakan pekerjaan ringan sehari-hari (merapikan tempat tidur, mencuci piring) (skor : 2)</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="five_lawton" id="exampleRadios18" value="1">
                                            <label class="form-check-label" for="exampleRadios18">Perlu bantuan untuk semua perawatan rumah sehari-hari (skor : 1)</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="five_lawton" id="exampleRadios19" value="0">
                                            <label class="form-check-label" for="exampleRadios19">Tidak berpartisipasi dalam perawatan rumah (skor : 0)</label>
                                        </div>
                                    </div>
                                    {{-- 6. SINGLE QUESTION --}}
                                    <div class="mt-3 border-t">
                                        <label class="col-form-label">6. Dapat mencuci pakaian</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="six_lawton" id="exampleRadios20" value="2">
                                            <label class="form-check-label" for="exampleRadios20">
                                                Mencuci semua pakaian sendiri (skor : 2)
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="six_lawton" id="exampleRadios21" value="1">
                                            <label class="form-check-label" for="exampleRadios21">
                                                Mencuci pakaian yang kecil (skor : 1)
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="six_lawton" id="exampleRadios23" value="0">
                                            <label class="form-check-label" for="exampleRadios23">Semua pakaian dicuci oleh orang lain (skor : 0)</label>
                                        </div>
                                    </div>
                                    {{-- 7. SINGLE QUESTION --}}
                                    <div class="mt-3 border-t">
                                        <label class="col-form-label">7. Dapat mengatur obat - obatan</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="seven_lawton" id="exampleRadios24" value="1">
                                            <label class="form-check-label" for="exampleRadios24">
                                                Meminum obat secara tepat dosis dan waktu tanpa bantuan (skor : 1)
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="seven_lawton" id="exampleRadios25" value="0">
                                            <label class="form-check-label" for="exampleRadios25">
                                                Tidak mampu menyiapkan obat sendiri (skor : 0)
                                            </label>
                                        </div>
                                    </div>
                                    {{-- 8. SINGLE QUESTION --}}
                                    <div class="mt-3 border-t">
                                        <label class="col-form-label">8. Dapat mengatur keuangan </label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="eight_lawton" id="exampleRadios26" value="2">
                                            <label class="form-check-label" for="exampleRadios26">
                                                Mengatur masalah finansial (tagihan, pergi ke bank) (skor : 2)
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="eight_lawton" id="exampleRadios27" value="1">
                                            <label class="form-check-label" for="exampleRadios27">
                                                Mengatur pengeluaran sehari-hari, tapi perlu bantuan untuk ke bank untuk transaksi penting (skor : 1)
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="eight_lawton" id="exampleRadios111" value="0">
                                            <label class="form-check-label" for="exampleRadios111">
                                                Tidak mampu mengambil keputusan finansial atau memegang uang (skor : 0)
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <!-- end form-group row -->
                            </div>
                            <!-- end col-8 -->
                        </div>
                        <!-- end row -->
                    </fieldset>
                    <!-- end fieldset -->
                </div>
                <!-- END : STEP 2 -->
                <!-- START : STEP 3 -->
                <div id="step-3">
                    <fieldset>
                        <div class="row">
                            <div class="col-xl-8 offset-xl-2">
                                {{-- BARTHEL --}}
                                <div class="card-body">
                                    {{-- 1. SINGLE QUESTION --}}
                                    <div class="mt-3 border-t">
                                        <label class="col-form-label">1. Mengendalikan rangsang BAB</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="one_barthel" id="exampleRadios31" value="1">
                                            <label class="form-check-label" for="exampleRadios31">Tidak terkendali/tak teratur (perlu pencahar) (skor : 0)</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="one_barthel" id="exampleRadios32" value="2">
                                            <label class="form-check-label" for="exampleRadios32">Kadang-kadang tak terkendali (1x/minggu) (skor : 1)</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="one_barthel" id="exampleRadios33" value="3">
                                            <label class="form-check-label" for="exampleRadios33">Terkendali/teratur (skor : 2)</label>
                                        </div>
                                    </div>
                                    {{-- 2. SINGLE QUESTION --}}
                                    <div class="mt-3 border-t">
                                        <label class="col-form-label">1. Mengendalikan rangsang BAK</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="two_barthel" id="exampleRadios131" value="1">
                                            <label class="form-check-label" for="exampleRadios131">Tak terkendali atau pakai kateter (skor : 0)</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="two_barthel" id="exampleRadios132" value="2">
                                            <label class="form-check-label" for="exampleRadios132">Kadang-kadang tak terkendali (hanya 1x/24jam) (skor : 1)</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="two_barthel" id="exampleRadios133" value="3">
                                            <label class="form-check-label" for="exampleRadios133">Mandiri (skor : 2)</label>
                                        </div>
                                    </div>
                                    {{-- 3. SINGLE QUESTION --}}
                                    <div class="mt-3 border-t">
                                        <label class="col-form-label">2. Membersihkan diri (mencuci wajah, menyikat rambut, mencukur kumis, sikat gigi)</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="three_barthel" id="exampleRadios34" value="1">
                                            <label class="form-check-label" for="exampleRadios34">Butuh pertolongan orang lain (skor : 0)</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="three_barthel" id="exampleRadios98" value="2">
                                            <label class="form-check-label" for="exampleRadios98">Mandiri (skor : 1)</label>
                                        </div>
                                    </div>
                                    {{-- 4. SINGLE QUESTIOn --}}
                                    <div class="mt-3 border-t">
                                        <label class="col-form-label">3. Penggunaan WC (keluar masuk WC, melepas/ memakai celana, cebok, menyiram)</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="four_barthel" id="exampleRadios35" value="1">
                                            <label class="form-check-label" for="exampleRadios35">Tergantung pertolongan orang lain (skor : 0)</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="four_barthel" id="exampleRadios36" value="2">
                                            <label class="form-check-label" for="exampleRadios36">Perlu pertolongan pada beberapa kegiatan, tetapi dapat mengerjakan sendiri beberapa kegiatan yang lain (skor : 1)</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="four_barthel" id="exampleRadios99" value="3">
                                            <label class="form-check-label" for="exampleRadios99">Mandiri (skor : 2)</label>
                                        </div>
                                    </div>
                                    {{-- 5. SINGLE QUESTION --}}
                                    <div class="mt-3 border-t">
                                        <label class="col-form-label">4. Makan</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="five_barthel" id="exampleRadios37" value="1">
                                            <label class="form-check-label" for="exampleRadios37">Tidak mampu (skor : 0)</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="five_barthel" id="exampleRadios38" value="2">
                                            <label class="form-check-label" for="exampleRadios38">Perlu ditolong memotong makanan (skor : 1)</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="five_barthel" id="exampleRadios39" value="3">
                                            <label class="form-check-label" for="exampleRadios39">Mandiri (skor : 2)</label>
                                        </div>
                                    </div>
                                    {{-- 6. SINGLE QUESTION --}}
                                    <div class="mt-3 border-t">
                                        <label class="col-form-label">. Berubah posisi dari berbaring ke duduk </label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="six_barthel" id="exampleRadios40" value="1">
                                            <label class="form-check-label" for="exampleRadios40">Tidak mampu (skor : 0)</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="six_barthel" id="exampleRadios41" value="2">
                                            <label class="form-check-label" for="exampleRadios41">Perlu banyak bantuan untuk bisa duduk (2 orang) (skor : 1)</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="six_barthel" id="exampleRadios42" value="3">
                                            <label class="form-check-label" for="exampleRadios42">Bantuan minimal 1 orang (skor : 2)</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="six_barthel" id="exampleRadios43" value="4">
                                            <label class="form-check-label" for="exampleRadios43">Mandiri (skor : 3)</label>
                                        </div>
                                    </div>
                                    {{-- 7. SINGLE QUESTION --}}
                                    <div class="mt-3 border-t">
                                        <label class="col-form-label">7. Berpindah/berjalan </label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="seven_barthel" id="exampleRadios44" value="1">
                                            <label class="form-check-label" for="exampleRadios44">Tidak mampu (skor : 0)</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="seven_barthel" id="exampleRadios45" value="2">
                                            <label class="form-check-label" for="exampleRadios45">Bisa (pindah) dengan kursi roda (skor : 1)</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="seven_barthel" id="exampleRadios46" value="3">
                                            <label class="form-check-label" for="exampleRadios46">Berjalan dengan bantuan 1 orang (skor : 2)</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="seven_barthel" id="exampleRadios47" value="4">
                                            <label class="form-check-label" for="exampleRadios47">Mandiri (skor : 3)</label>
                                        </div>
                                    </div>
                                    {{-- 8. SINGLE QUESTION --}}
                                    <div class="mt-3 border-t">
                                        <label class="col-form-label">8. Memakai baju</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="eight_barthel" id="exampleRadios48" value="1">
                                            <label class="form-check-label" for="exampleRadios48">Tergantung orang lain (skor : 0)</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="eight_barthel" id="exampleRadios49" value="2">
                                            <label class="form-check-label" for="exampleRadios49">Sebagian dibantu (misal mengancing baju) (skor : 1)</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="eight_barthel" id="exampleRadios50" value="3">
                                            <label class="form-check-label" for="exampleRadios50">Mandiri (skor : 2)</label>
                                        </div>
                                    </div>
                                    {{-- 9. SINGLE QUESTION --}}
                                    <div class="mt-3 border-t">
                                        <label class="col-form-label">9. Naik turun tangga</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="nine_barthel" id="exampleRadios51" value="1">
                                            <label class="form-check-label" for="exampleRadios51">Tidak mampu (skor : 0)</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="nine_barthel" id="exampleRadios52" value="2">
                                            <label class="form-check-label" for="exampleRadios52">Butuh pertolongan (skor : 1)</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="nine_barthel" id="exampleRadios53" value="3">
                                            <label class="form-check-label" for="exampleRadios53">Mandiri (skor : 2)</label>
                                        </div>
                                    </div>
                                    {{-- 10. SINGLE QUESTION --}}
                                    <div class="mt-3 border-t">
                                        <label class="col-form-label">10. Mandi</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="ten_barthel" id="exampleRadios54" value="1">
                                            <label class="form-check-label" for="exampleRadios54">Tergantung orang lain (skor : 0)</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="ten_barthel" id="exampleRadios55" value="2">
                                            <label class="form-check-label" for="exampleRadios55">Mandiri (skor :1)</label>
                                        </div>
                                    </div>
                    
                                </div>
                                <!-- end form-group row -->
                            </div>
                            <!-- end col-8 -->
                        </div>
                        <!-- end row -->
                    </fieldset>
                    <!-- end fieldset -->
                </div>
                <!-- END : STEP 3 -->
                <!-- START : STEP 4 -->
                <div id="step-4">
                    <!-- begin fieldset -->
                    <fieldset>
                        <!-- begin row -->
                        <div class="row">
                            <!-- begin col-8 -->
                            <div class="col-xl-8 offset-xl-2">
                                {{-- START : CARD --}}
                                <div class="card-body">
                                    {{-- 1. SINGLE QUESTION --}}
                                    <div class="mt-3 border-t">
                                        <label class="col-form-label">1. Apakah anda tinggal mandiri ? (bukan di panti/Rumah Sakit)?</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="one_nutrisigizi" id="exampleRadios28" value="0">
                                            <label class="form-check-label" for="exampleRadios28">Tidak (skor : 0)</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="one_nutrisigizi" id="exampleRadios29" value="1">
                                            <label class="form-check-label" for="exampleRadios29">Ya (skor : 1)</label>
                                        </div>
                                    </div>
                                    {{-- 2. SINGLE QUESTION --}}
                                    <div class="mt-3 border-t">
                                        <label class="col-form-label">2. Apakah anda menggunakan lebih dari tiga macam obat per hari?</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="two_nutrisigizi" id="exampleRadios31" value="1">
                                            <label class="form-check-label" for="exampleRadios31">Tidak (skor : 1)</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="two_nutrisigizi" id="exampleRadios32" value="0">
                                            <label class="form-check-label" for="exampleRadios32">Ya (skor : 0)</label>
                                        </div>
                                    </div>
                                    {{-- 3. SINGLE QUESTION --}}
                                    <div class="mt-3 border-t">
                                        <label class="col-form-label">3. Membersihkan diri (mencuci wajah, menyikat rambut, mencukur kumis, sikat gigi)</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="three_nutrisigizi" id="exampleRadios34" value="1">
                                            <label class="form-check-label" for="exampleRadios34">Tidak (skor : 1)</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="three_nutrisigizi" id="exampleRadios98" value="0">
                                            <label class="form-check-label" for="exampleRadios98">Ya (skor : 0)</label>
                                        </div>
                                    </div>
                                    {{-- 4. SINGLE QUESTION --}}
                                    <div class="mt-3 border-t">
                                        <label class="col-form-label">4. Berapa kali anda mengonsumsi makan lengkap/utama per hari ?</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="four_nutrisigizi" id="exampleRadios99" value="0">
                                            <label class="form-check-label" for="exampleRadios99">1 Kali (skor : 0)</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="four_nutrisigizi" id="exampleRadios100" value="1">
                                            <label class="form-check-label" for="exampleRadios100">2 Kali (skor : 1)</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="four_nutrisigizi" id="exampleRadios101" value="2">
                                            <label class="form-check-label" for="exampleRadios101">3 Kali (skor : 2)</label>
                                        </div>
                                    </div>
                                    {{-- 5.1 SINGLE QUESTION --}}
                                    <div class="mt-3 border-t">
                                        <label class="col-form-label">5.1. Berapa banyak anda mengonsumsi makanan sumber protein? Sedikitnya 1 porsi dairy produk (seperti susu, keju, yogurt) per hari ya/tidak</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="five_one_nutrisigizi" id="exampleRadios102" value="0">
                                            <label class="form-check-label" for="exampleRadios102">Tidak (skor : 0)</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="five_one_nutrisigizi" id="exampleRadios103" value="1">
                                            <label class="form-check-label" for="exampleRadios103">Ya (skor : 1)</label>
                                        </div>
                                    </div>
                                    {{-- 5.2 SINGLE QUESTION --}}
                                    <div class="mt-3 border-t">
                                        <label class="col-form-label">5.2. atau lebih porsi kacang-kacangan atau telur per minggu ya / tidak</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="five_two_nutrisigizi" id="exampleRadios104" value="0">
                                            <label class="form-check-label" for="exampleRadios104">Tidak (skor : 0)</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="five_two_nutrisigizi" id="exampleRadios105" value="1">
                                            <label class="form-check-label" for="exampleRadios105">Ya (skor : 1)</label>
                                        </div>
                                    </div>
                                    {{-- 5.3 SINGLE QUESTION --}}
                                    <div class="mt-3 border-t">
                                        <label class="col-form-label">5.3. Daging ikan atau unggas setiap hari ya / tidak</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="five_three_nutrisigizi" id="exampleRadios106" value="0">
                                            <label class="form-check-label" for="exampleRadios106">Tidak (skor : 0)</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="five_three_nutrisigizi" id="exampleRadios107" value="1">
                                            <label class="form-check-label" for="exampleRadios107">Ya (skor : 1)</label>
                                        </div>
                                    </div>
                                    {{-- 6. SINGLE QUESTION --}}
                                    <div class="mt-3 border-t">
                                        <label class="col-form-label">6. Apakah anda mengkonsumsi buah atau sayur sebanyak 2 porsi atau lebih per hari?</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="six_nutrisigizi" id="exampleRadios108" value="0">
                                            <label class="form-check-label" for="exampleRadios108">Tidak (skor : 0)</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="six_nutrisigizi" id="exampleRadios109" value="1">
                                            <label class="form-check-label" for="exampleRadios109">Ya (skor : 1)</label>
                                        </div>
                                    </div>
                                    {{-- 7. SINGLE QUESTION --}}
                                    <div class="mt-3 border-t">
                                        <label class="col-form-label">7. Berapa banyak cairan (air, jus, kopi, teh, susu) yang dikonsumsi per hari?</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="seven_nutrisigizi" id="exampleRadios110" value="0">
                                            <label class="form-check-label" for="exampleRadios110">kurang dari 3 gelas (score 0)</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="seven_nutrisigizi" id="exampleRadios111" value="0.5">
                                            <label class="form-check-label" for="exampleRadios111">3-5 gelas (score 0.5)</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="seven_nutrisigizi" id="exampleRadios112" value="1">
                                            <label class="form-check-label" for="exampleRadios112">lebih dari 5 gelas (score 1)</label>
                                        </div>
                                    </div>
                                    {{-- 8. SINGLE QUESTION --}}
                                    <div class="mt-3 border-t">
                                        <label class="col-form-label">8. Bagaimana cara makan?</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="eight_nutrisigizi" id="exampleRadios113" value="0">
                                            <label class="form-check-label" for="exampleRadios113">Harus disuapi (skor : 0)</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="eight_nutrisigizi" id="exampleRadios114" value="1">
                                            <label class="form-check-label" for="exampleRadios114">Bisa makan sendiri dengan sedikit kesulitan (skor : 1)</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="eight_nutrisigizi" id="exampleRadios115" value="2">
                                            <label class="form-check-label" for="exampleRadios115">Makan sendiri tanpa kesulitan apapun juga (skor : 2)</label>
                                        </div>
                                    </div>
                                    {{-- 9. SINGLE QUESTION --}}
                                    <div class="mt-3 border-t">
                                        <label class="col-form-label">9. Pandangan sendiri mengenai status gizi anda?</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="nine_nutrisigizi" id="exampleRadios116" value="0">
                                            <label class="form-check-label" for="exampleRadios116">Merasa malnutrisi (skor : 0)</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="nine_nutrisigizi" id="exampleRadios117" value="1">
                                            <label class="form-check-label" for="exampleRadios117">Tidak yakin mengenai status gizi (skor : 1)</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="nine_nutrisigizi" id="exampleRadios118" value="2">
                                            <label class="form-check-label" for="exampleRadios118">Tidak ada masalah gizi (skor : 2)</label>
                                        </div>
                                    </div>
                                    {{-- 10. SINGLE QUESTION --}}
                                    <div class="mt-3 border-t">
                                        <label class="col-form-label">10. Jika dibandingkan dengan kesehatan orang lain yang sebaya/seumur, bagaimana anda mempertimbangkan keadaan anda dibandingkan orang tersebut?</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="ten_nutrisigizi" id="exampleRadios119" value="0">
                                            <label class="form-check-label" for="exampleRadios119">Tidak sebaik dia (score 0)</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="ten_nutrisigizi" id="exampleRadios120" value="0.5">
                                            <label class="form-check-label" for="exampleRadios120">Tidak tahu (score 0.5)</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="ten_nutrisigizi" id="exampleRadios121" value="1">
                                            <label class="form-check-label" for="exampleRadios121">Sama baiknya (score 1)</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="ten_nutrisigizi" id="exampleRadios122" value="2">
                                            <label class="form-check-label" for="exampleRadios122">Lebih baik (score 2)</label>
                                        </div>
                                    </div>
                                    {{-- 11. SINGLE QUESTION --}}
                                    <div class="mt-3 border-t">
                                        <label class="col-form-label">11. Lingkar lengan atas (cm)?</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="eleven_nutrisigizi" id="exampleRadios123" value="0">
                                            <label class="form-check-label" for="exampleRadios123">< 21 cm (score 0)</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="eleven_nutrisigizi" id="exampleRadios124" value="0.5">
                                            <label class="form-check-label" for="exampleRadios124">21 – 22 cm (score 0.5)</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="eleven_nutrisigizi" id="exampleRadios125" value="1">
                                            <label class="form-check-label" for="exampleRadios125">≥22 cm (score 1)</label>
                                        </div>
                                    </div>
                                    {{-- 12. SINGLE QUESTION --}}
                                    <div class="mt-3 border-t">
                                        <label class="col-form-label">12. Lingkar betis?</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="twelve_nutrisigizi" id="exampleRadios126" value="0">
                                            <label class="form-check-label" for="exampleRadios126">< 31 cm (score 0)</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="twelve_nutrisigizi" id="exampleRadios127" value="1">
                                            <label class="form-check-label" for="exampleRadios127">> 31 cm (score 1)</label>
                                        </div>
                                    </div>
                                </div>
                                {{-- END : CARD BODY --}}
                            </div>
                            <!-- end col-8 -->
                        </div>
                        <!-- end row -->
                    </fieldset>
                    <!-- end fieldset -->
                </div>
                <!-- END : STEP 4 -->
                <!-- START : STEP 5 -->
                <div id="step-5">
                    <!-- begin fieldset -->
                    <fieldset>
                        <!-- begin row -->
                        <div class="row">
                            <div class="col-xl-8 offset-xl-2">
                                <legend class="no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse">Indeks Masa Tubuh
                                </legend>
                                <!-- begin form-group row -->
                                <div class="form-group row m-b-10">
                                    <label class="col-lg-3 text-lg-right col-form-label">Tinggi Badan (cm)</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <input type="number" id="tb" name="tb" onkeyup="hitung();"
                                            class="form-control" autofocus data-parsley-required="true"
                                            value="{{ $data->tb ?? old('tb') }}">
                                    </div>
                                </div>
                                <!-- end form-group row -->
                                <!-- begin form-group row -->
                                <div class="form-group row m-b-10">
                                    <label class="col-lg-3 text-lg-right col-form-label">Berat Badan (kg)</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <input type="number" id="bb" onkeyup="hitung();" name="bb"
                                            class="form-control" autofocus data-parsley-required="true"
                                            value="{{ $data->bb ?? old('bb') }}">
                                    </div>
                                </div>
                                <!-- end form-group row -->
                                <!-- begin form-group row -->
                                <div class="form-group row m-b-10">
                                    {{-- <label class="col-lg-3 text-lg-right col-form-label">Hasil</label> --}}
                                    <div class="col-lg-9 col-xl-6">
                                        <input type="hidden" id="hasil" name="hasil" onkeyup="hitung();"
                                            class="form-control" autofocus data-parsley-required="true"
                                            value="{{ $data->hasil ?? old('hasil') }}">
                                    </div>
                                </div>
                                <!-- end form-group row -->
                                <!-- begin form-group row -->
                                <div class="form-group row m-b-10">
                                    <label class="col-lg-3 text-lg-right col-form-label">Indeks Massa Tubuh</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <input type="text" id="indeks_massa_tubuh" name="indeks_massa_tubuh"
                                            class="form-control" autofocus data-parsley-required="false"
                                            onkeyup="hitung();"
                                            value="{{ $data->indeks_massa_tubuh ?? old('indeks_massa_tubuh') }}">
                                    </div>
                                </div>
                                <!-- end form-group row -->
                                <legend class="no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse">Tekanan Darah
                                </legend>
                                <!-- begin form-group row -->
                                <div class="form-group row m-b-10">
                                    <label class="col-lg-3 text-lg-right col-form-label">Sistole</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <input type="text" id="sistol" name="sistol" class="form-control"
                                            autofocus data-parsley-required="true" onkeyup="tekanan();"
                                            value="{{ $data->sistol ?? old('sistol') }}">
                                    </div>
                                </div>
                                <!-- end form-group row -->
                                <!-- begin form-group row -->
                                <div class="form-group row m-b-10">
                                    <label class="col-lg-3 text-lg-right col-form-label">Diastole</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <input type="text" id="diastol" name="diastol" class="form-control"
                                            autofocus data-parsley-required="true" onkeyup="tekanan();"
                                            value="{{ $data->diastol ?? old('diastol') }}">
                                    </div>
                                </div>
                                <!-- end form-group row -->
                                <!-- begin form-group row -->
                                <div class="form-group row m-b-10">
                                    <label class="col-lg-3 text-lg-right col-form-label">Tekanan Darah</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <input type="text" id="tekanan_darah" name="tekanan_darah"
                                            onkeyup="tekanan();" class="form-control" autofocus
                                            data-parsley-required="true"
                                            value="{{ $data->tekanan_darah ?? old('tekanan_darah') }}">
                                    </div>
                                </div>
                                <!-- end form-group row -->
                                <!-- begin form-group row -->
                                <div class="form-group row m-b-10">
                                    <label class="col-lg-3 text-lg-right col-form-label">Dgn Obat</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <input type="text" id="dengan_obat" name="dengan_obat" class="form-control"
                                            value="{{ $data->dengan_obat ?? old('dengan_obat') }}">
                                        <span>+ : Bila usia lanjut diberi obat <br>- : Bila usia lanjut tidak diberi obat
                                        </span>
                                    </div>
                                </div>
                                <!-- end form-group row -->
                                <!-- begin form-group row -->
                                <div class="form-group row m-b-10">
                                    <label class="col-lg-3 text-lg-right col-form-label">Nadi</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <input type="text" id="nadi" name="nadi" class="form-control"
                                            value="{{ $data->nadi ?? old('nadi') }}">
                                    </div>
                                </div>
                                <!-- end form-group row -->
                            </div>
                        </div>
                        <!-- end row -->
                    </fieldset>
                    <!-- end fieldset -->
                </div>
                <!-- END : STEP 5 -->
                <!-- START : STEP 6 -->
                <div id="step-6">
                    <!-- begin fieldset -->
                    <fieldset>
                        <!-- begin row -->
                        <div class="row">
                            <!-- begin col-8 -->
                            <div class="col-xl-8 offset-xl-2">
                                <legend class="no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse">Hemoglobin
                                </legend>
                                <!-- begin form-group row -->
                                <div class="form-group row m-b-10">
                                    <label class="col-lg-3 text-lg-right col-form-label">Hemoglobin</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <input type="radio" id="hemoglobin" name="hemoglobin" value="Positif" {{ isset($data) ? ($data->hemoglobin == 'Positif' ? 'checked' : '') : '' }}>
                                        <label for="Kurang">Kurang</label><br>
                                        <input type="radio" id="hemoglobin" name="hemoglobin" value="Normal" {{ isset($data) ? ($data->hemoglobin == 'Normal' ? 'checked' : '') : '' }}>
                                        <label for="Normal">Normal</label><br>

                                    </div>
                                </div>
                                <!-- end form-group row -->
                                <!-- begin form-group row -->
                                <div class="form-group row m-b-10">
                                    <label class="col-lg-3 text-lg-right col-form-label"> g% atau %</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <input type="text" id="g_hemoglobin" name="g_hemoglobin" class="form-control"
                                            value="{{ $data->g_hemoglobin ?? old('g_hemoglobin') }}">
                                        <span>Normal = L ≥ 13g% , P ≥ 12g%, Talquist ≥ 70%</span>
                                    </div>
                                </div>
                                <!-- end form-group row -->
                                <legend class="no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse">
                                    Reduksi Urine</legend>
                                <!-- begin form-group row -->
                                <div class="form-group row m-b-10">
                                    <label class="col-lg-3 text-lg-right col-form-label">Reduksi Urine</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <input type="radio" id="reduksi_urine" name="reduksi_urine" value="Positif" value="Positif" {{ isset($data) ? ($data->reduksi_urine == 'Positif' ? 'checked' : '') : '' }}>
                                        <label for="Positif">Positif</label><br>
                                        <input type="radio" id="reduksi_urine" name="reduksi_urine" value="Normal" {{ isset($data) ? ($data->reduksi_urine == 'Normal' ? 'checked' : '') : '' }}>
                                        <label for="Normal">Normal</label><br>

                                    </div>
                                </div>
                                <!-- end form-group row -->
                                <!-- begin form-group row -->
                                <div class="form-group row m-b-10">
                                    <label class="col-lg-3 text-lg-right col-form-label"> Jumlah Tanda +</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <input type="text" id="jumlahtanda" name="jumlahtanda" class="form-control"
                                            value="{{ $data->jumlahtanda ?? old('jumlahtanda') }}">
                                    </div>
                                </div>
                                <!-- end form-group row -->
                                <!-- begin form-group row -->
                                <div class="form-group row m-b-10">
                                    <label class="col-lg-3 text-lg-right col-form-label">Dgn Obat</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <input type="text" id="dengan_obat_reduksi" name="dengan_obat_reduksi"
                                            class="form-control"
                                            value="{{ $data->dengan_obat_reduksi ?? old('dengan_obat_reduksi') }}">
                                        <span>+ : Bila usia lanjut diberi obat <br>- : Bila usia lanjut tidak diberi obat
                                        </span>
                                    </div>
                                </div>
                                <!-- end form-group row -->
                                <legend class="no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse">Protein Urine
                                </legend>
                                <!-- begin form-group row -->
                                <div class="form-group row m-b-10">
                                    <label class="col-lg-3 text-lg-right col-form-label">Protein Urine</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <input type="radio" id="protein_urine" name="protein_urine" value="Positif" {{ isset($data) ? ($data->protein_urine == 'Positif' ? 'checked' : '') : '' }}>
                                        <label for="Positif">Positif</label><br>
                                        <input type="radio" id="protein_urine" name="protein_urine" value="Normal" {{ isset($data) ? ($data->protein_urine == 'Positif' ? 'checked' : '') : '' }}>
                                        <label for="Normal">Normal</label><br>
                                    </div>
                                </div>
                                <!-- end form-group row -->
                                <!-- begin form-group row -->
                                <div class="form-group row m-b-10">
                                    <label class="col-lg-3 text-lg-right col-form-label"> Jumlah Tanda +</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <input type="text" id="jumlah_tanda" name="jumlah_tanda" class="form-control"
                                            value="{{ $data->jumlah_tanda ?? old('jumlah_tanda') }}">
                                    </div>
                                </div>
                                <!-- end form-group row -->
                                <!-- begin form-group row -->
                                <div class="form-group row m-b-10">
                                    <label class="col-lg-3 text-lg-right col-form-label">Dgn Obat</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <input type="text" id="dengan_obat_protein" name="dengan_obat_protein"
                                            class="form-control"
                                            value="{{ $data->dengan_obat_protein ?? old('dengan_obat_protein') }}">
                                        <span>+ : Bila usia lanjut diberi obat <br>- : Bila usia lanjut tidak diberi obat
                                        </span>
                                    </div>
                                </div>
                                <!-- end form-group row -->
                            </div>
                            <!-- end col-8 -->
                        </div>
                        <!-- end row -->
                    </fieldset>
                    <!-- end fieldset -->
                </div>
                <!-- END : STEP 6 -->
                <!-- START : STEP 7 -->
                <div id="step-7">
                    <!-- begin fieldset -->
                    <fieldset>
                        <!-- begin row -->
                        <div class="row">
                            <!-- begin col-8 -->
                            <div class="col-xl-8 offset-xl-2">
                                <!-- end form-group row -->
                                <legend class="no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse">Keluhan Tindakan</legend>
                                <!-- begin form-group row -->
                                <div class="form-group row m-b-10">
                                    <label class="col-lg-3 text-lg-right col-form-label">Keluhan</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <input type="text" id="keluhan" name="keluhan" class="form-control"
                                            autofocus data-parsley-required="true"
                                            value="{{ $data->keluhan ?? old('keluhan') }}">
                                    </div>
                                </div>
                                <!-- end form-group row -->
                                <!-- begin form-group row -->
                                <div class="form-group row m-b-10">
                                    <label class="col-lg-3 text-lg-right col-form-label">Tindakan</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <input type="text" id="tindakan" name="tindakan" class="form-control"
                                            autofocus data-parsley-required="true"
                                            value="{{ $data->tindakan ?? old('tindakan') }}">
                                    </div>
                                </div>
                                <!-- end form-group row -->
                            </div>
                            <!-- end col-8 -->
                        </div>
                        <button type="submit" class="btn btn-primary float-right mr-4">Simpan</button>
                        <!-- end row -->
                    </fieldset>
                    <!-- end fieldset -->

                </div>
                <!-- END : STEP 7 -->
            </div>
            <!-- end wizard-content -->
        </div>
        <!-- end wizard -->
    </form>
    <a href="javascript:history.back(-1);" class="btn btn-success">
        <i class="fa fa-arrow-circle-left"></i> Kembali
    </a>

@endsection

@push('scripts')
    <script src="{{ asset('/assets/plugins/parsleyjs/dist/parsley.js') }}"></script>
    <script src="/assets/plugins/smartwizard/dist/js/jquery.smartWizard.js"></script>
    <script src="/assets/js/demo/form-wizards.demo.js"></script>
    <script>
        function hitung() {
            var txtFirstNumberValue = document.getElementById('tb').value / 100;
            var txtSecondNumberValue = document.getElementById('bb').value;
            var result = Math.ceil((txtSecondNumberValue) / ((txtFirstNumberValue) * (txtFirstNumberValue)));

            if (result < 17) {
                ab = "Berat Kurang";
                gizi = "Diberikan Gizi Tambahan";
            } else if (result >= 17 && result < 18) {
                ab = "Berat Kurang";
                gizi = "Diberikan Gizi Tambahan";
            } else if (result >= 18 && result < 25) {
                ab = "Normal";
                gizi = "-";
            } else if (result >= 25 && result < 27) {
                ab = "Berat Lebih"
                gizi = "-";
            } else {
                ab = "Berat Lebih"
                gizi = "-";
            }
            document.getElementById('hasil').value = result;
            document.getElementById('indeks_massa_tubuh').value = ab;
            document.getElementById('gizi').value = gizi;
        }
        
        function tekanan() {
            var txtFirstNumberValue = document.getElementById('sistol').value;
            var txtSecondNumberValue = document.getElementById('diastol').value * 2;
            var result = ((parseInt(txtSecondNumberValue) + parseInt(txtFirstNumberValue)) / 3);

            if (result < 70) {
                tek = "Rendah";
            } else if (result >= 70 && result < 110) {
                tek = "Normal";
            } else {
                tek = "Tinggi";
            }
            document.getElementById('tekanan_darah').value = tek;

        }
    </script>
@endpush
