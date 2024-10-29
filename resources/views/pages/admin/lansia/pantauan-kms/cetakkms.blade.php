<!DOCTYPE html>
<html lang="en">
<p style="text-align: center;">&nbsp;</p>
<h4 style="text-align: center;">PENCATATAN DAN HASIL KEGIATAN KESEHATAN DI KELOMPOK USIA LANJUT</h4>
<p style="text-align: center;">&nbsp;</p>

<p>Nama Lansia : {{ $lansia->lansia->nama_lansia }}</p>
<p>No KMS : {{ $lansia->lansia->no_kms }}</p>
<p>Desa/Kelurahan : Bugangan</p>
{{-- <p>Puskesmas :</p> --}}
<p>Kecamatan : Kedungwuni</p>
{{-- <p>&nbsp;</p> --}}
<div class="form-group">
    <table class="table table-bordered my-5" align="center" rules="all" border="1px"
        style="width: 95%; margin-top: 1 rem;
    margin-bottom: 1 rem;">
        <tbody>
            <tr>
                <th scope="col" style="width: 400px;">Kunjungan Ke</th>
                @foreach ($data as $cetakkms)
                    <th scope="col">{{ $loop->iteration }}</th>
                @endforeach
            </tr>
            <tr>
                <th scope="col"> Tanggal</th>
                @foreach ($data as $cetakkms)
                    <th> {{ $cetakkms->tanggal_pemeriksaan }}</th>
                @endforeach
            </tr>
            {{-- 
                START : INSTRUMENTAL 
            --}}
            <tr>
                <th scope="row" class="bg-secondary text-white">Instrumental aktifitas kehidupan sehari hari lawton</th>
            </tr>
            <tr>
                <th scope="row">Dikerjakan oleh orang lain (0)</th>
                @foreach ($pantauan as $cetakkms)
                    <th scope="col" style="background-color: #ff0000;">
                        @if (intval($totalScoreLawton->total_lawton) == 0)
                            <span>✓</span>
                        @endif
                    </th>
                @endforeach
            </tr>
            <tr>
                <th scope="row">Perlu bantuan sepanjang waktu (1)</th>
                @foreach ($pantauan as $cetakkms)
                    <th scope="col" style="background-color: #ffee00;">
                        @if (intval($totalScoreLawton->total_lawton) == 1)
                        <span>✓</span>
                    @endif</th>
                @endforeach
            </tr>
            <tr>
                <th scope="row">Perlu bantuan sesekali (2)</th>
                @foreach ($pantauan as $cetakkms)
                    <th scope="col" style="background-color: #0ccb7c;">
                        @if (intval($totalScoreLawton->total_lawton) == 2)
                            <span>✓</span>
                        @endif
                    </th>
                @endforeach
            </tr>
            <tr>
                <th scope="row">Independen/mandiri (3-8)</th>
                @foreach ($pantauan as $cetakkms)
                    <th scope="col" style="background-color: #008cff;">
                        @if (intval($totalScoreLawton->total_lawton) > 2)
                            <span>✓</span>
                        @endif
                    </th>
                @endforeach
            </tr>
            {{-- 
                START : BARTHEL 
            --}}
            <tr>
                <th scope="row" class="bg-secondary text-white"><br>Skor barthel index (Nilai AKS/ADL)</th>
            </tr>
            <tr>
                <th scope="row">Mandiri (20)</th>
                @foreach ($pantauan as $cetakkms)
                    <th scope="col" style="background-color: #f6edb9;">
                        @if (intval($totalScoreBarthel->total_barthel) == 20)
                            <span>✓</span>
                        @endif
                    </th>
                @endforeach
            </tr>
            <tr>
                <th scope="row">Ketergantungan ringan (12-19)</th>
                @foreach ($pantauan as $cetakkms)
                    <th scope="col" style="background-color: #008cff;">
                        @if ((intval($totalScoreBarthel->total_barthel) > 11) && (intval($totalScoreBarthel->total_barthel) < 20))
                            <span>✓</span>
                        @endif
                    </th>
                @endforeach
            </tr>
            <tr>
                <th scope="row">Ketergantungan sedang (9-11)</th>
                @foreach ($pantauan as $cetakkms)
                    <th scope="col" style="background-color: #0ccb7c;">
                        @if ((intval($totalScoreBarthel->total_barthel) > 8) && (intval($totalScoreBarthel->total_barthel) < 12))
                            <span>✓</span>
                        @endif
                    </th>
                @endforeach
            </tr>
            <tr>
                <th scope="row">Ketergantungan berat (5-8)</th>
                @foreach ($pantauan as $cetakkms)
                    <th scope="col" style="background-color: #ffee00;">
                        @if ((intval($totalScoreBarthel->total_barthel) > 4) && (intval($totalScoreBarthel->total_barthel) < 9))
                            <span>✓</span>
                        @endif
                    </th>
                @endforeach
            </tr>
            <tr>
                <th scope="row">Ketergantungan total (0-4)</th>
                @foreach ($pantauan as $cetakkms)
                    <th scope="col" style="background-color: #ff0000;">
                        @if ((intval($totalScoreBarthel->total_barthel) < 1) && (intval($totalScoreBarthel->total_barthel) < 5))
                            <span>✓</span>
                        @endif
                    </th>
                @endforeach
            </tr>
            {{-- 
                START : NUTRISI GIZI 
            --}}
            <tr>
                <th scope="row" class="bg-secondary text-white">Nutrisi Gizi</th>
            </tr>
            <tr>
                <th scope="row">Normal (>23.5)</th>
                @foreach ($pantauan as $cetakkms)
                    <th scope="col" style="background-color: #0ccb7c;">
                        @if (intval($totalScoreNutrisiGizi->total_nutrisi_gizi) > 23.5)
                            <span>✓</span>
                        @endif
                    </th>
                @endforeach
            </tr>
            <tr>
                <th scope="row">Beresiko malnutrisi (17-23.5)</th>
                @foreach ($pantauan as $cetakkms)
                    <th scope="col" style="background-color: #ffee00;">
                        @if ((intval($totalScoreNutrisiGizi->total_nutrisi_gizi) > 16) && (intval($totalScoreNutrisiGizi->total_nutrisi_gizi) < 24))
                            <span>✓</span>
                        @endif
                    </th>
                @endforeach
            </tr>
            <tr>
                <th scope="row">Malnutrisi (<17)</th>
                @foreach ($pantauan as $cetakkms)
                    <th scope="col" style="background-color: #ff0000;">
                        @if (intval($totalScoreNutrisiGizi->total_nutrisi_gizi) < 18)
                            <span>✓</span>
                        @endif
                    </th>
                @endforeach
            </tr>
            {{-- IMT --}}
            <tr>
                <th scope="row">Indeks Massa Tubuh</th>
            </tr>
            <tr>
                <th scope="row">Lebih</th>
                @foreach ($data as $cetakkms)
                    @if ($cetakkms->indeks_massa_tubuh == 'Berat Lebih')
                        <th scope="col" style="background-color: #f00;">v</th>
                    @else
                        <th scope="col" style="background-color: #f00;"></th>
                    @endif
                @endforeach
            </tr>
            <tr>
                <th scope="row">Normal</th>
                @foreach ($data as $cetakkms)
                    @if ($cetakkms->indeks_massa_tubuh == 'Normal')
                        <th scope="col" style="background-color: #ffff80;">v</th>
                    @else
                        <th scope="col" style="background-color: #ffff80;"></th>
                    @endif
                @endforeach
            </tr>
            <tr>
                <th scope="row">Kurang</th>
                @foreach ($data as $cetakkms)
                    @if ($cetakkms->indeks_massa_tubuh == 'Berat Kurang')
                        <th scope="col" style="background-color: #ff0;">v</th>
                    @else
                        <th scope="col" style="background-color: #ff0;"></th>
                    @endif
                @endforeach
            </tr>
            <tr>
                <th scope="row">Tinggi Badan (Kg)</th>
                @foreach ($data as $cetakkms)
                    <th scope="col">{{ $cetakkms->tb }}</th>
                @endforeach
            </tr>
            <tr>
                <th scope="row">Berat Badan (cm)</th>
                @foreach ($data as $cetakkms)
                    <th scope="col">{{ $cetakkms->bb }}</th>
                @endforeach

            </tr>
            <tr>
                <th scope="row">Tekanan Darah</th>
            </tr>
            <tr>
                <th scope="row">Tinggi</th>
                @foreach ($data as $cetakkms)
                    @if ($cetakkms->tekanan_darah == 'Tinggi')
                        <th scope="col" style="background-color: #973e95;">v</th>
                    @else
                        <th scope="col" style="background-color: #973e95;"></th>
                    @endif
                @endforeach
            </tr>
            <tr>
                <th scope="row">Normal</th>
                @foreach ($data as $cetakkms)
                    @if ($cetakkms->tekanan_darah == 'Normal')
                        <th scope="col" style="background-color: #ecd8e9;">v</th>
                    @else
                        <th scope="col" style="background-color: #ecd8e9;"></th>
                    @endif
                @endforeach
            </tr>
            <tr>
                <th scope="row">Rendah</th>
                @foreach ($data as $cetakkms)
                    @if ($cetakkms->tekanan_darah == 'Rendah')
                        <th scope="col" style="background-color: #d8b1d4;">v</th>
                    @else
                        <th scope="col" style="background-color: #d8b1d4;"></th>
                    @endif
                @endforeach
            </tr>
            <tr>
                <th scope="row">Sistole</th>
                @foreach ($data as $cetakkms)
                    <th scope="col">{{ $cetakkms->sistol }}</th>
                @endforeach
            </tr>
            <tr>
                <th scope="row">Diastol</th>
                @foreach ($data as $cetakkms)
                    <th scope="col">{{ $cetakkms->diastol }}</th>
                @endforeach
            </tr>
            <tr>
                <th scope="row">Dgn Obat</th>
                @foreach ($data as $cetakkms)
                    <th scope="col">{{ $cetakkms->dengan_obat }}</th>
                @endforeach
            </tr>
            <tr>
                <th scope="row">Nadi</th>
                @foreach ($data as $cetakkms)
                    <th scope="col">{{ $cetakkms->nadi }}</th>
                @endforeach
            </tr>
            <tr>
                <th scope="row"><br>Hemoglobin</th>

            </tr>
            <tr>
                <th scope="row">Kurang</th>
                @foreach ($data as $cetakkms)
                    @if ($cetakkms->hemoglobin == 'Kurang')
                        <th scope="col" style="background-color: #87CEFA;">v</th>
                    @else
                        <th scope="col" style="background-color: #87CEFA;"></th>
                    @endif
                @endforeach
            </tr>
            <tr>
                <th scope="row">Normal</th>
                @foreach ($data as $cetakkms)
                    @if ($cetakkms->hemoglobin == 'Normal')
                        <th scope="col" style="background-color: #F0F8FF;">v</th>
                    @else
                        <th scope="col" style="background-color: #F0F8FF;"></th>
                    @endif
                @endforeach
            </tr>
            <tr>
                <th scope="row">g% atau %</th>
                @foreach ($data as $cetakkms)
                    <th scope="col">{{ $cetakkms->g_hemoglobin }}</th>
                @endforeach

            </tr>
            <tr>
                <th scope="row">Reduksi Urine</th>
            </tr>
            <tr>
                <th scope="row">Positif</th>
                @foreach ($data as $cetakkms)
                    @if ($cetakkms->reduksi_urine == 'Positif')
                        <th scope="col" style="background-color: #abce80;">v</th>
                    @else
                        <th scope="col" style="background-color: #abce80;"></th>
                    @endif
                @endforeach
            </tr>
            <tr>
                <th scope="row">Normal</th>
                @foreach ($data as $cetakkms)
                    @if ($cetakkms->reduksi_urine == 'Normal')
                        <th scope="col" style="background-color: #ffffff;">v</th>
                    @else
                        <th scope="col" style="background-color: #ffffff;"></th>
                    @endif
                @endforeach
            </tr>
            <tr>

                <th scope="row">Jumlah Tanda +</th>
                @foreach ($data as $cetakkms)
                    <th scope="col">{{ $cetakkms->jumlahtanda }}</th>
                @endforeach
            </tr>
            <tr>
                <th scope="row">Dgn Obat</th>
                @foreach ($data as $cetakkms)
                    <th scope="col">{{ $cetakkms->dengan_obat_reduksi }}</th>
                @endforeach
            </tr>
            <tr>
                <th scope="row">Protein Urine</th>
            </tr>
            <tr>
                <th scope="row">Positif</th>
                @foreach ($data as $cetakkms)
                    @if ($cetakkms->protein_urine == 'Positif')
                        <th scope="col" style="background-color: #D2B48C;">v</th>
                    @else
                        <th scope="col" style="background-color: #D2B48C;"></th>
                    @endif
                @endforeach
            </tr>
            <tr>
                <th scope="row">Normal</th>
                @foreach ($data as $cetakkms)
                    @if ($cetakkms->protein_urine == 'Normal')
                        <th scope="col" style="background-color: #FFF8DC;">v</th>
                    @else
                        <th scope="col" style="background-color: #FFF8DC;"></th>
                    @endif
                @endforeach
            </tr>
            <tr>
                <th scope="row">Jumlah Tanda +</th>
                @foreach ($data as $cetakkms)
                    <th scope="col">{{ $cetakkms->jumlah_tanda }}</th>
                @endforeach
            </tr>
            <tr>
                <th scope="row">Dgn Obat</th>
                @foreach ($data as $cetakkms)
                    <th scope="col">{{ $cetakkms->dengan_obat_reduksi }}</th>
                @endforeach
            </tr>
        </tbody>
    </table>
</div>

</html>

@push('scripts')
    <script>
        $(document).ready(function() {
            var table = $('#rekaps').DataTable({
                pageLength: 10,
                processing: true,
                serverSide: false,
                dom: 'Blfrtip',
            });

        });
    </script>
@endpush
