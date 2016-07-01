<?php  require_once '../init.php';


User::current()->update([
    '$pull'=>[
        'peers'=>$_GET['id']
    ]
]);