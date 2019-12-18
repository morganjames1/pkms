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
                            <h2>EDIT MEMBER</h2>
                        </div>

                        <?php
                
                            $id = $_GET['id_member'];
                            $queryMember = mysqli_query($koneksi, "select * from member where id_member='$id'");
                            $mem = mysqli_fetch_array($queryMember);
                        ?>

                        <div class="body">
                            <form id="form_validation" method="POST" action="../admin/module/member/aksi_edit.php" enctype="multipart/form-data">
                            <input type="hidden" name="id_member" value="<?php echo "$mem[id_member]";?>">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="namaMember" value="<?php echo $mem['nama_member']; ?>" required>
                                        <label class="form-label">Nama</label>
                                    </div>
                                </div>            
                                <div class="demo-masked-input">
                                    <div class="row clearfix">
                                        <div class="col-md-3">
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="number" name="no_telepon" class="form-control" placeholder="No. Telepon" value="<?php echo $mem['no_telepon']; ?>" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" name="email" class="form-control email" placeholder="Email. Ex: example@example.com" value="<?php echo $mem['email']; ?>" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <textarea name="alamat" cols="30" rows="5" class="form-control no-resize" required><?php echo $mem['alamat']; ?></textarea>
                                        <label class="form-label">Alamat</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="username" value="<?php echo $mem['username']; ?>" required>
                                        <label class="form-label">Username</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                        <a href="adminweb.php?module=edit_password_member&id_member=<?php echo $mem['id_member']; ?>" class="btn bg-blue waves-effect"><i class="material-icons">vpn_key</i><div class="name"> Ubah Password</div></a>
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
    <script src="../../plugins/jquery/jquery.min.js"></script>

    <script src="../asset/js/pages/forms/advanced-form-elements.js"></script>
