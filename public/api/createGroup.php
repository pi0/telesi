<?php  require_once '../init.php';

$newGroup=db()->users->insertOne([
        'username'=>$_GET['username'],
        'name'=>$_GET['name'],
        'type'=>'group'
    ]
);


User::current()->update([
    '$push'=>[
        'peers'=> $newGroup->getInsertedId().''
    ]
]);