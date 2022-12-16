<?php
include "../../inc/koneksi.php";
$sql_cek18 = "SELECT * FROM tb_pengaturan";
$query_cek18 = mysqli_query($koneksi, $sql_cek18);
$data_cek18 = mysqli_fetch_array($query_cek18, MYSQLI_BOTH);
if (isset($_POST['btnCetak']))
{
  // $id_umat = $_POST['id_umat'];
}
$satu_hari        = mktime(0, 0, 0, date("n"), date("j"), date("Y"));

function tglIndonesia($str)
{
  $tr   = trim($str);
  $str    = str_replace(array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'), array('Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum\'at', 'Sabtu', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'), $tr);
  return $str;
}

?>
<html>

<head>
  <title>Print PDF</title>
  <style>
    table {
      border-collapse: collapse;
      table-layout: fixed;
      width: 100%;
      text-align: center;
    }

    table td {
      word-wrap: break-word;
      width: 20%;
      padding: 5px;
    }

    table th {
      padding: 5px;
    }
  </style>

</head>

<body>

  <div>
    <div style="font-size: 20px;" align="center"><?php echo $data_cek18["nama_web"]; ?></div>
    <div style="font-size: 12px;" align="center"><?php echo $data_cek18["alamat_gereja"]; ?>, <?php echo $data_cek18["kecamatan_gereja"]; ?>, <?php echo $data_cek18["kelurahan_gereja"]; ?>, <?php echo $data_cek18["kabupaten_gereja"]; ?>, <?php echo $data_cek18["provinsi_gereja"]; ?></div>
    <div style="font-size: 12px;" align="center">Email: <?php echo $data_cek18["email_gereja"]; ?> Telp. <?php echo $data_cek18["no_hp"]; ?></div>
  </div>
  <hr class="sidebar-divider" style="border:0.5px solid black;margin:10px 5px 10px 5px;">
  <br /><br />

  <table border="1">
    <tr>
      <th>No.</th>
      <th>Nama Umat</th>
      <th>Alamat</th>
      <th>Umur</th>
      <th>TTL</th>
      <th>Nama KUB</th>
    </tr>
    <?php
    $sql_tampil = "select m.id_umat, m.nik, m.id_kub, m.nama_umat, m.alamat, m.tempat_lahir, m.tanggal_lahir, m.jenis_kelamin, m.rt,m.rw, p.id_kub, p.nama_kub from tb_umat m inner join tb_kub p on m.id_kub=p.id_kub where status_umat ='Ada'";
    $query_tampil = mysqli_query($koneksi, $sql_tampil);
    $no = 1;
    while ($data = mysqli_fetch_array($query_tampil, MYSQLI_BOTH))
    {
    ?>
      <tr>
        <td style="text-align: center;"><?php echo $no++; ?></td>
        <td style="text-align: center;"><?php echo $data["nama_umat"]; ?></td>
        <td style="text-align: center;"><?php echo $data['alamat']; ?>
          RT <?php echo $data['rt']; ?>/ RW <?php echo $data['rw']; ?>.</td>
        <td>
          <?php
          $originalDate = $data['tanggal_lahir'];
          $dateOfBirth = date("Y-m-d", strtotime($originalDate));
          $today = date("Y-m-d");
          $diff = date_diff(date_create($dateOfBirth), date_create($today));
          echo ($diff->format("%y tahun"));
          ?>
        </td>
        <td style="text-align: center;"><?php echo $data["tempat_lahir"]; ?> / <?php echo $data["tanggal_lahir"]; ?></td>
        <td style="text-align: center;"><?php echo $data["nama_kub"]; ?></td>

      </tr>
    <?php } ?>
  </table>

  <br><br><br>

  <?php $tgl = date('Y-m-d'); ?>
  <table width="100%">
    <tr>
      <td align="jusrt"></td>
      <td align="center" width="200px">
        Ende, <?php echo tglIndonesia(date('d F Y', strtotime($tgl))) ?>
        <br />Pastor Paroki<br /><br /><br /><br />
        <b><u><?php echo $data_cek18["pastor_paroki"]; ?></u><br /></b>
      </td>
    </tr>
  </table>

</body>

</html>
<?php
$html = ob_get_contents();
ob_end_clean();
require '../plugin/html2pdf/autoload.php';
$pdf = new Spipu\Html2Pdf\Html2Pdf('L', 'A4', 'en');
$pdf->WriteHTML($html);
$pdf->Output('Data Umat.pdf', 'D');
