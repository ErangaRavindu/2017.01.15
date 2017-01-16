<?php
session_start();
session_destroy();
header('Location: ../view/pages/login_index.php');
exit();
?>