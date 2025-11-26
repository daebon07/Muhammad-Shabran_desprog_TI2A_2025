<?php
    session_start();
    session_destroy();
    
    echo "Anda berhasil logout";
    echo "<br> <a href='sessionLoginForm.html'>Kembali ke Login</a>";
?>