<?php 
include_once 'conn.php';
$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{
	
	$zhanghao=$_POST["zhanghao"];$mima=$_POST["mima"];$xingming=$_POST["xingming"];$xingbie=$_POST["xingbie"];$diqu=$_POST["diqu"];$Email=$_POST["Email"];$zhaopian=$_POST["zhaopian"];
	$sql="insert into yonghuzhuce(zhanghao,mima,xingming,xingbie,diqu,Email,zhaopian) values('$zhanghao','$mima','$xingming','$xingbie','$diqu','$Email','$zhaopian') ";
	mysql_query($sql);
	
	echo "<script>javascript:alert('ע��ɹ�!�������Ա��˺󷽿�������½��');location.href='index.php';</script>";
}
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
<script language="javascript">
	function check()
{
	if(document.form1.zhanghao.value==""){alert("�������˺�");document.form1.zhanghao.focus();return false;}if(document.form1.mima.value==""){alert("����������");document.form1.mima.focus();return false;}if(document.form1.xingming.value==""){alert("����������");document.form1.xingming.focus();return false;}if(document.form1.Email.value==""){alert("������Email");document.form1.Email.focus();return false;}if(document.form1.zhaopian.value==""){alert("��������Ƭ");document.form1.zhaopian.focus();return false;}
}
	
</script>
<script language="javascript">
	
	
	function OpenScript(url,width,height)
{
  var win = window.open(url,"SelectToSort",'width=' + width + ',height=' + height + ',resizable=1,scrollbars=yes,menubar=no,status=yes' );
}
	function OpenDialog(sURL, iWidth, iHeight)
{
   var oDialog = window.open(sURL, "_EditorDialog", "width=" + iWidth.toString() + ",height=" + iHeight.toString() + ",resizable=no,left=0,top=0,scrollbars=no,status=no,titlebar=no,toolbar=no,menubar=no,location=no");
   oDialog.focus();
}
</script>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="969"   border="0" align="center" cellpadding="0" cellspacing="0" id="__01">
	<tr>
		<td><?php include_once 'qttop.php';?></td>
	</tr>
	<tr>
		<td><table id="__01" width="969"  border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td valign="top">
<?php include_once 'qtleft.php';?></td>
            <td valign="top"><table id="__01" width="725"   border="0" cellpadding="0" cellspacing="0">
              
              <tr>
                <td valign="top"><table id="__01" width="860" bgcolor="#FFFFFF" height="258" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="725" height="42"  ><table width="97%" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="17%" align="center" class="title">�û�ע��</td>
                          <td width="83%">&nbsp;</td>
                        </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td><table id="__01" width="725" height="208" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="10" >&nbsp;</td>
                          <td width="703" height="208" valign="top"><form name="form1" method="post" action="">
                            <table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#B8D8E8" style="border-collapse:collapse">
                              <tr>
                                <td>�˺ţ�</td>
                                <td><input name='zhanghao' type='text' id='zhanghao' value='' />
                                  &nbsp;*</td>
                              </tr>
                              <tr>
                                <td>���룺</td>
                                <td><input name='mima' type='text' id='mima' value='' />
                                  &nbsp;*</td>
                              </tr>
                              <tr>
                                <td>������</td>
                                <td><input name='xingming' type='text' id='xingming' value='' />
                                  &nbsp;*</td>
                              </tr>
                              <tr>
                                <td>�Ա�</td>
                                <td><select name='xingbie' id='xingbie'>
                                    <option value="��">��</option>
                                    <option value="Ů">Ů</option>
                                </select></td>
                              </tr>
                              <tr>
                                <td>������</td>
                                <td><select name='diqu' id='diqu'>
                                    <option value="�㽭">�㽭</option>
                                    <option value="����">����</option>
                                    <option value="����">����</option>
                                    <option value="����">����</option>
                                </select></td>
                              </tr>
                              <tr>
                                <td>Email��</td>
                                <td><input name='Email' type='text' id='Email' value='' />
                                  &nbsp;*</td>
                              </tr>
                              <tr>
                                <td>��Ƭ��</td>
                                <td><input name='zhaopian' type='text' id='zhaopian' value='' size='50'  />
                                  &nbsp;* <a href="javaScript:OpenScript('upfile.php?Result=zhaopian',460,180)"><img src="Images/Upload.gif" width="30" height="16" border="0" align="absmiddle" /></a></td>
                              </tr>
                              <tr>
                                <td>&nbsp;</td>
                                <td><input type="hidden" name="addnew" value="1" />
                                    <input type="submit" name="Submit" value="ע��" onClick="return check();" />
                                    <input type="reset" name="Submit2" value="����" /></td>
                              </tr>
                            </table>
                                                    </form>
                          <p align="center">&nbsp;</p>                            
                            </td>
                          <td width="12"  >&nbsp;</td>
                        </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td>&nbsp; </td>
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
