<?php
setcookie("tipoCookie", "primera_vez", time() - 3600,'/');
header("Location: principal.php");
exit;
?>