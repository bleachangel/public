<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" " http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns=" http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>导入excel</title>
</head>
<body>
<?php
    set_include_path(get_include_path() . PATH_SEPARATOR . './Classes/');
    set_time_limit(180);
    ini_set("memory_limit", "1024M");
    session_start();
    echo $_SESSION["uploaded_filename"]."</br>";
    $uploaded_filename=$_SESSION["uploaded_filename"];
    if (empty($uploaded_filename)){
        echo "Can't find excel files,please retry!</br>";
        echo "<meta http-equiv=\"refresh\" content=\"3;url=index.php\">";
        exit();
    }
    
    /** Include PHPExcel_IOFactory */
    require_once 'PHPExcel/Classes/PHPExcel.php';
    require_once 'PHPExcel/Classes/PHPExcel/IOFactory.php';
    
    $sheetname = 'Sheet1';   
    
    /*
    $objReader = PHPExcel_IOFactory::createReader('Excel5');
    if (is_null($objReader)){
        echo "Can't create excel reader,please retry!</br>";
        echo "<meta http-equiv=\"refresh\" content=\"3;url=index.php\">";
        exit();
    }
    $objReader->setReadDataOnly(true);
    $objReader->setLoadSheetsOnly($sheetname);
    
    echo "文件加载中，请稍等......</br>";
    $objPHPExcel = $objReader->load($uploaded_filename);
    if (is_null($objPHPExcel)){
        echo "Can't load excel files,please retry!</br>";
        echo "<meta http-equiv=\"refresh\" content=\"3;url=index.php\">";
        exit();
    }
    
    $objWorksheet = $objPHPExcel->getActiveSheet();
    if (is_null($objWorksheet)){
        echo "Can't load sheet name".$sheetname.",please retry!</br>";
        echo "<meta http-equiv=\"refresh\" content=\"3;url=index.php\">";
        exit();
    }
    
    echo '<table>' . "\n";
    foreach ($objWorksheet->getRowIterator() as $row) {
        echo '<tr>' . "\n";
        $cellIterator = $row->getCellIterator();
        $cellIterator->setIterateOnlyExistingCells(false);
        foreach ($cellIterator as $cell) {
            echo '<td>' . $cell->getValue() . '</td>' . "\n";
        }
        echo '</tr>' . "\n";
    }
    echo '</table>' . "\n";
    */

    class MyReadFilter implements PHPExcel_Reader_IReadFilter
    {
        private $_startRow = 0;     // 开始行
        private $_endRow = 0;       // 结束行
        private $_columns = array();    // 列跨度
        public function __construct($startRow, $endRow, $columns) {
            $this->_startRow = $startRow;
            $this->_endRow       = $endRow;
            $this->_columns      = $columns;
        }
        public function readCell($column, $row, $worksheetName = '') {
            if ($row >= $this->_startRow && $row <= $this->_endRow) {
                if (in_array($column,$this->_columns)) {
                    return true;
                }
            }
            return false;
        }
    }  
    $inputFileType = PHPExcel_IOFactory::identify($uploaded_filename);
    $filterSubset = new MyReadFilter(1,1,range('A','M'));
    $objReader = PHPExcel_IOFactory::createReader($inputFileType);
    $objReader->setReadFilter($filterSubset);        // 设置实例化的过滤器对象
    $objReader->setLoadSheetsOnly($sheetname);
    $objPHPExcel = $objReader->load($uploaded_filename);
    
    echo '<hr />';
    
    $sheetData = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
    var_dump($sheetData);
    
    echo "文件加载完成！";
?>
</body>
</html>