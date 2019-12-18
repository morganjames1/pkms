  <?php
    include ('../lib/config.php');
    include ('../lib/koneksi.php');
  ?>

        <div class="container-fluid">
            <div class="block-header">
            </div>
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>EDIT KATEGORI</h2>
                        </div>

                        <?php
                
                            $id = $_GET['id_kategori'];
                            $queryKategori = mysqli_query($koneksi, "select * from kategori where id_kategori='$id'");
                            $abo = mysqli_fetch_array($queryKategori);
                        ?>

                        <div class="body">
                            <form id="form_validation" method="POST" action="../admin/module/kategori/aksi_edit.php" enctype="multipart/form-data">
                            <input type="hidden" name="id_kategori" value="<?php echo "$abo[id_kategori]";?>">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="namaKategori" value="<?php echo $abo['nama_kategori']; ?>" required>
                                        <label class="form-label">Nama</label>
                                    </div>
                                </div>            
                                
                               
                                <button class="btn btn-primary waves-effect" type="submit">SIMPAN</button>
                                <input type="button" class="btn btn-danger btn-flat pull-right" onclick='self.history.back()' value="KEMBALI">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
