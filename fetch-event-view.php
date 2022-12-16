<?php
include'administrator/inc/koneksi.php';

    $json = array();
    $sqlQuery = "SELECT * FROM tb_liturgi ORDER BY id";

    $result = mysqli_query($koneksi, $sqlQuery);
    $eventArray = array();
    while ($row = mysqli_fetch_assoc($result)) {
        array_push($eventArray, $row);
    }
    mysqli_free_result($result);

    mysqli_close($koneksi);
    echo json_encode($eventArray);
?>