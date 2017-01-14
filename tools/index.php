<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" " http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns=" http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>上传excel</title>
</head>
<body>
<table width="725" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
    	<td height="20" colspan="2" align="center" bgcolor="#FFFFFF"><img src="images/upload_menu.jpg" width="561" height="42"></td>
    </tr>
	<tr>
		<td height="20" colspan="2" align="center" bgcolor="#FFFFFF" class="STYLE1">请选择上传的文件路径</td>
	</tr>	
	<form action="upload_file.php" method="post" enctype="multipart/form-data" name="form1">
	<tr>
		<td width="88" heiht="30" align="right" class="STYLE1">文件路径：</td>
		<td width="369"><input name="picture[]" type="file" id="picture[]" size="30"></td>
	</tr> 
	<tr>
		<td heiht="50">&nbsp;</td>
		<td><input type="image" name="imageField" src="images/upload_button.jpg" alt="submit"></input></td>
	</tr>
	</form>
	
	<!-- form action="import_excel.php" method="post">
	<tr>
		<td height="20" colspan="2" align="center" bgcolor="#FFFFFF" class="STYLE1">解析excel文件</td>
	</tr> 
	<tr>
		<td heiht="50">&nbsp;</td>
		<td><input type="submit" value="确定"></input></td>
	</tr>
	</form-->
</table>
</body>
</html>