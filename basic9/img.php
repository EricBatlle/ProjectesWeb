<?php

if(!empty($_FILES['myfile'])) {
    $myFile = $_FILES['myfile'];

    if($myFile["error"] !== UPLOAD_ERR_OK){
        echo "<p>An error ocurred.</p>";
        exit;
    }
    $name = "img_1.jpg";

    $sizeData = getimagesize($myFile["tmp_name"]);
    $width = $sizeData[0];
    $height = $sizeData[1];
    if($width > 200 || $height > 200){
        echo "<p>File dimensions are not permitted.</p>";
        exit;
    }

    $fileType = exif_imagetype($myFile["tmp_name"]);
    $allowed = array(IMAGETYPE_GIF, IMAGETYPE_JPEG, IMAGETYPE_PNG);
    if (!in_array($fileType, $allowed)) {
        echo "<p>File type is not permitted.</p>";
        exit;
    }

    $success = move_uploaded_file($myFile["tmp_name"], 'uploads/'.$name);
    if(!$success){
        echo "<p>Unable to save file.</p>";
        exit;
    }
    if($myFile["size"] > 1000000){
        echo"<p>Size bigger than 2MB.</p>";
        exit;
    }
    include("basic9.php");
    echo '<img src="uploads/'.$name.'"/>';
    chmod('uploads/'.$name,0644);
}
?>



