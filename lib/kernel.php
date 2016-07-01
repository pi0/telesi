<?php

// Composer
require_once __DIR__ . '/../vendor/autoload.php';

// TODO
require_once __DIR__ . '/Controller.php';

// Config
require_once __DIR__ . '/config.php';

// Start Session
session_start();

// Database Connection
require_once __DIR__ . '/db.php';

// ...

// Dispatcher
require_once __DIR__ . '/dispatcher.php';
