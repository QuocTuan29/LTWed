<?php
session_start();
session_destroy();
//Chỉnh lại chỗ này về trang index đi 
header("Location: index.php");
?>