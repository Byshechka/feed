<?php
require_once '../lib/flash_messages.php';
if(!empty($_SESSION['auth_user'])){
    unset($_SESSION['auth_user']);
    session_destroy();
    return header('Location:/');
}