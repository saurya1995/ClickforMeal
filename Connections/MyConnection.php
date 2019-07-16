<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_MyConnection = "localhost";
$database_MyConnection = "ecommerce";
$username_MyConnection = "root";
$password_MyConnection = "";
$MyConnection = mysql_pconnect($hostname_MyConnection, $username_MyConnection, $password_MyConnection) or trigger_error(mysql_error(),E_USER_ERROR); 
?>