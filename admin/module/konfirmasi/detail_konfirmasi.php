
        <div class="container-fluid">
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                DETAIL KONFIRMASI
                            </h2>
                        </div>
                        <div class="body">
                            <div class="box">
        
                        <?php
              
                                            include "../lib/config.php";
                                            include "../lib/koneksi.php";
                        $id_konfirmasi = $_GET['id_konfirmasi'];
                        
                                            $queryKonfirmasi = mysqli_query($koneksi,"SELECT * FROM konfirmasi, member, kabupaten, kota
                                            WHERE konfirmasi.id_member=member.id_member AND konfirmasi.id_kabupaten=kabupaten.id_kabupaten AND konfirmasi.id_kota=kota.id_kota AND konfirmasi.id_konfirmasi = '$id_konfirmasi'");
                                            while($kon=mysqli_fetch_array($queryKonfirmasi))
                                            {
                                                $totalbayar =  $kon['total_bayar'] + $kon['tarif'];
                                       
                        ?>

        <div class="box-body">
              <form class="form-horizontal" method="post">
              
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama : </label>

                  <div class="col-sm-6">
                  <label class="control-label" name="nama"><?php echo $kon['nama_member']; ?></label>
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Alamat : </label>

                  <div class="col-sm-6">
                  <label class="control-label"><?php echo $kon['alamat']; ?></label>
                  </div>
                </div> 
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Kabupaten : </label>

                  <div class="col-sm-6">
                  <label class="control-label"><?php echo $kon['nama']; ?></label>
                  </div>
                </div>               
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">No. Telepon : </label>

                  <div class="col-sm-6">
                  <label class="control-label"><?php echo $kon['no_telepon']; ?></label>
                  </div>
                </div>
                <!-- <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Kategori</label>

                  <div class="col-sm-6">
                  <label class="control-label" name="email"><?php echo $kon['nama_kategori']; ?></label>
                  </div>
                </div> -->
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Tanggal Pesan</label>

                  <div class="col-sm-6">
                  <label class="control-label"><?php echo $kon['tanggal']; ?></label>
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Gambar Bukti</label>

                  <div class="col-sm-6">
                  <label class="control-label"><img src="../file/bukti/<?php echo $kon['gambar']; ?>" width='130px' height='100px'/></label>
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Tarif</label>

                  <div class="col-sm-6">
                  <label class="control-label"><?php echo $kon['tarif']; ?></label>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Total</label>

                  <div class="col-sm-6">
                  <label class="control-label"><?php echo $totalbayar; ?></label>
                  </div>
                </div>
                <div class="form-group form-float">
                        <div class="form-line">
                          <div class="row clearfix">
                          <div class="col-sm-1"></div>
                            <div class="col-sm-3">
                             <!--  <?php 
                        
                        $query = "SELECT * FROM konfirmasi WHERE tanggal='$tanggal' AND id_member='$id_member'";
                        $hasil = mysqli_query($koneksi, $query);
                  
                        while ($r = mysqli_fetch_array($hasil))
                        // {
                            
                        ?>  -->
                            <!--   <div class="thumbnail">
                                <div class="image">
                                  <img src="../file/konfirmasi/<?php echo $r['gambar']; ?>" class="img-responsive" maxwidth="204" maxheight="204" alt="User" />
                                  <label class="control-label"><?php echo $r['gambar']; ?></label>
                                </div>
                              <div class="caption">
                              <h3>Gambar Design</h3>                                              
                              <div class="input-group">
                              <label class="input-group-btn"></label>
                            </div>                                                
                          </div>
                        </div>
                        <?php } ?>
                      </div> -->
                     <!--  <div class="col-sm-3">
                              <div class="thumbnail">
                                <div class="image">
                                  <img src="../file/bukti/<?php echo $kon['gambar']; ?>" class="img-responsive" maxwidth="204" maxheight="204" alt="gambar" />
                                   <label class="control-label"><?php echo $kon['gambar']; ?></label>
                                </div>
                              <div class="caption">
                              <h3>Gambar Bukti</h3>                                              
                              <div class="input-group">
                              <label class="input-group-btn"></label>
                            </div>                                                
                          </div>
                        </div>
                      </div> -->
                    </div>
                    <input type="button" class="header-dropdown m-r--3 btn btn-sm btn-info btn-flat pull-right" onclick='self.history.back()' value="Kembali">
                  </div>
                    
              
                </div>
              
              <!-- /.box-body -->
              
               
             <!--  <div class="box-footer">
                <a href="../admin/laporan/laporanpreorder.php"><button class="btn btn-primary">Export Data Pre-Order To Excel</button></a>
              </div> -->
           </form>
           </div>
        </div>
      </div> 
                    </div>
                </div>
            </div>
            </div>