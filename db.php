# in /var/www/html/db.php
<?php
$mysql = new mysqli("localhost", "root", "toor");
echo "MySQL Server info: ".$mysql->host_info;
?>
