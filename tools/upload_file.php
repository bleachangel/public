<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" " http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns=" http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>上传excel</title>
</head>
<body>
<?php
    header('Content-Type: text/plain; charset=utf-8');

    if (!isset($_FILES['picture']['error']) ||
        ($_FILES['picture']['error'][0] > 0)){
        echo "文件上传失败，请稍等......</br>";
        echo "<meta http-equiv=\"refresh\" content=\"3;url=index.php\">";
        exit();
    }
    
    //必须 定义ROOT全路径，才能上传成功
    define('ROOT',dirname(__FILE__).'/');

    if(!is_dir("./upfile")){
        mkdir("./upfile");
    }
    
    array_push($_FILES["picture"]["name"], "");
    $array=array_unique($_FILES["picture"]["name"]);
    array_pop($array);
    for($i=0; $i < count($array); $i++){
        $src=$_FILES["picture"]["tmp_name"][$i];
        if (function_exists("iconv")) {
            $dest_file=iconv("UTF-8","GB2312", $_FILES['picture']['name'][$i]);
        } else {
            $dest_file=test.xls;
        }
        $dest=ROOT."upfile/".$dest_file;
        if (is_null($dest)){
            echo "文件上传失败，</br>";
            echo "<meta http-equiv=\"refresh\" content=\"3;url=index.php\">";
            exit();
        }
        
        if (file_exists($dest)){
            unlink($dest);
        }
        if (move_uploaded_file($src, $dest)){
            $result = true;
            session_start();
            $_SESSION["uploaded_filename"]=$dest;
        } else {
            $result = false;
        }
        if($result==true){
            //$message = "文件上传成功，请稍等";
            echo "文件上传成功，请稍等......</br>";
            echo "<meta http-equiv=\"refresh\" content=\"1;url=import_excel.php\">";
        } else {
            //$message = "文件上传失败,请稍等";
            echo "文件上传失败，请稍等......</br>";
            echo "<meta http-equiv=\"refresh\" content=\"3;url=index.php\">";
        }
    }
?>
</body>
</html>
