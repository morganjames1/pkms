<div class="container-fluid">
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                DAFTAR KONFIRMASI
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">

                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                   <thead>
                  <tr>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>Kabupaten</th>
                                            <th>No. Telepon</th>
                                            <th>Tanggal</th>
                                            <th>Bukti</th>
                                            <th>Status</th>
                                            <th>Tarif</th>
                                            <th>Total Bayar</th>
                                            <th style="width: 110px" class="text-center">Aksi</th>
                                        </tr>
                </thead>
                
                <tbody>
                                       <?php
                                           
                                            include "../lib/config.php";
                                            include "../lib/koneksi.php";
                                            // $id_konfirmasi = $_GET['id_konfirmasi'];
                        
                                            $queryKonfirmasi = mysqli_query($koneksi,"SELECT * FROM konfirmasi, member, kabupaten, kota
                                            WHERE konfirmasi.id_member=member.id_member AND konfirmasi.id_kabupaten=kabupaten.id_kabupaten AND konfirmasi.id_kota=kota.id_kota ");
                                            while($kon=mysqli_fetch_array($queryKonfirmasi))
                                            {
                                                $totalbayar =  $kon['total_bayar'] + $kon['tarif'];
                                        ?>
      
                                        <tr>
                                <td><?php echo $kon['nama_member']; ?></td>
                                <td><?php echo $kon['alamat']; ?></td>
                                <td><?php echo $kon['nama']; ?></td>
                                <td><?php echo $kon['no_telepon']; ?></td>
                                <td><?php echo $kon['tanggal']; ?></td>
                                           <!--  perintah menambahkan nama gambar (sebagai bukti dan gambar) -->
                                <td><?php echo $kon['gambar']; ?><img src="../file/bukti/<?php echo $kon['gambar']; ?>" width='130px' height='100px'/></td>
                                <td><?php echo $kon['status']; ?></td> 
                                <td><?php echo $kon['tarif']; ?></td>
                                <td><?php echo $totalbayar;?></td>
                                <td class="text-center">
                                <div class="btn-group">
                                                <?php 
                                if ($kon['status']=='Sudah Di Terima') {
                                    ?>
                                    <div class="btn-group">
                               
                                 <a href="adminweb.php?module=detail_konfirmasi&id_konfirmasi=<?php echo $kon['id_konfirmasi']; ?>&id_member=<?php echo $kon['id_member']; ?>" class="btn btn-warning">
                                    <i class="material-icons">folder</i></a>
                            </div>              
                                   
                                      <div class="btn-group">
                               
                                                        <a href="<?php echo $admin_url; ?>module/konfirmasi/aksi_hapus.php?id_konfirmasi=<?php echo $kon['id_konfirmasi']; ?>" onClick="return confirm('Anda yakin ingin menghapus data ini?')" class="btn btn-danger">
                                    <i class="material-icons">delete</i></a>
                            </div> 
                                    <?php
                                }elseif($kon['status']=='Proses'){
                                    ?>

                                    <!--  <div class="btn-group"> -->
                               
                                   <!--   <a href="<?php echo $admin_url; ?>module/konfirmasi/detail_konfirmasi.php?id_konfirmasi=<?php echo $kon['id_konfirmasi']; ?>" class="btn btn-warning">
                                    <i class="material-icons">folder</i></a>
                            </div> -->

                                    <a href="adminweb.php?module=edit_konfirmasi&id_konfirmasi=<?php echo $kon['id_konfirmasi'];?>&id_member=<?php echo $kon['id_member']; ?>" class="btn bg-orange waves-effect">
                                                        <i class="material-icons">edit</i></a>

                                    <?php
                                }elseif($kon['status']=='Pengiriman'){   
                                    ?>
                                     <div class="btn-group">
                               
                             <a href="<?php echo $admin_url; ?>module/konfirmasi/detail_konfirmasi.php?id_konfirmasi=<?php echo $kon['id_konfirmasi']; ?>" class="btn btn-warning">
                                    <i class="material-icons">folder</i></a>
                            </div>

                             <a href="adminweb.php?module=edit_konfirmasi&id_konfirmasi=<?php echo $kon['id_konfirmasi']; ?>&id_member=<?php echo $kon['id_member']; ?>" class="btn bg-orange waves-effect">
                                                        <i class="material-icons">edit</i></a>

                                    <?php
                                }elseif($kon['status']=='Menunggu Konfirmasi Admin'){
                                    ?>

                                    <a href="<?php echo $admin_url; ?>module/konfirmasi/aksi_terima_bukti.php?id_konfirmasi=<?php echo $kon['id_konfirmasi']; ?>" class="btn bg-orange waves-effect">
                                                        <i class="material-icons">list</i></a>
                                    <?php
                                }else{
                                    ?>

                                     <div class="btn-group">
                               
                                                       <!--  <a href="<?php echo $admin_url; ?>module/konfirmasi/detail_konfirmasi.php?id_konfirmasi=<?php echo $kon['id_konfirmasi']; ?>" class="btn btn-warning">
                                    <i class="material-icons">folder</i></a> -->
                            </div>

                            <?php
                                }
                             ?>
                                                    
                                                </div>
                                            </td>
                                        </tr>
                                        
                                        <?php } ?>

                                    </tbody>
                        </table>
                            <div class="row">
                        </div>
                        
                    </div>
                </div>
            </div>
            </div>
            </div>
            </div>

