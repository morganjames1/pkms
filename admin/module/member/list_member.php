`<div class="container-fluid">
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                DAFTAR MEMBER
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">

                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                   <thead>
                  <tr>
						<th>Nama Member</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>E-Mail</th>
                        <th>No Telepon</th>
						<th style="width: 110px" class="text-center">Aksi</th>
                  </tr>
                </thead>
                
                <tbody>
					<?php
						include "../lib/config.php";
						include "../lib/koneksi.php";
						$queryMember = mysqli_query($koneksi, "select * from member");
						while($mem=mysqli_fetch_array($queryMember))
						{
					?>
					
					<tr>
						<td><?php echo $mem['nama_member']; ?></td>
                        <td><?php echo $mem['username']; ?></td>
                        <td><?php echo $mem['password']; ?></td>
                        <td><?php echo $mem['email']; ?></td>
                        <td><?php echo $mem['no_telepon']; ?></td>
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