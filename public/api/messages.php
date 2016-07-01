<?php require_once '../init.php';


$p_id = $_GET['id'];

$count = @intval($_GET['count']);

$results = User::current()->get_messages($p_id,[
    'limit'=>$count,
]);

$r = [];


foreach ($results as $result) {


    $r[] = [
        '_id' => $result->_id . '',
        'from' => $result->from,
        'text' => $result->text,
        'date' => $result->date->toDateTime()
            ->setTimezone(new DateTimeZone('asia/tehran'))->format('H:i:s (Y/m/d)'),
        'timestamp'=>$result->date->toDateTime()->getTimestamp(),
        'is_me' => ($result->from == $_SESSION['_id'])
    ];
}

echo json_encode($r);



// Seen mentions
User::current()->update([
    '$pull'=>[
        'mentions'=>$p_id,
    ]
]);
