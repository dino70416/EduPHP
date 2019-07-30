<?php

require_once '../bootstrap.php';

$t1 = new \TcApi\TcApi();

$t1->apiName = 'score-section';
$t1->setMethod('POST');

$arr = [
    "year" => 107,
    "semester" => 1,
    "grade" => 8,
    "class_no" => 1,
    "test_sort" => 1
];
$res = $t1->getData($arr);

$subjectArr = [];
foreach ($res->data as $row) {
    $subjectArr[$row->subject_name][] = $row;
}

$subjectSelectArr = array_keys($subjectArr);

if (isset($_GET['subject']))
    $select_subject = $_GET['subject'];
else
    $select_subject = '';

echo $twig->render('chc/score-section.twig', [
    'subjectSelectArr' => $subjectSelectArr,
    'data' => $subjectArr,
    'select_subject' => $select_subject
]);
