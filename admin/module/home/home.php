<div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>
            <?php 
                $queryJumlahProduk = mysqli_query ($koneksi, "SELECT * FROM produk");
                $queryJumlahKategori = mysqli_query($koneksi, "SELECT * FROM kategori");
                $queryJumlahKritikSaran = mysqli_query($koneksi, "SELECT * FROM kritiksaran");
                $queryJumlahMember = mysqli_query($koneksi, "SELECT * FROM member");
                
                //mysql_num_rows() digunakan untuk mengetahui berapa banyak jumlah baris hasil pemanggilan fungsi mysql_query()
               // $jumlahProduk = mysqli_num_rows($queryJumlahProduk);
               // $jumlahKategori = mysqli_num_rows($queryJumlahKategori);
                $jumlahKritikSaran = mysqli_num_rows($queryJumlahKritikSaran);
                //$jumlahMember = mysqli_num_rows($queryJumlahMember);

            ?>

            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">playlist_add_check</i>
                        </div>
                        <div class="content">
                            <div class="text">PRODUK</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $jumlahProduk; ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">help</i>
                        </div>
                        <div class="content">
                            <div class="text">KATEGORI</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $jumlahKategori; ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">forum</i>
                        </div>
                        <div class="content">
                            <div class="text">KRITIK & SARAN</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $jumlahKritikSaran; ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person_add</i>
                        </div>
                        <div class="content">
                            <div class="text">MEMBER</div>
                           <div class="number count-to" data-from="0" data-to="<?php echo $jumlahMember; ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Widgets -->
            <!-- CPU Usage -->
            <!-- #END# CPU Usage -->
                <!-- Visitors -->
                <!-- #END# Visitors -->
                <!-- Latest Social Trends -->
                <!-- #END# Latest Social Trends -->
                <!-- Answered Tickets -->
                <!-- #END# Answered Tickets -->
            <div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    <div class="card">
                        <div class="header">
                            <h2>PRODUK TERBARU</h2>
                            
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover dashboard-task-infos">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Produk</th>
                                            <th>Kategori</th>
                                            <th>Harga</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 0;
                                        {       
                                            //desc = besar - kecil, asc = kecil - besar
                                            $queryProduk = mysqli_query($koneksi, "SELECT * FROM produk order by id_produk desc limit 8");                                    
                                        }

                                        while($kat=mysqli_fetch_array($queryProduk))
                                        {
                                            $no++;
                                            $queryKategori = mysqli_query($koneksi, "select * from kategori where id_kategori='$kat[id_kategori]'");
                                            $kat2=mysqli_fetch_array($queryKategori);
                                    ?>
                                        <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $kat['nama_produk']; ?></td>
                                            <td><?php echo $kat2['nama_kategori']; ?></td>
                                            <td>Rp. <?php echo number_format ($kat["harga"]); ?></td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="adminweb.php?module=edit_produk&id_produk=<?php echo $kat['id_produk']; ?>" class="btn btn-warning"><i class="material-icons">edit</i></a>
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
                <!-- #END# Task Info -->
                <!-- Browser Usage -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                   <div class="card">
                        <div class="body bg-teal">
                            <div class="font-bold m-b--35">List Member</div>

                            <ul class="dashboard-stat-list">
                            <hr/>
                                <?php
                                   $queryMember = mysqli_query($koneksi, "select * from member order by id_member limit 10");
                                    while($mem=mysqli_fetch_array($queryMember))
                                    {
                                ?>
                                <li>
                               
                                    <?php echo $mem['nama_member'];?>
                                    <span class="pull-right"><b><?php echo $mem['username']; ?></b></span>
                                </li>
                                <?php
                                    };
                                ?>
                            </ul>
                        </div>
                    </div>
                    <div class="card">
                      <div class="body bg-teal">

                         <div class="font-bold m-b--35">List konfirmasi</div>

                            <ul class="dashboard-stat-list">
                            <hr/>
                                <?php
                                   $queryMember = mysqli_query($koneksi, "select * from konfirmasi,member order by id_konfirmasi desc limit 8");
                                    while($mem=mysqli_fetch_array($queryMember))
                                    {
                                ?>
                                <li>
                                    <?php echo $mem['nama_member'];?>
                                    <span class="pull-right"><b><?php echo $mem['status']; ?></b></span>
                                </li>
                                <?php
                                    };
                                ?>
                            </ul>
                        </div>
                           <!--  <div class="font-bold m-b--35">List Kritik Saran</div>
                            <ul class="dashboard-stat-list">
                            <hr/>
                                 <?php
                                   $queryKritikSaran = mysqli_query($koneksi, "select * from kritiksaran order by id_kritiksaran limit 5 desc");
                                    while($kri=mysqli_fetch_array($queryKritikSaran))
                                    {
                                ?> 
                                <li>
                               
                                   <?php echo $kri['nama_lengkap'];?>
                                    <span class="pull-right"><b><?php echo $kri['pesan_kritiksaran']; ?></b></span>
                                </li>
                                <?php
                                    };
                                ?>
                            </ul>
                        </div> -->
                    </div>
                </div>
                </div>
                <!-- #END# Browser Usage -->
            </div>
        </div>