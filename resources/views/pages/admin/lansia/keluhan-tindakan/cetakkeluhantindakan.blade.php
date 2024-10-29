<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 5px;
            text-align: left;
        }
    </style>
</head>

<body>
    <h1 style="font-size: 16px; text-align: center;">
        POSYANDU LANSIA
    </h1>
    <h1 style="font-size: 16px; text-align: center;">
        DESA BUGANGAN KECAMATAN KEDUNGWUNI
    </h1>
    <h1 style="font-size: 16px; text-align: center;">
        KABUPATEN PEKALONGAN
    </h1>
    <h4 style="text-align: center; font-weight: normal; margin-bottom: 0;">
        JL SINGOBONGSO, BUGANGAN GENDING, KEC. KEDUNGWUNI, KAB. PEKALONGAN, JAWA TENGAH
    </h4>
    <h4 style="text-align: center; font-weight: normal; margin: 0;">
        Telepon: 089649793793 Surel : admin.lansia@bugangan.com Kode Pos : 51173
    </h4>
    <hr style="border: 3px solid; margin-bottom: 1px;">
    <hr style="margin-top: 0;">

    <h3 style="font-size: 16px; text-align: center;">Laporan Riwayat Keluhan dan Tindakan</h1>
    <br>
        <div class="form-group">
            <table class="static" align="center" rules="all" border="1px" style="width: 95%;">
                <tr>
                    <th>No. </th>
                    <th>Nama Lansia</th>
                    <th>Tanggal Pemeriksaan </th>
                    <th>Keluhan</th>
                    <th>Tindakan</th>
                </tr>
                @foreach ($data as $cetakkt)
                    <tr>
                        <td> {{ $loop->iteration }}</td>
                        <td> {{ $cetakkt->lansia->nama_lansia }}</td>
                        <td> {{ $cetakkt->tanggal_pemeriksaan }}</td>
                        <td> {{ $cetakkt->keluhan }}</td>
                        <td> {{ $cetakkt->tindakan }}</td>
                @endforeach
        </div>
</body>

</html>
