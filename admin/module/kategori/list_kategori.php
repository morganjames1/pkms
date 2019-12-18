<div class="container-fluid">
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                DAFTAR KATEGORI
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">

                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                   <thead>
                  <tr>
                        <th>Nama Kategori</th>
                        <th style="width: 110px" class="text-center">Aksi</th>
                  </tr>
                </thead>
                
                <tbody>
                    <?php
                        include "../lib/config.php";
                        include "../lib/koneksi.php";
                        $querykategori = mysqli_query($koneksi, "select * from kategori");
                        while($min=mysqli_fetch_array($querykategori))
                        {
                    ?>
                    
                    <tr>
                        <td><?php echo $min['nama_kategori']; ?></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="adminweb.php?module=edit_kategori&id_kategori=
                                <?php echo $min['id_kategori']; ?>"class="btn btn-warning">
                                    <i class="material-icons">edit</i></a>
                                
                                <a href="<?php echo $admin_url; ?>module/kategori/aksi_hapus.php?id_kategori=<?php echo $min['id_kategori']; ?>" onClick="return confirm('Anda yakin ingin menghapus data ini?')" class="btn btn-danger">
                                    <i class="material-icons">delete</i></a>
                            </div>
                        </td>
                    </tr>
                    
                      <?php } ?>
            
                </tbody>
                        </table>
                            <a href="adminweb.php?module=tambah_kategori" class="header-dropdown m-r--3 btn btn-sm btn-info btn-flat pull-right">Tambah</a> 
                    </div>
                </div>
            </div>
            </div>
            </div>
            </div>
        </div>