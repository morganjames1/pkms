<div class="container-fluid">
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                DAFTAR KRITIK SARAN
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">

                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                   <thead>
                  <tr>
						<th>Nama Lengkap</th>
                        <th>E-mail</th>
                        <th>No Telepon</th>
                        <th>Kritik & Saran</th>
						<th style="width: 110px" class="text-center">Aksi</th>
                  </tr>
                </thead>
                
                <tbody>
					<?php
						include "../lib/config.php";
						include "../lib/koneksi.php";
						$querykritik = mysqli_query($koneksi, "select * from kritiksaran");
						while($kri=mysqli_fetch_array($querykritik))
						{
					?>
					
					<tr>
						<td><?php echo $kri['nama_lengkap']; ?></td>
                        <td><?php echo $kri['email']; ?></td>
                        <td><?php echo $kri['no_telp']; ?></td>
                        <td><?php echo $kri['pesan_kritiksaran']; ?></td>
                      
							<td class="text-center">
                            <div class="btn-group">	
								<a href="<?php echo $admin_url; ?>module/kritiksaran/aksi_hapus.php?id_kritiksaran=
								<?php echo $kri['id_kritiksaran']; ?>" onClick="return confirm('Anda yakin ingin menghapus data ini?')" class="btn btn-danger">
                                    <i class="material-icons">delete</i></a>
							</div>
						</td>
					</tr>
					
					  <?php } ?>
            
                </tbody>
                        </table>
                            <!-- <a href="adminweb.php?module=tambah_member" class="header-dropdown m-r--3 btn btn-sm btn-info btn-flat pull-right">Tambah</a>  -->
                    </div>
                </div>
            </div>
            </div>
            </div>
            </div>
        </div>