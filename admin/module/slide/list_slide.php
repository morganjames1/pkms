<div class="container-fluid">
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                DAFTAR slide
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">

                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                   <thead>
                  <tr>
                        <th>Kata 1</th>
                        <th>Kata 2</th>
                        
                        <th>Gambar</th>
						<th style="width: 110px" class="text-center">Aksi</th>
                  </tr>
                </thead>
                
                <tbody>
					<?php
						include "../lib/config.php";
						include "../lib/koneksi.php";
						$queryslide = mysqli_query($koneksi, "select * from slide");
						while($pro=mysqli_fetch_array($queryslide))
						{
					?>
					
					<tr>
						<td><?php echo $pro['comment1']; ?></td>
                        <td><?php echo $pro['comment2']; ?></td>
                        
                        <td><img src="../file/slide/<?php echo $pro['gambar']; ?>" width='130px' height='100px'/></td>
						<td class="text-center">
							<div class="btn-group">
								<a href="adminweb.php?module=edit_slide&id_slide=
								<?php echo $pro['id_slide']; ?>"class="btn btn-warning">
                                    <i class="material-icons">edit</i></a>
								
								<a href="<?php echo $admin_url; ?>module/slide/aksi_hapus.php?id_slide=
								<?php echo $pro['id_slide']; ?>" onClick="return confirm('Anda yakin ingin menghapus data ini?')" 
                                class="btn btn-danger">
                                    <i class="material-icons">delete</i></a>
							</div>
						</td>
					</tr>
					
					  <?php } ?>
            
                </tbody>
                        </table>
								<a href="adminweb.php?module=tambah_slide" class="header-dropdown m-r--3 btn btn-sm btn-info btn-flat pull-right">Tambah</a>
							</div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
            </div>
        </div>