<?php
session_start();


if($_SESSION['username']!="")
{
}
else
{
	echo "<script language='javascript'>alert('对不起，请您先登陆！');location.href='index.php';</script>";

}
include_once 'conn.php';


 
$sql="select * from lanmuxinxi where bianhao=".$_GET["bh"];
$query=mysql_query($sql);

echo $_POST["shuliang"];
echo mysql_result($query,0,kucun);
echo mysql_result($query,0,kucun);
 if($_POST["shuliang"]> mysql_result($query,0,kucun))
 

{
	 

}


$sql="insert into gwc(username,bh,mc,shuliang,jiage) values('".$_SESSION['username']."','".$_GET["bh"]."','".$_GET["mc"]."',".$_POST["shuliang"].",".$_GET["jg"].")";
$query=mysql_query($sql);
$sql="update lanmuxinxi set xsl=xsl+".$_POST["shuliang"]." where bianhao='".$_GET["bh"]."'";

$query=mysql_query($sql);
echo "<script language='javascript'>alert('操作成功！');history.back();</script>";

?>