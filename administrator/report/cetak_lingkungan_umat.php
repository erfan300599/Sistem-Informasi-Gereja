<?php 
ob_start();
error_reporting(E_ALL & ~E_NOTICE);
  include "../inc/koneksi.php";
  if (isset ($_POST['Cetak'])){ 
  $id_lingkungan = $_POST['id_lingkungan'];
  $d = mysqli_query($koneksi, "SELECT*FROM tb_lingkungan WHERE id_lingkungan = '$id_lingkungan'"); 
    $datak = mysqli_fetch_assoc($d);

     $nama_w = $datak['nama_lingkungan'];

       $sql_cek18 = "SELECT * FROM tb_pengaturan";
        $query_cek18 = mysqli_query($koneksi, $sql_cek18);
        $data_cek18 = mysqli_fetch_array($query_cek18,MYSQLI_BOTH);
        
  }
          $satu_hari        = mktime(0,0,0,date("n"),date("j"),date("Y"));
       
          function tglIndonesia($str){
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
      border-collapse:collapse;
      table-layout:fixed;width: 100%;
      text-align: center;
    }
    table td{
      word-wrap:break-word;
      width: 20%;
      padding: 5px;
    }
    table th{
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
<b>Lingkungan: <?php echo $nama_w ?></b><br/><br/>

  <table border="1">
  <tr>
                      <th>No.</th>
                      <th>Nama Umat</th>
                      <th>Jenis Kelamin</th>
                      <th>Alamat</th>
                      <th>TTL</th>                   
  </tr>
  <?php
      $sql_tampil = "SELECT * FROM tb_umat, tb_lingkungan where tb_umat.id_lingkungan=tb_lingkungan.id_lingkungan and tb_umat.id_lingkungan='$id_lingkungan'";
      $query_tampil = mysqli_query($koneksi, $sql_tampil);
        $no=1;
  while ($data = mysqli_fetch_array($query_tampil,MYSQLI_BOTH)) {
    ?>
<tr>
                      <td style="text-align: center;"><?php echo $no++; ?></td>
                      <td style="text-align: center;"><?php echo $data["nama_umat"]; ?></td>
                      <td style="text-align: center;"><?php echo $data["jenis_kelamin"]; ?></td>
                      <td style="text-align: center;"><?php echo $data['alamat']; ?>
            RT <?php echo $data['rt']; ?>/ RW <?php echo $data['rw']; ?>.</td>
                      <td style="text-align: center;"><?php echo $data["tempat_lahir"]; ?> / <?php echo $data["tanggal_lahir"]; ?></td>


 </tr>
 <?php } ?>
  </table>

  <br><br><br>

<?php $tgl=date('Y-m-d'); ?>
<table width="100%">
<tr>
  <td align="jusrt"></td>
  <td align="center" width="200px">
   Ende, <?php echo tglIndonesia(date('d F Y', strtotime($tgl))) ?>
    <br/>Pastor Paroki<br/><br/><br/><br/>
    <b><u><?php echo $data_cek18["pastor_paroki"]; ?></u><br/></b>
  </td>
</tr>
</table>

</body>
</html>
<?php
$html = ob_get_contents();
ob_end_clean();
require '../admin/plugin/html2pdf/autoload.php';
$pdf = new Spipu\Html2Pdf\Html2Pdf('L','A4','en');
$pdf->WriteHTML($html);
$pdf->Output('Data Umat PerLingkungan.pdf', 'D');



