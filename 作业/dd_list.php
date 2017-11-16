<?php 
session_start();
include_once 'conn.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>视频类别</title><link rel="stylesheet" href="css.css" type="text/css">
</head>

<body>

<p>我的订单列表：</p>
<form id="form1" name="form1" method="post" action="">
  搜索:视频编号:
    <input name="bh" type="text" id="bh" />
    视频名称:
    <input name="mc" type="text" id="mc" />
    购买人:
    <input name="gmr" type="text" id="gmr" />
  <input type="submit" name="Submit" value="查找" />
</form>
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="white" style="border-collapse:collapse">  
  <tr>
    <td width="25" bgcolor="#EBE2FE">序号</td>
    <td width="151" bgcolor='#EBE2FE'>视频编号</td>
    <td width="460" align="center" bgcolor="#EBE2FE">视频名称</td>
    <td width="127" align="center" bgcolor="#EBE2FE">关键词</td>
    <td width="120" align="center" bgcolor="#EBE2FE">购买数量</td>
    <td width="120" align="center" bgcolor="#EBE2FE">购买时间</td>
    <td width="70" align="center" bgcolor="#EBE2FE">购买人</td>
    <td width="70" align="center" bgcolor="#EBE2FE">操作</td>
  </tr>
  <?php 
    $sql="select * from gwc where 1=1";
  if ($_POST["bh"]!="")
{
  	$nreqbh=$_POST["bh"];
  	$sql=$sql." and bh like '%$nreqbh%'";
}
if ($_POST["mc"]!="")
{
  	$nreqmc=$_POST["mc"];
  	$sql=$sql." and mc like '%$nreqmc%'";
}
if ($_POST["gmr"]!="")
{
  	$nreqgmr=$_POST["gmr"];
  	$sql=$sql." and username like '%$nreqgmr%'";
}
  $sql=$sql." order by id desc";
  
$query=mysql_query($sql);
  $rowscount=mysql_num_rows($query);
  if($rowscount==0)
  {}
  else
  {
  $pagelarge=10;//每页行数；
  $pagecurrent=$_GET["pagecurrent"];
  if($rowscount%$pagelarge==0)
  {
		$pagecount=$rowscount/$pagelarge;
  }
  else
  {
   		$pagecount=intval($rowscount/$pagelarge)+1;
  }
  if($pagecurrent=="" || $pagecurrent<=0)
{
	$pagecurrent=1;
}
 
if($pagecurrent>$pagecount)
{
	$pagecurrent=$pagecount;
}
		$ddddd=$pagecurrent*$pagelarge;
	if($pagecurrent==$pagecount)
	{
		if($rowscount%$pagelarge==0)
		{
		$ddddd=$pagecurrent*$pagelarge;
		}
		else
		{
		$ddddd=$pagecurrent*$pagelarge-$pagelarge+$rowscount%$pagelarge;
		}
	}

	for($i=$pagecurrent*$pagelarge-$pagelarge;$i<$ddddd;$i++)
{
	$ze=$ze+mysql_result($query,$i,shuliang)*mysql_result($query,$i,jiage);
  ?>
  <tr>
    <td width="25"><?php
	echo $i+1;
?></td>
    <td><?php echo mysql_result($query,$i,bh);?></td>
    <td width="460" align="center"><?php echo mysql_result($query,$i,mc);?></td>
    <td width="127" align="center"><?php echo mysql_result($query,$i,jiage);?></td>
    <td width="120" align="center"><?php echo mysql_result($query,$i,shuliang);?></td>
    <td width="120" align="center"><?php
echo mysql_result($query,$i,"addtime");
?></td>
    <td width="70" align="center"><?php
echo mysql_result($query,$i,"username");
?></td>
    <td width="70" align="center"><a href="del.php?id=<?php
		echo mysql_result($query,$i,"id");
	?>&tablename=gwc" onclick="return confirm('真的要删除？')">删除</a></td>
  </tr>
  	<?php
	}
}
?>
</table>
<p>以上数据共<?php
		echo $rowscount;
	?>条,共计金额<?php echo $ze?>元；
  <input type="button" name="Submit2" onclick="javascript:window.print();" value="打印本页" />
</p>
<p align="center"><a href="dd_list.php?pagecurrent=1">首页</a>, <a href="dd_list.php?pagecurrent=<?php echo $pagecurrent-1;?>">前一页</a> ,<a href="dd_list.php?pagecurrent=<?php echo $pagecurrent+1;?>">后一页</a>, <a href="dd_list.php?pagecurrent=<?php echo $pagecount;?>">末页</a>, 当前第<?php echo $pagecurrent;?>页,共<?php echo $pagecount;?>页 </p>

<p>&nbsp; </p>

</body>
</html>

