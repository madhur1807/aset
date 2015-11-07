<?php
//require('require.php');
mysql_connect("LocalHost","mmittal","{E95zd.M");
mysql_select_db("mmittal_online");


if(isset($_POST['submit']))
{
$na=$_POST['name'];
$ag=$_POST['age'];
if($na&&$ag){

mysql_query("INSERT into online VALUES('$na','$ag')");
echo '<script>';
echo 'alert("Successfully entered");';
echo '</script>';
 mysql_close();
}
else{
echo "Enter both the details";
header('location:New Text Document.html');
}
}
?>
