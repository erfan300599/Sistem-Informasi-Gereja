<?php

// $_GET[];
// var_dump($_GET);

$namaDesa = $_GET['namaDesa'];
$namaDesa = "%" . $namaDesa . "%";

// echo ($namaDesa);

include "inc/koneksi.php";
$query =
    "SELECT * FROM tbl_kelurahan_desa
            JOIN tbl_kecamatan
                ON tbl_kelurahan_desa.id_kecamatan = tbl_kecamatan.id_kecamatan
            JOIN tbl_kota_kabupaten
                ON tbl_kecamatan.id_kota_kabupaten = tbl_kota_kabupaten.id_kota_kabupaten
            JOIN tbl_provinsi
                ON tbl_kota_kabupaten.id_provinsi = tbl_provinsi.id_provinsi
            WHERE nama_kelurahan_desa 
                LIKE '" . $namaDesa . "' 
            ORDER BY nama_kelurahan_desa";

$daftarDesa = array();
$sql = $koneksi->query($query);
while ($data = $sql->fetch_assoc())
{
    array_push($daftarDesa, $data);
}
echo json_encode($daftarDesa);
