
        <div class="container-fluid">

            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                INPUT RESI
                            </h2>
                        </div>
                        <div class="body">
                            <!--<div class="table-responsive">

                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">-->
                                 <?php
                include ('../lib/config.php');
                include ('../lib/koneksi.php');
                
                $id = $_GET['id_konfirmasi'];
                 $id_member= $_GET['id_member'];
                $queryKategori = mysqli_query($koneksi,"SELECT * FROM konfirmasi WHERE id_konfirmasi ='$id'");
                $e = mysqli_fetch_array($queryKategori);
                 $querymember = mysqli_query($koneksi,"SELECT * FROM member WHERE id_member ='$id_member'");
                 $f = mysqli_fetch_array($querymember);
            ?>
        
                <div class="box-body">
                             
                        <form class="form-horizontal" action="../admin/module/konfirmasi/aksi_edit.php" method="post">
                            <input type="hidden" name="id_konfirmasi" value="<?php echo "$e[id_konfirmasi]";?>">
                             <input type="hidden" name="email" value="<?php echo "$f[email]";?>">
                <div class="box-body">
                    <label for="inputEmail3" class="col-sm-2 control-label">Input No Resi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="no_resi" placeholder="no_resi" name="no_resi" value="<?php echo $e['no_resi'];?>">
                        </div>
                </div>
                <div class="box-footer">
                    <input type="button" class="btn btn-default" onclick='self.history.back()' value="Kembali">
                        <button type="submit" class="btn btn-primary pull-right">Selesai</button>
                </div>
                        </form>
                                <!--</table>
                </div>-->
                        </div>
                </div>
            </div>
            </div>
            </div>

            

