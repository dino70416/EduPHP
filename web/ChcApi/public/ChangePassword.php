<?php

require_once '../bootstrap.php';

$t1 = new \TcApi\TcApi();

$t1->apiName = 'change-password';
$t1->setMethod('PATCH');

$arr = [
    [
        'account' => '107-70081',
        'password' => 'hfiushgohfi',
    ],
    [
        'account' => '107-70085',
        'password' => 'svpdmvlsm',
    ]
];
$res = $t1->getData($arr);

echo '<pre>';

print_r($res);