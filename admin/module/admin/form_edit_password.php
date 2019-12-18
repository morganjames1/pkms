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
                            <h2>EDIT PASSWORD</h2>
                        </div>

                        <?php                          
                          $id = $_GET['id_admin'];

                          $queryA = mysqli_query($koneksi, "select * from admin where id_admin='$id'");
                          $A = mysqli_fetch_array($queryA);
                        ?>

                        <div class="body">
                            <form id="form_validation" method="POST" action="../admin/module/admin/aksi_edit_password.php">                                
                                <input type="hidden" name="id_admin" value="<?php echo "$A[id_admin]";?>">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="password" class="form-control" name="password" required>
                                        <label class="form-label">Password Lama</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="password" class="form-control" name="repassword" required>
                                        <label class="form-label">Password Baru</label>
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
    <script src="../../plugins/jquery/jquery.min.js"></script>

    <script src="../asset/js/pages/forms/advanced-form-elements.js"></script>
