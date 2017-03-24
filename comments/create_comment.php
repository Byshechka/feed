<?php
require_once '../lib/auth_check.php';
require_once '../lib/flash_messages.php';
require_once '../lib/db_queries.php';

$comment_data = [
    'post_id' => $_POST['post_id'],
    'content' =>$_POST['content']
];

if(!$result = create_record('comments', $comment_data)){
    print_r(mysqli_error_list($connect));
}else{
    set_flash_message('message', "Ваш комментарий сохранен! {$comment_data['post_id']}");
    return header('Location:/');
}