<?php
function fileupload():bool
{
    global $message;
    //check file extension
    $allowed=['gif','png','jpg'];
    $filename=$_FILES['photo']['name']; //original filename
    $ext=pathinfo($filename,PATHINFO_EXTENSION);
    if (!in_array($ext,$allowed) || exif_imagetype($_FILES['photo']['tmp_name'])===false) {
        $message="Sorry alleen gif,png of jpg files toegestaan";
        return false;
    }

    //rename file to unique name
    $target_dir= "upload/";
    $target_file= $_FILES['photo']['name'];
    $i = 1;
    do {
        $target_file=$target_dir.$target_file."_$i.$ext";
        $i++;
    } while (file_exists($target_file));

    //move uploaded file
    if(move_uploaded_file($_FILES['photo']['tmp_name'], $target_file)) {
        $message.="Upload gelukt, bestandsnaam is ".$target_file;
        return true;
    } else {
        $message.="Sorry, upload niet gelukt";
        return false;
    }
}