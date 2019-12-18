         <?php
            if ($_GET['module'] == 'home') {
                include "module/home/home.php";
        
            }elseif ($_GET['module']=='admin') {
                include "module/admin/list_admin.php";
            }  elseif ($_GET['module'] == 'tambah_admin') {
                include "module/admin/form_tambah.php";
            } elseif ($_GET['module'] == 'edit_admin') {
                include "module/admin/form_edit.php";
            }elseif($_GET['module']=='edit_password_admin'){
                include "module/admin/form_edit_password.php";

            }elseif ($_GET['module']=='berita') {
                include "module/berita/list_berita.php";
            }  elseif ($_GET['module'] == 'tambah_berita') {
                include "module/berita/form_tambah.php";
            } elseif ($_GET['module'] == 'edit_berita') {
                include "module/berita/form_edit.php";

            } elseif ($_GET['module']=='kategori') {
                include "module/kategori/list_kategori.php";
            } elseif ($_GET['module']=='tambah_kategori') {
                include "module/kategori/form_tambah.php";
            } elseif ($_GET['module']=='edit_kategori') {
                include "module/kategori/form_edit.php";

            } elseif ($_GET['module'] == 'kritiksaran') {
                include "module/kritiksaran/list_kritiksaran.php";
            }   
            elseif ($_GET['module'] == 'kritiksaran') {
                include "module/kritiksaran/aksi_hapus.php";

            }elseif ($_GET['module'] == 'slide') {
                include "module/slide/list_slide.php";
            }elseif ($_GET['module'] == 'tambah_slide') {
                include "module/slide/form_tambah.php"; 
            }elseif ($_GET['module'] == 'edit_slide') {
                include "module/slide/form_edit.php";
            }else 
            {
                 include "module/home/home.php";
            }
            ?>