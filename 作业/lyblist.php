<?php
session_start();
include_once 'conn.php';
$id=$_GET["id"];
mysql_query("update xinwentongzhi set dianjilv=dianjilv+1 where id=$id");
?>
<html>
<head>
<title>php�ο����԰�</title><LINK href="qtimages/style.css" type=text/css rel=stylesheet>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<style type="text/css">
<!--
.STYLE2 {
	color: #FFFFFF;
	font-weight: bold;
}
.STYLE3 {color: #6D2E18; font-weight: bold; }
-->
</style>
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="969"   border="0" align="center" cellpadding="0" cellspacing="0" id="__01">
	<tr>
		<td><?php include_once 'qttop.php';?></td>
	</tr>
	<tr>
		<td><table id="__01" width="1100"   border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td valign="top" width="210">
<?php include_once 'qtleft2.php';?></td>
            <td valign="top"><table bgcolor="#FFFFFF" id="__01" width="880"   border="0" cellpadding="0" cellspacing="0">
              
              <tr>
                <td valign="top"><table id="__01" width="880" height="258" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="880" height="42"  ><table width="97%" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="17%" align="center" class="title">���߽���</td>
                          <td width="83%"><div align="right"><a href="lyb.php" class="title">��Ҫ����</a></div></td>
                        </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td> <table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#B8D8E8" style="border-collapse:collapse">  
                            <?php
					$sql="select * from liuyanban where 1=1";
					$sql=$sql." order by issh desc";
  					$query=mysql_query($sql);
	 				 $rowscount=mysql_num_rows($query);
					 if($rowscount==0)
  {}
  else
  {
  $pagelarge=5;//ÿҳ������
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
					 ?>
                            <tr>
                              <td width="11" rowspan="3" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
                              <td width="85" rowspan="3" align="center" valign="middle"> <?php echo mysql_result($query,$i,"bankuai");?>
							<?php 
							
								  
							  if( mysql_result($query,$i,"issh")=="��")
{
	echo "<font color=blue> ������</font>";
}

?>  
						
							  
							   </td>
                              <td height="20" colspan="2" align="left" valign="middle">&nbsp; &nbsp; ������:<?php echo mysql_result($query,$i,"addtime");?> &nbsp;</td>
                              <td width="12" rowspan="3" valign="top" style="width: 10px"><!--DWLayoutEmptyCell-->&nbsp;</td>
                            </tr>
                            <tr>
                              <td height="78" align="left" valign="top">&nbsp;<?php echo mysql_result($query,$i,"liuyan");?></td>
                              <td align="left" valign="top"><p>�ظ���</p>
                                  <p><?php echo mysql_result($query,$i,"huifu");?></p></td>
                            </tr>
                            <tr>
                              <td colspan="2" align="left" valign="middle" style="height: 25px">&nbsp; &nbsp;�˺ţ�<?php echo mysql_result($query,$i,"zhanghao");?> &nbsp; &nbsp;������<?php echo mysql_result($query,$i,"xingming");?>&nbsp;&nbsp;</td>
                            </tr>
                            <?php
						  }
  	}
  ?>
                          </table>
                            <p align="center"><a href="lyblist.php?pagecurrent=1">��ҳ</a>, <a href="lyblist.php?pagecurrent=<?php echo $pagecurrent-1;?>">ǰһҳ</a> ,<a href="lyblist.php?pagecurrent=<?php echo $pagecurrent+1;?>">��һҳ</a>, <a href="lyblist.php?pagecurrent=<?php echo $pagecount;?>">ĩҳ</a>, ��ǰ��<?php echo $pagecurrent;?>ҳ,��<?php echo $pagecount;?>ҳ �������ݹ�
                              <?php
		echo $rowscount;
	?>
                              ��,
  <input type="button" name="Submit2" onClick="javascript:window.print();" value="��ӡ��ҳ" style=" height:19px; border:solid 1px #000000; color:#666666" />
                            </p>                            <p align="center">&nbsp;</p>                            
                            </td>
                  </tr>
                  <tr>
                    <td></td>
                  </tr>
                </table></td>
              </tr>
              
            </table></td>
          </tr>
        </table></td>
	</tr>
	<tr>
		<td><?php include_once 'qtdown.php';?></td>
	</tr>
</table>
</body>
</html>
