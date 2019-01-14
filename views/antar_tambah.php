<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Carpooling Antar</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                         
						 <div class="form-group">
                            <label for="para_pihak" class="col-sm-3 control-label">NIP</label>
                            <div class="col-sm-9">
                                <input type="text" name="NIP" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="no_perkara" class="col-sm-3 control-label">Nama Pegawai</label>
                            <div class="col-sm-9">
                                <input type="text" name="Nama_Pegawai" class="form-control">
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="tgl_masuk" class="col-sm-3 control-label">Tanggal </label>
                            <div class="col-sm-3">
                                <input name="Tanggal" class="form-control" placeholder="YYYY/MM/DD">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="pengantar" class="col-sm-3 control-label">Jam Antar</label>
                            <div class="col-sm-9">
                                <input type="text" name="Jam_Antar" class="form-control">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="penerima" class="col-sm-3 control-label">Tujuan</label>
                            <div class="col-sm-9">
                                <input type="text" name="Tujuan" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="penerima" class="col-sm-3 control-label">Lama Perjalanan</label>
                            <div class="col-sm-9">
                                <input type="text" name="Lama_Perjalanan" class="form-control">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="ket" class="col-sm-3 control-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="keterangan" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Data</button>
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
    $nip=$_POST['NIP'];
    $nama_pegawai=$_POST['Nama_Pegawai'];
    $tanggal=$_POST['Tanggal'];
    $jamantar=$_POST['Jam_Antar'];
    $tujuan=$_POST['Tujuan'];
    $lama_perjalanan=$_POST['Lama_Perjalanan'];
    $keterangan=$_POST['keterangan'];
    $sql="INSERT INTO antar VALUES ('$nip','$nama_pegawai','$tanggal','$jamantar','$tujuan','$lama_perjalanan','$keterangan')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Arsip Error");
    if ($query){
        echo "<script>window.location.assign('?page=antar&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>