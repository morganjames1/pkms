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
                            <h2>EDIT BERITA</h2>
                        </div>

                        <?php
                
                            $id = $_GET['id_berita'];
                            $queryBerita = mysqli_query($koneksi, "select * from berita where id_berita='$id'");
                            $min = mysqli_fetch_array($queryBerita);
                        ?>

                          <div class="box-body">
                             
                        <form class="form-horizontal" action="../admin/module/berita/aksi_edit.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id_berita" value="<?php echo "$min[id_berita]";?>">
                <div class="box-body">
                    <label for="inputEmail3" class="col-sm-2 control-label">Judul</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="judul" placeholder="judul" name="judul_berita" value="<?php echo "$min[judul_berita]"; ?>">
                        </div>
                       <div class="box-body">
                 
                       <select class="form-control select2" name="id_admin" style="width: 100%;">
                                          <option value="">Pilih Admin</option>
                                          <?php
                                            $query = "SELECT * FROM admin";
                                            $hasil = mysqli_query($koneksi,$query);
                                            while ($data = mysqli_fetch_array($hasil))
                                            {
                                              echo "<option value='".$data['id_admin']."'>".$data['nama_admin']."</option>";
                                            }
                                          ?>
                                          </select>
                   
                  </div>
                </div>
                        <div class="box-body">
                  <label for="inputEmail3" class="col-sm-2 control-label">Isi Berita</label>
                  <div class="col-sm-10">
                  <script type="text/javascript" src="..\assets\plugins\ckeditor/ckeditor.js"></script>
                  <textarea class="ckeditor" id="ckeditor" placeholder="masukkan isi berita" name="isi_berita"><?php echo "$min[isi_berita]"; ?></textarea> 
                  </div>
                </div>


                  <label for="inputEmail3" class="col-sm-2 control-label">Gambar Cover</label>
                  <div class="col-sm-10">
                    <div class="input-group">
                      <img src="../image/berita/<?php echo $min['gambar']; ?>" style="max-width: 150px;">
                      <div class="btn btn-default btn-file">
                        <i class="fa fa-paperclip"></i> Gambar
                        <input type="file" name="gambar">
                      </div>
                      <p class="help-block">Ukuran gambar : 150px x 150px</p>
                   </div>
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
