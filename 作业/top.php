<?php
session_start();

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.STYLE1 {font-size: 12px}
-->
a:link {font-size:12px; text-decoration:none; color:#000000;}
a:visited {font-size:12px; text-decoration:none; color:#000000;}
a:hover {font-size:12px; text-decoration:none; color:#FF0000;}

a.v1:link {font-size:12px; text-decoration:none; color:#025283;}
a.v1:visited {font-size:12px; text-decoration:none; color:#025283;}
.STYLE5 {	color: #72AC27;
	font-size: 26pt;
}
.STYLE6 {font-size: 18pt}
.STYLE7 {
	color: #FFFFFF;
	font-size: 16px;
}
.STYLE8 {
	color: #000000;
	font-weight: bold;
}
</style>
</head>

<body>
 <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr> 
        <td width="227"    nowrap="nowrap"  bgcolor="#025283"><strong>&nbsp;<span class="STYLE7">��̨����</span></strong></td>
		
		 <td width="1"    nowrap="nowrap"  bgcolor="white"><strong>&nbsp;<span class="STYLE7"> </span></strong></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td height="26"  ><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td height="26"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td bgcolor="#025283" width="640" height="26"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="30"><div align="center"><img src="images/top_1.gif" width="14" height="14" /></div></td>
                        <td  nowrap="nowrap" class="STYLE1">��ǰ��¼�û���<?php
			echo $_SESSION['username'];
			?>
            Ȩ�ޣ�
              <?php
			echo $_SESSION['cx'];
			?></td>
                      </tr>
                    </table></td>
                    
                  </tr>
                </table></td>
               
              </tr>
            </table></td>
          </tr>
          <tr>
            <td height="38"  bgcolor="#025283" ><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td height="38"><div align="center" class="STYLE5 STYLE6">
                    <div align="center" class="STYLE8">php�ο����԰�</div>
                </div></td>
                <td width="60" ><div align="right"> </div></td>
              </tr>
            </table></td>
          </tr>
        </table></td>
      </tr>
    </table>
 <table width="100%" border="0"  bgcolor="#66CC99">
  <tr>
    <td >&nbsp;</td>
  </tr>
</table>

</body>
</html>
