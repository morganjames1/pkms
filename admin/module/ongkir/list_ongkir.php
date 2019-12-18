        <div class="container-fluid">
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                DAFTAR KABUPATEN
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-basic-example">
                                    <thead>
                                        <tr>
                                            <th>Kabupaten</th>
                                            <th style="width: 110px" class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $no = 1;

                                        $queryongkir = mysqli_query($koneksi, "SELECT * FROM  kabupaten");
                                        while($kat=mysqli_fetch_array($queryongkir))
                                        {
                                            $id = $kat['id_kabupaten'];

                                    ?>
                                        <tr>
                                            <td><?php echo $kat['nama']; ?></td>
                                            
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <!-- <a href="adminweb.php?module=edit_kabupaten&id_kabupaten=<?php echo $kat['id_kabupaten']; ?>" class="btn btn-warning"><i class="material-icons">edit</i></a>
                                                     -->
                                                    <a href="<?php echo $admin_url; ?>module/ongkir/aksi_hapus.php?id_kabupaten=<?php echo $kat['id_kabupaten']; ?>" onClick="return confirm('Anda yakin ingin menghapus data ini?')" class="btn btn-danger"><i class="material-icons">delete</i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php
                                        };
                                    ?>
                                    </tbody>
                                </table>
                                <a href="adminweb.php?module=tambah_ongkir" class="header-dropdown m-r--3 btn btn-sm btn-info btn-flat pull-right">Tambah</a> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                DAFTAR KOTA DAN TARIF
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-basic-example">
                                    <thead>
                                        <tr>
                                            <th>Kota</th>
                                            <th>Tarif</th>
                                            <th style="width: 110px" class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $no = 1;

                                        $queryongkir = mysqli_query($koneksi, "select * from kota");
                                        while($kot=mysqli_fetch_array($queryongkir))
                                        {
                                            $id = $kot['id_kota'];

                                    ?>
                                        <tr>
                                            <td><?php echo $kot['kota']; ?></td>
                                            <td><?php echo $kot['tarif']; ?></td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="adminweb.php?module=edit_kota&id_kota=<?php echo $kot['id_kota']; ?>" class="btn btn-warning"><i class="material-icons">edit</i></a>
                                                    
                                                    <a href="<?php echo $admin_url; ?>module/ongkir/aksi_hapus_kota.php?id_kota=<?php echo $kot['id_kota']; ?>" onClick="return confirm('Anda yakin ingin menghapus data ini?')" class="btn btn-danger"><i class="material-icons">delete</i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php
                                        };
                                    ?>
                                    </tbody>
                                </table>
                                <a href="adminweb.php?module=tambah_ongkir" class="header-dropdown m-r--3 btn btn-sm btn-info btn-flat pull-right">Tambah</a> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



