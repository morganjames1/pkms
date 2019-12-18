<div class="container-fluid">
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                DAFTAR PRODUK
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">

                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                   <thead>
                  <tr>
                        <th>Nama Produk</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Size</th>
                        <th>Gambar</th>
						<th style="width: 110px" class="text-center">Aksi</th>
                  </tr>
                </thead>
                
                <tbody>
					<?php
						include "../lib/config.php";
						include "../lib/koneksi.php";
						$queryProduk = mysqli_query($koneksi, "select * from produk, size where produk.id_size=size.id_size");
						while($pro=mysqli_fetch_array($queryProduk))
						{
					?>
					
					<tr>
						<td><?php echo $pro['nama_produk']; ?></td>
                         <td><?php echo $pro['harga']; ?></td>

                      <!--   <th>Rp. <?php echo number_format($totalbelanja) ?></th> --> 
                       <!--  <td>Rp. <?php echo number_format($pro["harga"]);?></td>
 -->
                        <td><?php echo $pro['stok']; ?></td>
                         <td><?php echo $pro['size']; ?></td>
                        <td><img src="../file/produk/<?php echo $pro['gambar']; ?>" width='130px' height='100px'/></td>
						<td class="text-center">
							<div class="btn-group">
								<a href="adminweb.php?module=edit_produk&id_produk=
								<?php echo $pro['id_produk']; ?>"class="btn btn-warning">
                                    <i class="material-icons">edit</i></a>
								
								<a href="<?php echo $admin_url; ?>module/produk/aksi_hapus.php?id_produk=
								<?php echo $pro['id_produk']; ?>" onClick="return confirm('Anda yakin ingin menghapus data ini?')" 
                                class="btn btn-danger">
                                    <i class="material-icons">delete</i></a>
							</div>
						</td>
					</tr>
					
					  <?php } ?>
            
                </tbody>
                        </table>
								<a href="adminweb.php?module=tambah_produk" class="header-dropdown m-r--3 btn btn-sm btn-info btn-flat pull-right">Tambah</a>
							</div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
            </div>
        </div>