<?php require_once '../init.php';

$result = [];

$q = $_GET['q'];
$regex = ".*#$q.*";

$results = db()->dialogs->find([
    'text' => ['$regex' => $regex, '$options' => 'i']
]);

$r = [];
foreach ($results as $result) {
    $r[] = @[
        'text' => $result->text,
    ];
}


echo json_encode($r);