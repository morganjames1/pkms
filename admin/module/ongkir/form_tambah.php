
        <div class="container-fluid">

            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                TAMBAH KOTA
                            </h2>
                        </div>
                        
                        <div class="body">
                            <!--<div class="table-responsive">

                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">-->
                                  <form class="form-horizontal" action="../admin/module/ongkir/aksi_simpan.php" method="post">
                                    <div class="box-body">
                                      <label for="inputEmail3" class="col-sm-2 control-label">Nama Kota</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="namaongkir" placeholder="Kota" name="namaongkir">
                                      </div>
                                      <label for="inputEmail3" class="col-sm-2 control-label">Nama Kabupaten</label>
                                      <div class="col-sm-10">
                                        <select class="form-control show-tick" data-live-search="true" name="kabupaten" required>
                                            <?php
                                                $queryK = "SELECT * FROM kabupaten ORDER BY nama ASC";
                                                $hasilK = mysqli_query($koneksi, $queryK);
                                                while ($dataK = mysqli_fetch_array($hasilK))
                                                {
                                                  echo "<option value='".$dataK['id_kabupaten']."'>".$dataK['nama']."</option>";
                                                }
                                              ?>
                                        </select>
                                    </div>
                                       <label for="inputEmail3" class="col-sm-2 control-label">Tarif</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="tarifongkir" placeholder="Tarif" name="tarifongkir">
                                      </div>
                                    </div>
                                    <div class="box-footer">
                                      <input type="button" class="btn btn-default" onclick='self.history.back()' value="Kembali">
                                      <button type="submit" class="btn btn-primary pull-right">Simpan</button>
                                    </div>
                                  </form>
                                <!--</table>
                        </div>-->
                    </div>
                </div>
            </div>
         </div>
         </div>


