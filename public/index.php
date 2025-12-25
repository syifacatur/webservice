<?php
require __DIR__ . '/../vendor/autoload.php';

use Tqdev\PhpCrudApi\Api;
use Tqdev\PhpCrudApi\Config\Config;
use Tqdev\PhpCrudApi\RequestFactory;
use Tqdev\PhpCrudApi\ResponseUtils;

$config = new Config([
    'driver' => 'mysql',
    'address' => 'localhost',
    'username' => 'root',
    'password' => '',
    'database' => 'northwind',

    // ✅ PENTING
    'basePath' => '/php-crud-api-main/public',
]);

$api = new Api($config);
$request = RequestFactory::fromGlobals();
$response = $api->handle($request);
ResponseUtils::output($response);
