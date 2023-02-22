<?php
require_once ('../vendor/autoload.php');
$err = array();
$flag = 0;
$out = array();
$titleValidate = new \classes\TitleValidate;
$annotationValidate = new \classes\AnnotationValidate;
$contentValidate = new \classes\ContentValidate;
$emailValidate = new \classes\emailValidate;
$viewsValidate = new \classes\viewsValidator;
$dateValidate = new \classes\dateValidator;
$publishValidate = new \classes\publishValidate;
$categoryValidate = new \classes\categoryValidate;

if($_SERVER['REQUEST_METHOD']== 'POST'){
    $out['title'] =  $titleValidate->validate($_POST['title']);
    $err['title'] = $titleValidate->checkError($out['title']);

    $out['annotation'] =  $annotationValidate->validate($_POST['annotation']);
    $err['annotation'] =  $annotationValidate->checkError($out['annotation']);

    $out['content'] =  $contentValidate->validate($_POST['content']);
    $err['content'] =  $contentValidate->checkError($out['content']);

    $out['email'] =  $emailValidate->validate($_POST['email']);
    $err['email'] = $emailValidate->checkError($out['email']);

    $out['views'] =  $viewsValidate->validate($_POST['views']);
    $err['views'] = $viewsValidate->checkError($out['views']);

    $out['date'] =  $dateValidate->validate($_POST['date']);
    $err['date'] = $dateValidate->checkError($out['date']);

    $out['publish_in_index'] = $publishValidate->validate($_POST['publish_in_index'] ?? '');
    $err['publish_in_index'] = $publishValidate->checkError($out['publish_in_index']);

    $out['category'] = $categoryValidate->validate($_POST['category'] ?? '');
    $err['category'] = $categoryValidate->checkError($out['category']);

    foreach ($err as $key=>$item) {
        if($item !== ''){
           $flag = 1;
        }
    }

    if($flag == 0) {
        Header('Location:'.$_SERVER['HTTP_REFERER'] ."?mes=success");
    }
}



