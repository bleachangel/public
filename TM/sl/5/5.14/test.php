<?php
#print_r($_POST);
#print_r($_FILES);
echo '$_POST[action] '.$_POST["action"]."<br>";
if ($_POST['action'] == "upload"){
    $file_path = "./uploads\\";
    echo '$file_path '.$file_path."<br>";
    $picture_name = $_FILES['u_file']['name'];
    echo '$picture_name '.$picture_name."<br>";
    $picture_name = strstr($picture_name, ".");
    echo '$picture_name '.$picture_name."<br>";
    if ($picture_name != ".jpg") {
        echo "上传图片失败";
        echo "<script>alert('上传图片格式不正确，请重新上传');window.location.href='index.html';<script>";
    } else if ($_FILES['u_file']['tmp_name']) {
        move_uploaded_file($_FILES['u_file']['tmp_name'], $file_path . $_FILES['u_file']['name']);
        echo "图片上传成功";
    } else
        echo "上传图片失败";
}
