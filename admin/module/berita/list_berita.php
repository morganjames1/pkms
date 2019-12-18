<div class="container-fluid">
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                DAFTAR BERITA
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">

                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                   <thead>
                  <tr>
                        <th>Tgl. Posting</th>
                        <th>Judul</th>
                        <th>Penulis</th>
                        <th>Isi Berita</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                        
                  </tr>
                </thead>
                
                <tbody>
                    <?php
                        include "../lib/config.php";
                        include "../lib/koneksi.php";
                        $queryBerita = mysqli_query($koneksi, "SELECT * from berita b JOIN admin a ON b.id_admin = a.id_admin");


                        while($min=mysqli_fetch_array($queryBerita))
                        {
                    ?>
                    
                    <tr>
                        <td><?php echo $min['tanggal']; ?></td>
                        <td><?php echo $min['judul_berita']; ?></td>
                        <td><?php echo $min['nama_admin']; ?></td>
                        <td><?php echo $min['isi_berita']; ?></td>
                        <td>
                        <img src="images/<?php echo $min['gambar']; ?>" width = '500px'>
                      </td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="adminweb.php?module=edit_berita&id_berita=
                                <?php echo $min['id_berita']; ?>"class="btn btn-warning">
                                    <i class="material-icons">edit</i></a>
                                
                                <a href="<?php echo $admin_url; ?>module/berita/aksi_hapus.php?id_berita=
                                <?php echo $min['id_berita']; ?>" onClick="return confirm('Anda yakin ingin menghapus data ini?')" class="btn btn-danger">
                                    <i class="material-icons">delete</i></a>
                            </div>
                        </td>
                    </tr>
                    
                      <?php } ?>
            
                </tbody>
                        </table>
                            <a href="adminweb.php?module=tambah_berita" class="header-dropdown m-r--3 btn btn-sm btn-info btn-flat pull-right">Tambah</a> 
                    </div>
                </div>
            </div>
            </div>
            </div>
            </div>
        </div>