<?php

use lib\Controller;

class DefaultController extends Controller
{
    public function index()
    {
        return include __DIR__ . '/../../partials/layout.php';
    }

    public function auth()
    {
        $username = $this->username;
        $password = $this->password;
        return $user;
        $user = db()->users->findOne(['username' => $username]);

        switch ($this->action) {
            case 'login':
                if ($user == null)
                    return ['error' => 'User not found'];



                break;
            case 'register':
                if ($user != null)
                    return ['error' => 'Users Exists'];

                db()->users->insertOne([
                    'username' => $username,
                    'password' => md5($password),
                    'type' => 'person',
                    'peers' => [],
                ]);

                break;
        }
        return ['error' => 'Invalid Action'];
    }

}