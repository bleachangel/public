<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" " http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns=" http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>7.16 数组综合运用</title>
</head>
<body>
	<!--table width="725" border="0" align="center" cellpadding="0" cellspacing="0">
    	<tr>
    		<td height="20" colspan="2" align="center" bgcolor="#FFFFFF"><img src="images/02-03 (1).jpg" width="561" height="42"></td>
    	</tr>
    	<tr>
    		<td height="20" colspan="2" align="center" bgcolor="#FFFFFF" class="STYLE1">文件路径（5个文件以内任意上传）</td>
    	</tr>	
    	<form action="index_ok.php" method="post" enctype="multipart/form-data" name="form1">
    	<tr>
    		<td width="88" heiht="30" align="right" class="STYLE1">内容1：</td>
    		<td width="369"><input name="picture[]" type="file" id="picture[]" size="30"></td>
    	</tr> 
    	<tr>
        	<td heiht="30" align="right" class="STYLE1">内容2：</td>
        	<td><input name="picture[]" type="file" id="picture[]" size="30"></td>
        </tr>
    	<tr>
    		<td heiht="30" align="right" class="STYLE1">内容[]：</td>
    		<td><input name="picture[]" type="file" id="picture3" size="30"></td>
    	</tr>
    	<tr>
    		<td heiht="30" align="right" class="STYLE1">内容[]：</td>
    		<td><input name="picture[]" type="file" id="picture4" size="30"></td>
    	</tr>
    	<tr>
    		<td heiht="30" align="right" class="STYLE1">内容[]：</td>
    		<td><input name="picture[]" type="file" id="picture5" size="30"></td>
    	</tr>
    	<tr>
    		<td heiht="50">&nbsp;</td>
    		<td><input type="image" name="imageField" src="images/02-03 (3).jpg" alt="submit"></input></td>
    	</tr>
    	</form>
	</table-->
	<?php
	set_include_path(get_include_path() . PATH_SEPARATOR . './Classes/');
	set_time_limit(180); 
	ini_set("memory_limit", "2024M");

	/** Include PHPExcel_IOFactory */
	require_once 'PHPExcel.php';
	require_once 'PHPExcel/IOFactory.php';
	echo get_include_path() . "</br>";
	$sheetname = '2016';
	
	$objReader = PHPExcel_IOFactory::createReader('Excel5');
	$objReader->setReadDataOnly(true);
	$objReader->setLoadSheetsOnly($sheetname);
	$objPHPExcel = $objReader->load("upfile/test_1.xls");
	$objWorksheet = $objPHPExcel->getActiveSheet();
	echo '<table>' . "\n";
	foreach ($objWorksheet->getRowIterator() as $row) {
		echo '<tr>' . "\n";
		$cellIterator = $row->getCellIterator();
		$cellIterator->setIterateOnlyExistingCells(false); // This loops all cells,
															// even if it is not set. 
															// By default, only cells 
															// that are set will be 
															// iterated. 
		foreach ($cellIterator as $cell) {
			echo '<td>' . $cell->getValue() . '</td>' . "\n"; 
		}
		echo '</tr>' . "\n"; 
	}
	echo '</table>' . "\n";
	?>
</body>
</html>