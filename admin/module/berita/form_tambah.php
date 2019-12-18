        <div class="container-fluid">
            <div class="block-header">
            </div>
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>TAMBAH BERITA</h2>
                        </div>
                        <div class="body">
                            <form id="form_validation" method="POST" action="../admin/module/berita/aksi_simpan.php" enctype="multipart/form-data">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="judul_berita" required>
                                        <label class="form-label">Judul</label>
                                    </div>
                                </div>            
                                
                                <div class="form-group form-float">
                                    <div class="form-line">
                                       <!--  <textarea name="deskripsi" cols="30" rows="5" class="form-control no-resize" required></textarea>
                                        <label class="form-label">Penulis</label>  
 -->
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
                                  <script type="text/javascript" src="..\admin\assets\plugins\ckeditor/ckeditor.js"></script>
                                  <textarea class="ckeditor" id="ckeditor" placeholder="masukkan isi berita" name="isi_berita"></textarea> 
                                  </div>
                                </div>
                                <script type="text/javascript" src="ckeditor/ckeditor.js"></script>

                                  <div class="box-body">
                                  <label for="inputEmail3" class="col-sm-2 control-label"></label>
                                  <div class="col-sm-10">
                                  <div class="btn btn-default btn-file">
                                    <i class="fa fa-paperclip"></i> Gambar Cover
                                    <input type="file" name="gambar">
                                  </div>
                                  <p class="help-block">Ukuran gambar : 300px x 300px</p>
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
                       