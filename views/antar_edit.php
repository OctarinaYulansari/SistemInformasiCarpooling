<?php
$id=$_GET['NIP'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM antar WHERE NIP ='$id'") or die ("SQL Edit error");
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
                            <label for="para_pihak" class="col-sm-3 control-label">Jam Antar</label>
                            <div class="col-sm-9">
                                <input type="text" name="Jam_Antar" value="<?=$data['Jam_Antar']?>"class="form-control" id="inputEmail3">
                            </div>
                        </div>
							<div class="form-group">
                            <label for="noPerkara" class="col-sm-3 control-label">Tujuan</label>
                            <div class="col-sm-9">
                                <input type="text" name="Tujuan" value="<?=$data['Tujuan']?>"class="form-control" id="inputEmail3">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="pemberi" class="col-sm-3 control-label">Lama Perjalanan</label>
                            <div class="col-sm-9">
                                <input type="text" name="Lama_Perjalanan" value="<?=$data['Lama_Perjalanan']?>" class="form-control" id="inputPassword3">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="penerima" class="col-sm-3 control-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="keterangan" value="<?=$data['keterangan']?>" class="form-control" id="inputPassword3">
                            </div>
                        </div>
                        <!--Status-->
                        
                        
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Antar</button>
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
	$jamantar=$_POST['Jam_Antar'];
    $tujuan=$_POST['Tujuan'];
	$lamaperjalanan=$_POST['Lama_Perjalanan'];
    $keterangan=$_POST['keterangan'];
    
    //buat sql
    $sql="UPDATE antar SET Nama_Pegawai='$nama_pegawai', Tanggal='$tanggal', Jam_Antar='$jamantar', Tujuan='$tujuan', Lama_Perjalanan='$lamaperjalanan', keterangan='$keterangan' WHERE NIP ='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Error");
    if ($query){
        echo "<script>window.location.assign('?page=antar&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



