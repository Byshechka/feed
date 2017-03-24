<?php
require_once 'flash_messages.php';
function check_user_auth(){
    if(!user_exists()){
        set_flash_message('message','Вы должны авторизоваться!');
        header('Location:/login/');
        die;
    }
}

function redirect_if_user_auth(){
    if(user_exists()){
        set_flash_message('message','Вы не можете авторизоваться дважды!');
        header('Location:/');
        die;
    }
}
function user_exists(){
   return !!(key_exists('auth_user' , $_SESSION) && $_SESSION['auth_user']);
}