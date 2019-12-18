<div class="container-fluid">
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                DAFTAR ADMIN
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">

                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                   <thead>
                  <tr>
                        <th>Nama Admin</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>E-Mail</th>
                        <th>No.Telepon</th>
                        <th>Gambar</th>
                        <th style="width: 110px" class="text-center">Aksi</th>
                  </tr>
                </thead>
                
                <tbody>
                    <?php
                        include "../lib/config.php";
                        include "../lib/koneksi.php";
                        $queryAdmin = mysqli_query($koneksi, "select * from admin");
                        while($min=mysqli_fetch_array($queryAdmin))
                        {
                    ?>
                    
                    <tr>
                        <td><?php echo $min['nama_admin']; ?></td>
                        <td><?php echo $min['username']; ?></td>
                        <td><?php echo $min['password']; ?></td>
                        <td><?php echo $min['email']; ?></td>
                        <td><?php echo $min['no_telepon'];?></td>
                      <td>
                        <img src="../file/profil/<?php echo $min['gambar_admin'];?>" width = '300px'>
                      </td>



                        <td class="text-center">
                            <div class="btn-group">
                                <a href="adminweb.php?module=edit_admin&id_admin=
                                <?php echo $min['id_admin']; ?>"class="btn btn-warning">
                                    <i class="material-icons">edit</i></a>
                                
                                <a href="<?php echo $admin_url; ?>module/admin/aksi_hapus.php?id_admin=
                                <?php echo $min['id_admin']; ?>" onClick="return confirm('Anda yakin ingin menghapus data ini?')" class="btn btn-danger">
                                    <i class="material-icons">delete</i></a>
                            </div>
                        </td>
                    </tr>
                    
                      <?php } ?>
            
                </tbody>
                        </table>
                            <a href="adminweb.php?module=tambah_admin" class="header-dropdown m-r--3 btn btn-sm btn-info btn-flat pull-right">Tambah</a> 
                    </div>
                </div>
            </div>
            </div>
            </div>
            </div>
        </div>