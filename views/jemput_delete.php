<?php
//membuat query untuk hapus data
$sql="DELETE FROM jemput WHERE NIP ='".$_GET['NIP']."'";
$query=mysqli_query($koneksi, $sql) or die ("SQL Hapus Error");
if($query){
    echo"<script> window.location.assign('?page=jemput&actions=tampil');</script>";
}else{
    echo"<script> alert ('Maaf !!! Data Tidak Berhasil Dihapus') window.location.assign('?page=jemput&actions=tampil');</scripr>";
}

