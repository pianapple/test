<?php 
session_start();
include_once 'conn.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>��Ƶ���</title><link rel="stylesheet" href="css.css" type="text/css">
</head>

<body>

<p>�ҵĶ����б�</p>
<form id="form1" name="form1" method="post" action="">
  ����:��Ƶ���:
    <input name="bh" type="text" id="bh" />
    ��Ƶ����:
    <input name="mc" type="text" id="mc" />
    ������:
    <input name="gmr" type="text" id="gmr" />
  <input type="submit" name="Submit" value="����" />
</form>
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="white" style="border-collapse:collapse">  
  <tr>
    <td width="25" bgcolor="#EBE2FE">���</td>
    <td width="151" bgcolor='#EBE2FE'>��Ƶ���</td>
    <td width="460" align="center" bgcolor="#EBE2FE">��Ƶ����</td>
    <td width="127" align="center" bgcolor="#EBE2FE">�ؼ���</td>
    <td width="120" align="center" bgcolor="#EBE2FE">��������</td>
    <td width="120" align="center" bgcolor="#EBE2FE">����ʱ��</td>
    <td width="70" align="center" bgcolor="#EBE2FE">������</td>
    <td width="70" align="center" bgcolor="#EBE2FE">����</td>
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
  $pagelarge=10;//ÿҳ������
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
	?>&tablename=gwc" onclick="return confirm('���Ҫɾ����')">ɾ��</a></td>
  </tr>
  	<?php
	}
}
?>
</table>
<p>�������ݹ�<?php
		echo $rowscount;
	?>��,���ƽ��<?php echo $ze?>Ԫ��
  <input type="button" name="Submit2" onclick="javascript:window.print();" value="��ӡ��ҳ" />
</p>
<p align="center"><a href="dd_list.php?pagecurrent=1">��ҳ</a>, <a href="dd_list.php?pagecurrent=<?php echo $pagecurrent-1;?>">ǰһҳ</a> ,<a href="dd_list.php?pagecurrent=<?php echo $pagecurrent+1;?>">��һҳ</a>, <a href="dd_list.php?pagecurrent=<?php echo $pagecount;?>">ĩҳ</a>, ��ǰ��<?php echo $pagecurrent;?>ҳ,��<?php echo $pagecount;?>ҳ </p>

<p>&nbsp; </p>

</body>
</html>

