<script src="check.js"></script>
<form name="reg_check" method="post" action="index_ok.php" onsubmit="return chkreg(reg_check,'all')">
<table width="550" height="270" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
	<td height="30"><div align="right">邮政编码：</div></td>
	<td height="30" colspan="2" align="left">&nbsp;
		<input type="text" name="postalcode" size="20" onblur="chkreg(reg_check,2)">
		<div id="check_postalcode" style="color.#F1B000"></div>
	</td>
</tr>
<tr>
	<td height="30"><div align="right">E-mail:</div></td>
	<td height="30" colspan="2" align="left">&nbsp;
		<input type="text" name="email" size="20" onblur="chkreg(reg_check,4)">
		<font color="#999999">请务必正确填写您的邮箱</font>
		<div id="check_email" style="color:#F1B000"></div>
	</td>
</tr>
<tr>
	<td height="30" align="right">固定电话：</td>
	<td height="30" colspan="2" align="left">&nbsp;
	<input type="text" name="gtel" size="20" onblur="chkreg(reg_check,6)">
	<font color="#999999"><div id="check_gtel" style="color:#F1B000"></div></font></td>
</tr>
<tr>
	<td height="30"><div align="right">移动电话：</div></td>
	<td height="30" colspan="2" align="left">&nbsp;
	<input type="text" name="mtel" size="20" onblur="chkreg(reg_check,5)">
	<div id="check_mtel" style="color:#F1B000"></div>
	</td>
	<tr>
		<td width="100" height="30"><input type="image" src="images/bg_09.jpg"></td>
		<td width="340"><img src="images/bg_11.jpg" width="56" height="30" onclick="reg_check.reset()" style="cursor:hand"/></td>
	</tr>
</tr>
</table>
</form>