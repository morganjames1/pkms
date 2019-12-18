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
                            <h2>EDIT SLIDE</h2>
                        </div>
                        <div class="body">
                        <?php
                            $id = $_GET['id_slide'];
                            $queryslide = mysqli_query($koneksi, "select * from slide where id_slide='$id'");
                            $data = mysqli_fetch_array($queryslide);
                        ?>

                            <form id="form_validation" method="POST" action="../admin/module/slide/aksi_edit.php"  enctype="multipart/form-data">
                             <input type="hidden" name="id_slide" value="<?php echo "$data[id_slide]"; ?>">
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Kata 1</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="email_address_2" class="form-control" placeholder="Masukkan Kata 1" name="kata1" value="<?php echo $data['comment1'];?>"required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Kata 2</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="email_address_2" class="form-control" placeholder="Masukkan Kata 2" name="kata2" value="<?php echo $data['comment2'];?>"required>
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
                                                <img src="../file/slide/<?php echo $data['gambar']; ?>" class="img-responsive" maxwidth="204" maxheight="204" alt="User" />
                                            </div>
                                            <div class="caption">
                                                <h3>Gambar slide</h3>
                                                <p>
                                                    Format JPG, JPEG, PNG. 
                                                    </br>File Size 1920 x 930 Pixel
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