<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Reservasi</title>
</head>

<body>
    <h2 align="center"> Reservasi Kereta Api Kelompok 2 </h2>
    <hr size="5px" width="50%" color=blue>
    <img src="KERETA.jpg" height="10%" width="30%">
    <?php
    $np = $_POST['np'];
    $pemberangkatan = $_POST['pemberangkatan'];
    $tujuan = $_POST['tujuan'];
    $hari = $_POST['hari'];
    $tanggal = $_POST['tanggal'];
    $bulan = $_POST['bulan'];
    $tahun = $_POST['tahun'];
    $haripulang = $_POST['haripulang'];
    $tanggalpulang = $_POST['tanggalpulang'];
    $bulanpulang = $_POST['bulanpulang'];
    $tahunpulang = $_POST['tahunpulang'];
    $kelas = $_POST['kelas'];
    $nk = $_POST['nk'];
    $pd = $_POST['pd'];
    $pb = $_POST['pb'];
    $waktu = $_POST['waktu'];
    $harga = $_POST['harga'];

    ?>

    <table border="3" width="500">
        <thead>
            <tr>
                <th colspan="4" bgcolor=red>Detail Pemesanan Kereta Api</th>
            </tr>
            <tr>
                <td> Nama Penumpang </td>
                <td><?php echo $np ?></td>
            </tr>
            <tr>
                <td> Pemberangkatan Stasiun</td>
                <td><?php echo $pemberangkatan ?></td>
            </tr>
            <tr>
                <td> Tujuan Stasiun</td>
                <td><?php echo $tujuan ?></td>
            </tr>
            <tr>
                <td rowspan="4"> Tanggal Berangkat</td>
                <td><?php echo $hari ?></td>
            </tr>
            <tr>
                <td><?php echo $tanggal ?></td>
            </tr>
            <tr>
                <td><?php echo $bulan ?></td>
            </tr>
            <tr>
                <td><?php echo $tahun ?></td>
            </tr>
            <tr>
                <td rowspan="4"> Tanggal Pulang</td>
                <td><?php echo $haripulang ?></td>
            </tr>
            <tr>
                <td><?php echo $tanggalpulang ?></td>
            </tr>
            <tr>
                <td><?php echo $bulanpulang ?></td>
            </tr>
            <tr>
                <td><?php echo $tahunpulang ?></td>
            </tr>
            <tr>
                <td> Penumpang Dewasa</td>
                <td><?php echo $pd ?></td>
            </tr>
            <tr>
                <td> Penumpang Balita</td>
                <td><?php echo $pb ?></td>
            </tr>
            <tr>
                <td> Nama Kereta </td>
                <td><?php echo $nk ?></td>
            </tr>
            <tr>
                <td> Kelas </td>
                <td><?php echo $kelas ?></td>
            </tr>
            <tr>
                <td> Waktu yang dipilih</td>
                <td><?php echo $waktu ?></td>
            </tr>
            <tr>
                <td> Harga </td>
                <td><?php echo $harga ?></td>
            </tr>
        </thead>
    </table><br>
</body>
</html>