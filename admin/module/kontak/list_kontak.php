<div class="container-fluid">
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                DAFTAR KONTAK
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">

                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                   <thead>
                  <tr>
						<th>Tanggal</th>
                        <th>Nama Pengirim</th>
                        <th>Email</th>
                        <th>Subjek</th>
                        <th>Pesan</th>
						<th style="width: 110px" class="text-center">Aksi</th>
                  </tr>
                </thead>
                
                <tbody>
					<?php
						include "../lib/config.php";
						include "../lib/koneksi.php";
						$queryKontak = mysqli_query($koneksi, "select * from kontak");
						while($kon=mysqli_fetch_array($queryKontak))
						{
					?>
					
					<tr>
                        <td><?php echo $kon['tanggal']; ?></td>
						<td><?php echo $kon['nama_pengirim']; ?></td>
                        <td><?php echo $kon['email']; ?></td>
                        <td><?php echo $kon['subjek']; ?></td>
                        <td><?php echo $kon['pesan']; ?></td>
                        
						<td class="text-center">
							<div class="btn-group">
								<a href="adminweb.php?module=edit_member&id_member=
								<?php echo $mem['id_member']; ?>"class="btn btn-warning">
                                    <i class="material-icons">edit</i></a>
								
								<a href="<?php echo $admin_url; ?>module/member/aksi_hapus.php?id_member=
								<?php echo $mem['id_member']; ?>" onClick="return confirm('Anda yakin ingin menghapus data ini?')" class="btn btn-danger">
                                    <i class="material-icons">delete</i></a>
							</div>
						</td>
					</tr>
					
					  <?php } ?>
            
                </tbody>
                        </table>
                            <a href="adminweb.php?module=tambah_member" class="header-dropdown m-r--3 btn btn-sm btn-info btn-flat pull-right">Tambah</a> 
                    </div>
                </div>
            </div>
            </div>
            </div>
            </div>
        </div>