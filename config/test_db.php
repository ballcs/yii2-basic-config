<?php
$db = require __DIR__ . '/db.php';
// test database! Important not to run tests on production or development databases
$db['dsn']      = 'mysql:host=10.250.1.99;dbname=yii2-testing2';
$db['username'] = 'yii2-testing';
$db['password'] = 'gmw2ymf-FKF4qhf9taz';

return $db;
