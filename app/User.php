<?php
use MongoDB\BSON\ObjectID;


/**
 * @property  type
 * @property  peers
 */
class User
{

    var $data;

    public static function find_by_id($id)
    {
        return new User(db()->users->findOne(['_id' => new ObjectID($id)]));
    }

    public static function find_by($key, $val)
    {
        return new User(db()->users->findOne([$key => $val]));
    }

    public static function current()
    {
        global $current;
        return $current;
    }

    public function __construct($data)
    {
        $this->data = $data;
    }


    public function __get($key)
    {
        return @$this->data->$key;
    }

    public function __set($key, $val)
    {
        $this->data = db()->users->findOneAndUpdate(['_id' => $this->_id], [$key => $val]);
    }

    public function isBlocked()
    {
        return $this->report && count($this->report) > 1;
    }

    public function avatar()
    {
        if($this->avatar!=null)
            return $this->avatar;
        return 'img/IMG_9463.jpg';
    }

    public function peers()
    {
        $result = [];
        foreach ($this->peers as $peer)
            $result[] = User::find_by_id($peer);
        return $result;
    }


    public function get_messages($peer_id, $options = [])
    {
        $peer = User::find_by_id($peer_id);

        $options['sort'] = ['_id' => -1];

        $result = [];

        if ($peer->type != 'person') {

            $result = db()->dialogs->find(['to' => $peer_id], $options);

        } else {

            $result = db()->dialogs->find([
                '$or' => [
                    ['from' => $this->_id . '', 'to' => $peer_id],
                    ['to' => $this->_id . '', 'from' => $peer_id],
                ]
            ], $options);

        }

        $r = $result->toArray();
        return array_reverse($r);
    }

    public function update($data, $options = [])
    {
        $this->data = db()->users->findOneAndUpdate(['_id' => $this->_id], $data, $options);
    }

    public function toArray()
    {

        if ($this->report != null)
            $report = $this->report->getArrayCopy();
        else
            $report = [];

        return @[
            '_id' => $this->_id . '',
            'username' => $this->username,
            'avatar' => $this->avatar(),
            'name' => $this->name,
            'birthday' => $this->birthday,
            'email' => $this->email,
            'biography' => $this->biography,
            'phone' => $this->phone,
            'type' => $this->type,
            'report' => $report,
            'admin' => $this->admin,
            'peers' => $this->peers ? $this->peers->getArrayCopy() : [],
        ];
    }

}