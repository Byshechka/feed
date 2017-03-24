<?php
require_once 'lib/auth_check.php';
require_once 'lib/flash_messages.php';
require_once 'lib/db_queries.php';

$post_data = [
    'title' => $_POST['title'],
    'description' =>$_POST['description']
];

if(!$result = create_record('posts', $_POST)){
    print_r(mysqli_error_list($connect));
}else{
    set_flash_message('message', "Ваш пост сохранен! {$post_data['title']}");
    return header('Location:/');
}