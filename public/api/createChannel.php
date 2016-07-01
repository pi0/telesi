<?php  require_once '../init.php';

$newChannel=db()->users->insertOne([
        'username'=>$_GET['username'],
        'name'=>$_GET['name'],
        'type'=>'channel',
        'admin'=>$_SESSION['_id'],
    ]
);

User::current()->update([
    '$push'=>[
        'peers'=> $newChannel->getInsertedId().''
    ]
]);