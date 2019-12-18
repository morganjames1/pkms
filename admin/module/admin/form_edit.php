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
                            <h2>EDIT ADMIN</h2>
                        </div>

                        <?php
                
                            $id = $_GET['id_admin'];
                            $queryAdmin = mysqli_query($koneksi, "select * from admin where id_admin='$id'");
                            $min = mysqli_fetch_array($queryAdmin);
                        ?>

                        <div class="body">
                            <form id="form_validation" method="POST" action="../admin/module/admin/aksi_edit.php" enctype="multipart/form-data">
                            <input type="hidden" name="id_admin" value="<?php echo "$min[id_admin]";?>">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="namaAdmin" value="<?php echo $min['nama_admin']; ?>" required>
                                        <label class="form-label">Nama</label>
                                    </div>
                                </div>            
                                <div class="demo-masked-input">
                                    <div class="row clearfix">
                                        <div class="col-md-3">
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="number" name="no_telepon" class="form-control" placeholder="No. Telepon" value="<?php echo $min['no_telepon']; ?>" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" name="email" class="form-control email" placeholder="Email. Ex: example@example.com" value="<?php echo $min['email']; ?>" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="username" value="<?php echo $min['username']; ?>" required>
                                        <label class="form-label">Username</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                        <a href="adminweb.php?module=edit_password_admin&id_admin=<?php echo $min['id_admin']; ?>" class="btn bg-blue waves-effect"><i class="material-icons">vpn_key</i><div class="name"> Ubah Password</div></a>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                    <div class="row clearfix">
                                        <div class="col-md-3">
                                        <div class="thumbnail">
                                            <div class="image">
                                                <img src="../file/profil/<?php echo $min['gambar']; ?>" class="img-responsive" maxwidth="204" maxheight="204" alt="User" />
                                            </div>
                                            <div class="caption">
                                                <h3>Foto Profil</h3>                                              
                                                <div class="input-group">
                                                    <label class="input-group-btn">
                                                        <span class="btn btn-primary">
                                                            Browse&hellip; <input type="file" name="file" style="display: none;" multiple>
                                                        </span>
                                                    </label>
                                                </div>                                                
                                            </div>
                                        </div>
                                    </div>
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
                       

    <!-- Jquery Core Js -->
    <script src="../plugins/jquery/jquery.min.js"></script>

    <script src="../asset/js/pages/forms/advanced-form-elements.js"></script>
