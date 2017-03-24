<?php
function uploader($post_type, $id){
    $target_dir = "../upload/$post_type/$id";
    if(!is_dir($target_dir)){
        if(!mkdir($target_dir, 0777, true)){
            die('Не удалось создать директорий...');
        }
    }
}

   $base_name = basename($_FILES["fileToUpload"]["name"]);