<?php
    header('Content-Type: text/plain; charset=utf-8');
    
        //if (!isset($_FILES['picture']['error']) ||
        //    is_array($_FILES['picture']['error'])){
       //     throw new RuntimeException('Invalid parameters.');
        //}
        
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
            $dest=ROOT."upfile/".basename($_FILES["picture"]["name"][$i]);
            if (move_uploaded_file($src, $dest)){
                $result = true;
            } else {
                $result = false;
            }
            if($result==true){
                //$message = "文件上传成功，请稍等";
                echo "文件上传成功，请稍等......";
                echo "<meta http-equiv=\"refresh\" content=\"3;url=index.php\">";
            } else {
                //$message = "文件上传失败,请稍等";
                echo "文件上传失败，请稍等......";
                echo "<meta http-equiv=\"refresh\" content=\"3;url=index.php\">";
            }
        }
?>
<!-- ?php
	define('ROOT',dirname(__FILE__).'/');

	if ($_FILES["picture"]["error"] > 0)
	{
		$message = "Return Code: ".$_FILES["picture"]["error"]."<br />";
	}
	else
    {
		echo "Upload: " . $_FILES["picture"]["name"] . "<br />";
		echo "Type: " . $_FILES["picture"]["type"] . "<br />";
		echo "Size: " . ($_FILES["picture"]["size"] / 1024) . " Kb<br />";
		echo "Temp file: " . $_FILES["picture"]["tmp_name"] . "<br />";

		if (file_exists("upfile/".$_FILES["picture"]["name"]))
		{
			echo $_FILES["file"]["name"] . " already exists. ";
		}
		else
		{
			if(is_uploaded_file($_FILES['picture']['tmp_name'])){
				$stored_path = ROOT.'/upfile/'.basename($_FILES['picture']['name']);
				
				if(move_uploaded_file($_FILES['picture']['tmp_name'],$stored_path)){
					$message = "Stored in: " . $stored_path;
				}else{
					$message = 'Stored failed:file save error';
				}
			}else{
				$message = 'Stored failed:no post ';
			}
		 }
    }
?-->