  <?php
    include ('../lib/config.php');
  ?>

<div class="container-fluid">
            <div class="block-header">
            </div>
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>EDIT PRODUK</h2>
                        </div>
                        <div class="body">
                        <?php
                            $id = $_GET['id_produk'];
                            $queryProduk = mysqli_query($koneksi, "select * from produk where id_produk='$id'");
                            $data = mysqli_fetch_array($queryProduk);

                            $idKategori = $data['id_kategori'];
                            $queryKategori = mysqli_query($koneksi,"SELECT * FROM kategori where id_kategori='$idKategori'");
                            $dataKategori = mysqli_fetch_array($queryKategori);

                            $idSize = $data['id_size'];
                            $querySize = mysqli_query($koneksi,"SELECT * FROM size where id_size='$idSize'");
                            $dataSize = mysqli_fetch_array($querySize);
                        ?>

                            <form id="form_validation" method="POST" action="../admin/module/produk/aksi_edit.php"  enctype="multipart/form-data">
                                <input type="hidden" name="id_produk" value="<?php echo "$data[id_produk]"; ?>">
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Nama Produk</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="email_address_2" class="form-control" placeholder="Masukkan nama produk" name="nama_produk" value="<?php echo $data['nama_produk']; ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Kategori</label>
                                    </div>
                                    <div class="col-md-3">
                                        <select class="form-control show-tick" data-live-search="true" name="kategori" required>
                                            <?php
                                                echo "<option value='".$dataKategori['id_kategori']."'>".$dataKategori['nama_kategori']."</option>";


                                                $queryK = "SELECT * FROM kategori";
                                                $hasilK = mysqli_query($koneksi, $queryK);
                                                while ($dataK = mysqli_fetch_array($hasilK))
                                                {
                                                  echo "<option value='".$dataK['id_kategori']."'>".$dataK['nama_kategori']."</option>";
                                                }
                                              ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Stok</label>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="number" class="timepicker form-control" placeholder="Masukkan Stok Produk" name="stok" required
                                                value="<?php echo $data['stok']?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Harga</label>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="number" class="timepicker form-control" placeholder="Masukkan Harga Produk" name="harga" required
                                                value="<?php echo $data['harga']?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Berat(gr)</label>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="number" class="timepicker form-control" placeholder="Masukkan Berat Produk" name="berat" required
                                                value="<?php echo $data['berat']?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Size</label>
                                    </div>
                                    <div class="col-md-3">
                                        <select class="form-control show-tick" data-live-search="true" name="size" required>
                                            <?php
                                                echo "<option value='".$dataSize['id_size']."'>".$dataSize['size']."</option>";


                                                $queryS = "SELECT * FROM size";
                                                $hasilS = mysqli_query($koneksi, $queryS);
                                                while ($dataS = mysqli_fetch_array($hasilS))
                                                {
                                                  echo "<option value='".$dataS['id_size']."'>".$dataS['size']."</option>";
                                                }
                                              ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Bahan</label>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="timepicker form-control" placeholder="Masukkan Bahan Produk" name="bahan" required
                                                value="<?php echo $data['bahan']?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Deskripsi</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <textarea id="tinymce" name="deskripsi" rows="4" class="form-control no-resize" placeholder="Deskripsi Produk..."><?php echo $data['deskripsi']?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2"></label>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="thumbnail">
                                            <div class="image">
                                                <img src="../file/produk/<?php echo $data['gambar']; ?>" class="img-responsive" maxwidth="204" maxheight="204" alt="User" />
                                            </div>
                                            <div class="caption">
                                                <h3>Foto Produk</h3>
                                                <p>
                                                    Format JPG, JPEG, PNG. 
                                                    </br>File Size 1200 x 1486 Pixel
                                                </p>                                                
                                                <div class="input-group">
                                                    <label class="input-group-btn">
                                                        <span class="btn btn-primary">
                                                            Browse&hellip; 
                                                            <input type="file" name="file" style="display: none;">
                                                        </span>
                                                    </label>
                                                </div>                                                
                                            </div>
                                        </div>
                                    </div>
                                </div> 

                                <button class="btn btn-primary waves-effect" type="submit">SIMPAN</button>
                                <input type="button" class="btn btn-danger btn-flat pull-right" onclick='self.history.back()' value="KEMBALI">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Validation -->