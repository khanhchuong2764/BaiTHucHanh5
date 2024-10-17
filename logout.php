<?php
session_start();// Xóa các giá tr  trong sessionị
unset($_SESSION['user']);unset($_SESSION['fullname']);unset($_SESSION['id']);// Xóa session
session_destroy();// Chuy n h ng v  trang đăng nh pể ướ ề ậ
header('Location: login.php');?>