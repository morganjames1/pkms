        <div class="container-fluid">
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                DAFTAR PEMBELIAN
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-basic-example">
                                    <thead>
                                        <tr>
                                            <th>Nama Member</th>
                                            <th>No. HP</th>
                                            <th>Alamat</th>
                                            <th>Gambar Produk</th>
                                            <th>Jumlah Order</th>
                                            <th>Tanggal Pesan</th>
                                         <!--    <th>Status</th> -->
                                            <th style="width: 110px" class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                            $queryPembelian = mysqli_query($koneksi,"SELECT * FROM pembelian, produk, member WHERE 
                                            pembelian.id_produk=produk.id_produk AND pembelian.id_member = member.id_member");
                                            while($pem=mysqli_fetch_array($queryPembelian))
                                            {
                                        ?>
                                        <tr>
                                            <td><?php echo $pem['nama_member']; ?></td>
                                              <td><?php echo $pem['no_telepon']; ?></td>
                                                <td><?php echo $pem['alamat']; ?></td>

                                            <td><img src="../file/produk/<?php echo $pem['gambar']; ?>" width='130px' height='100px'/></td>
                                            <td><?php echo $pem['jumlah']; ?></td>
                                             <td><?php echo $pem['tanggal_pembelian']; ?></td>
                                        <!--     <td><?php echo $pem['status_order']; ?></td> -->
                                            <td class="text-center">
                                                 <div class="btn-group">
                                                    <a href="adminweb.php?module=detail_pembelian&id_session=<?php echo $pem['id_member']; ?>" class="btn btn-warning"> <i class="material-icons">contacts</i></a>
                                                    
                                                    
                                                    <a href="<?php echo $admin_url; ?>module/pembelian/aksi_hapus.php?id_pembelian=
                                                    <?php echo $pem['id_pembelian']; ?>" onClick="return confirm('Anda yakin ingin menghapus data ini?')" class="btn bg-pink waves-effect">
                                                        <i class="material-icons">report_problem</i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php
                                        };
                                    ?>
                                    </tbody>
                                </table>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



