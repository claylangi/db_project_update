<?php
session_start();

// Menghapus semua variabel sesi
session_unset();

// Mengakhiri sesi
session_destroy();

// Redirect ke halaman login
header("Location: /database/Project/login_and_regist/login.php");
exit;
?>
