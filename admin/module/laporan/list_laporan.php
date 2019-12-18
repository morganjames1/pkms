          <div class="container-fluid">
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                             LAPORAN PENJUALAN
                            </h2>
                        </div>

                         </div>
                        <div class="body">
                        <form name="form1" method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>?module=laporan">
                            <input type="date" name="start_date" >
                            <input type="date" name="end_date">
                            <button type="submit" name='submit'>Submit</button>
                            </form>
                            <br>
                            <?php
                                if (isset($_POST['submit'])){
                                $startDate=$_POST['start_date'];
                                $endDate=$_POST['end_date'];
                                echo "Periode ".$startDate." Sampai ".$endDate;}
                            ?>

                            <div class="table-responsive">
                             <br>
                                <table class="table table-bordered table-striped table-hover dataTable js-basic-example">
                                    <thead>
                                        <tr>
                                            <th>Nama Produk</th>
                                            <th>Jumlah Terjual</th>
                                            <th>Harga</th>
                                            <th>Sub total</th>
                                         
                                            <!-- <th>Jumlah Order</th> -->
                                        <!--     <th>Tanggal Pesan</th> -->
                                         <!--    <th>Status</th> -->
                                            <!-- <th style="width: 110px" class="text-center">Aksi</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>

                       
                            
                                

                                <?php $total=0;
                                $totaljual=0;

                                // get action method
    // if action is input
    if (isset($_POST['submit'])){
$startDate=$_POST['start_date'];
$endDate=$_POST['end_date'];


                                            $queryLaporan = mysqli_query($koneksi,"SELECT A.id_produk, SUM(A.jumlah) as jumlah,
                                             B.nama_produk, B.harga, C.nama_kategori
                                FROM pembelian A INNER JOIN produk B ON A.id_produk=B.id_produk
                                INNER JOIN kategori C ON C.id_kategori=B.id_kategori
                                WHERE A.tanggal_pembelian BETWEEN '$startDate' AND '$endDate' GROUP BY A.id_produk");
                                            while($pem=mysqli_fetch_array($queryLaporan)){
                                                $total=$total+($pem['harga']* $pem['jumlah']);
                                                $totaljual=$totaljual+($pem['jumlah']);
                                             ?>
                                            


    

                 <tr>
                                            <td><?php echo $pem['nama_produk']; ?></td>
                                              <td><?php echo $pem['jumlah']; ?></td>
                                                <td><?php echo number_format ($pem['harga']); ?></td>
                                                <td><?php echo $pem['harga']* $pem['jumlah'];?></td>
<!-- 
                                            <td><img src="../file/produk/<?php echo $pem['gambar']; ?>" width='130px' 
                                            height='100px'/></td> -->
                                         <!--    <td><?php echo $pem['jumlah']; ?></td> -->
                                            <!--  <td><?php echo $pem['tanggal_pembelian']; ?></td> -->
                                        <!--     <td><?php echo $pem['status_order']; ?></td> -->
                                          <!--   <td class="text-center">
                                                 <div class="btn-group">
                                                    <a href="adminweb.php?module=detail_pembelian&id_session=<?php echo $pem['id_member']; ?>" class="btn btn-warning"> <i class="material-icons">contacts</i></a>
                                                    
                                                    
                                                    <a href="<?php echo $admin_url; ?>module/pembelian/aksi_hapus.php?id_pembelian=
                                                    <?php echo $pem['id_pembelian']; ?>" onClick="return confirm('Anda yakin ingin menghapus data ini?')" class="btn bg-pink waves-effect">
                                                        <i class="material-icons">report_problem</i></a> -->
                                                </div>
                                            </td>
                                        </tr>
                                    <?php
                                        }};
                                    ?>
                                     
                                    </tbody>
                                    <tr>

                                            <td colspan='1' align='right'>Total Terjual</td>
                                              <td><?php echo ($totaljual); ?></td>

                                            <td align='right'>Total</td>
                                              <td><?php echo number_format ($total); ?></td>
                                              
                                             
                                          </tr>    

                                </table>
                              <!--  <?php echo number_format ($total); ?> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
