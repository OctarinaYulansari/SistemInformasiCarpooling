<?php
$id=$_GET['NIP'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM jemput WHERE NIP ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Arsip</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">NIP</label>
                            <div class="col-sm-9">
                                <input type="text" name="noRak" value="<?=$data['NIP']?>"class="form-control" id="inputEmail3">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="noLaci" class="col-sm-3 control-label">Nama Pegawai</label>
                            <div class="col-sm-9">
                                <input type="text" name="Nama_Pegawai" value="<?=$data['Nama_Pegawai']?>"  class="form-control">
                            </div>
                        </div>
						<div class="form-group">
                            <label class="col-sm-3 control-label">Tanggal</label>
                            <!--untu tahun-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="tahun" class="form-control">
                                    <?php for($i=2020;$i>1980;$i--) {?>
                                    <option value="<?=$i?>"> <?=$i?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>
                            <!--Untuk Bulan-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="bulan" class="form-control">
                                    <?php 
                                    $bulan=  array("","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
                                    for($j=12;$j>0;$j--) {?>
                                    <option value="<?=$j?>"> <?=$bulan[$j]?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>
                            <!--Untuk Tanggal-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="tanggal" class="form-control">
                                    <?php for($k=31;$k>0;$k--) {?>
                                    <option value="<?=$k?>"> <?=$k?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="Alamat" value="<?=$data['Alamat']?>"class="form-control" id="inputEmail3">
                            </div>
                        </div>
						<div class="form-group">
                            <label class="col-sm-3 control-label">Jam Jemput</label>
                            <div class="col-sm-9">
                                <input type="text" name="Jam_Jemput" value="<?=$data['Jam_Jemput']?>"class="form-control" id="inputEmail3">
                        </div>
                        
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Jemput</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=arsip&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Arsip
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php 
if($_POST){
    //Ambil data dari form
    $nama_pegawai=$_POST['Nama_Pegawai'];
    $tanggal=$_POST['tahun']."_".$_POST['bulan']."_".$_POST['tanggal'];
    $alamat=$_POST['Alamat'];
    $jam_jemput=$_POST['Jam_Jemput'];
    
    //buat sql
    $sql="UPDATE jemput SET Nama_Pegawai='$nama_pegawai', Tanggal='$tanggal', Alamat='$alamat', Jam_Jemput='$jam_jemput' WHERE NIP ='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Error");
    if ($query){
        echo "<script>window.location.assign('?page=jemput&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



