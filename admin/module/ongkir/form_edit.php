
        <div class="container-fluid">

            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                EDIT kota
                            </h2>
                        </div>
                        <div class="body">
                            <!--<div class="table-responsive">

                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">-->
                                 <?php
                include ('../lib/config.php');
                include ('../lib/koneksi.php');
                
                $id = $_GET['id_kota'];
                $querykota = mysqli_query($koneksi,"select * from kota where id_kota='$id'");
                $e = mysqli_fetch_array($querykota);

                            $idkabupaten = $e['id_kabupaten'];
                            $queryKategori = mysqli_query($koneksi,"SELECT * FROM kabupaten where id_kabupaten='$idkabupaten'");
                            $dataKategori = mysqli_fetch_array($queryKategori);
            ?>
        
                <div class="box-body">
                             
                        <form class="form-horizontal" action="../admin/module/ongkir/aksi_edit.php" method="post">
                            <input type="hidden" name="id_kota" value="<?php echo "$e[id_kota]";?>">
                <div class="box-body">
                    <label for="inputEmail3" class="col-sm-2 control-label">Nama Kota</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="namakota" placeholder="Kota" name="namakota" value="<?php echo "$e[kota]"; ?>">
                        </div>
                          <label for="inputEmail3" class="col-sm-2 control-label">Nama Kota</label>
                         <div class="col-sm-10">
                                        <select class="form-control show-tick" data-live-search="true" name="kabupaten" required>
                                            <?php
                                                echo "<option value='".$dataKategori['id_kabupaten']."'>".$dataKategori['nama']."</option>";


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
                            <input type="text" class="form-control" id="tarifkota" placeholder="Tarif" name="tarifkota" value="<?php echo "$e[tarif]"; ?>">
                        </div>
                </div>
                <div class="box-footer">
                    <input type="button" class="btn btn-default" onclick='self.history.back()' value="Kembali">
                        <button type="submit" class="btn btn-primary pull-right">Perbarui</button>
                </div>
                        </form>
                                <!--</table>
                </div>-->
                        </div>
                </div>
            </div>
            </div>
            </div>

