<?php require_once '../init.php';


$profile = User::find_by_id($_GET['id']);

$result = $profile->toArray();


$result['is_reported'] = in_array(User::current()->_id, $profile->report ? $profile->report->getArrayCopy() : []);

$result['is_friend'] = in_array($_GET['id'], User::current()->peers ? User::current()->peers->getArrayCopy() : []);


if ($profile->type == 'group' ||
    ($profile->type == 'channel' && $profile->admin == User::current()->_id . '')
) {

    $q = db()->users->find([
        'peers' => ['$elemMatch' => [
            '$eq' => $profile->_id . ''
        ]]
    ]);

    $result['members'] = [];

    foreach ($q as $r) {
        $result['members'][] = [
            'name' => $r->name
        ];
    }

}

echo json_encode($result);