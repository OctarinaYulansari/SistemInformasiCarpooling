<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Arsip</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM jemput WHERE NIP='" . $_GET ['NIP'] . "'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Carpooling <br> Bank BTPN KCP Kisaran </h2>
                        <h4>Jalan HOS Cokroaminoto No. 152 A-B, Kisaran Barat<br>
                              Kabupaten Asahan, Provinsi Sumatera Utara, Indonesia Kode Pos : 21216</h4>
                        <hr>
                        <h3>DATA CARPOOLING JEMPUT</h3>
                        <table class="table table-bordered table-striped table-hover text-left"> 
                            <tbody>
								<tr>
                                    <td><strong>NIP</strong></td> <td><?= $data['NIP'] ?></td>
                                </tr>
                                <tr>
                                    <td width="200"><strong>Nama Pegawai</strong></td> <td><?= $data['Nama_Pegawai'] ?></td>
                                </tr>
                                <tr>
                                    <td><strong>Tanggal</strong><td><strong><?= $data['Tanggal'] ?></strong></td>
                                </tr>
								<tr>
                                    <td><strong>Alamat</strong></td> <td><?= $data['Alamat'] ?></td>
                                </tr>
                                <tr>
                                    <td><strong>Jam Jemput</td></strong><td><?= $data['Jam_Jemput'] ?></td>
                                </tr>

                            </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="2" class="text-right">
                                        Kisaran  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Kasmawati Siregar</u><br>
                                        Branch Head
									</td>
								</tr>
							</tfoot> 
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>