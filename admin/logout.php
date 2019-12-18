<?php
  session_start();
  session_destroy();

  echo "<script>alert('Proses logout berhasil'); window.location = 'index.php'</script>";	
?>