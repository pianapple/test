<?php
session_start();
if($_SESSION["username"]=="")
{
	echo "<script>javascript:alert('对不起，请您先登陆！');location.href='index.php';</script>";
	exit;
}
include_once 'conn.php';
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{
	
	$zhanghao=$_POST["zhanghao"];$zhaopian=$_POST["zhaopian"];$xingming=$_POST["xingming"];$liuyan=$_POST["liuyan"]; $bankuai=$_POST["bankuai"];
	$sql="insert into liuyanban(zhanghao,zhaopian,xingming,liuyan,bankuai) values('$zhanghao','$zhaopian','$xingming','$liuyan','$bankuai') ";
	mysql_query($sql);
	echo "<script>javascript:alert('交流成功!');location.href='lyblist.php';</script>";
}
?>
<html>
<head>
<title>php游客留言板</title><LINK href="qtimages/style.css" type=text/css rel=stylesheet>
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
            <td valign="top"><table id="__01" width="880"   bgcolor="#FFFFFF"  border="0" cellpadding="0" cellspacing="0">
              
              <tr>
                <td valign="top"><table id="__01" width="880" height="258" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="880" height="42" background="qtimages/1_02_02_01_01.gif"><table width="97%" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="17%" align="center" class="title">在线交流</td>
                          <td width="83%"><div align="right"><a href="lyblist.php" class="title">返回已有交流</a></div></td>
                        </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td> <form name="form1" method="post" action="">
                            <table width="96%" border="1" align="left" cellpadding="3" cellspacing="1" bordercolor="#B8D8E8" style="border-collapse:collapse">
                             <tr>
                                <td>板块：</td>
                                <td><select name="bankuai">
								      <option value="爱情基因">  爱情基因</option>
									     <option value="留言灌水"> 留言灌水 </option>
								   <option value="生活琐事"> 生活琐事 </option>
								   </select>
                                  &nbsp;*</td>
                              </tr>
							 
							  <tr>
                                <td>账号：</td>
                                <td><input name='zhanghao' type='text' id='zhanghao' value='<?php echo $_SESSION["username"];?>' />
                                  &nbsp;*</td>
                              </tr>
                              <tr>
                                <td>照片：</td>
                                <td><input name='zhaopian' type='hidden' id='zhaopian' value='<?php echo $_SESSION["zp"];?>' />
                                    <img src="<?php echo $_SESSION["zp"];?>" width="131" height="102"></td>
                              </tr>
                              <tr>
                                <td>姓名：</td>
                                <td><input name='xingming' type='text' id='xingming' value='<?php echo $_SESSION["xm"];?>' />
                                  &nbsp;*</td>
                              </tr>
                              <tr>
                                <td>交流：</td>
                                <td><textarea name='liuyan' cols='50' rows='8' id='liuyan'></textarea>
                                  &nbsp;*</td>
                              </tr>
                              <tr>
                                <td>&nbsp;</td>
                                <td><input type="hidden" name="addnew" value="1" />
                                    <input type="submit" name="Submit" value="添加" onClick="return check();" />
                                    <input type="reset" name="Submit2" value="重置" /></td>
                              </tr>
                            </table>
                                                    </form>
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
