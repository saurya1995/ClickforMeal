<?php require_once('Connections/MyConnection.php'); ?>
<?php session_start();
if(!isset($_SESSION['MM_Username']))
{
    // not logged in
    header('Location: login.php');
    exit();
}?>
<?php
$email=$_SESSION['MM_Username']; 
$pqty=$_POST['pq'];
$pimg=$_POST['pi'];
$pi=$_POST['pid'];
$prodname=$_POST['pname'];
$prodprice=$_POST['prodaprice']*$pqty;
mysql_select_db($database_MyConnection, $MyConnection);
$una=mysql_query("SELECT customer_id FROM customers where customer_email='$email'", $MyConnection) or die(mysql_error());
$custid = mysql_fetch_assoc($una);
$un=mysql_query("INSERT INTO cart (email ,product_id,name,quantity, price,img) VALUES ('$email','$pi','$prodname','$pqty', '$prodprice','$pimg')", $MyConnection) or die(mysql_error());
$Result1 = mysql_query($un, $MyConnection) or die(mysql_error());

?>
