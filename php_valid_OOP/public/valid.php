<?php
require_once ('../vendor/autoload.php');
$err = array();
$flag = 0;
$titleValidate = new \classes\TitleValidate;
$annotationValidate = new \classes\AnnotationValidate;
$contentValidate = new \classes\ContentValidate;
$emailValidate = new \classes\emailValidate;
$viewsValidate = new \classes\viewsValidator;
$dateValidate = new \classes\dateValidator;
$publishValidate = new \classes\publishValidate;
$categoryValidate = new \classes\categoryValidate;

if($_SERVER['REQUEST_METHOD']== 'POST'){
    $err['title'] =  $titleValidate->validate($_POST['title']);
    $err['annotation'] =  $annotationValidate->validate($_POST['annotation']);
    $err['content'] =  $contentValidate->validate($_POST['content']);
    $err['email'] =  $emailValidate->validate($_POST['email']);
    $err['views'] =  $viewsValidate->validate($_POST['views']);
    $err['date'] =  $dateValidate->validate($_POST['date']);
    $err['publish_in_index'] = $publishValidate->validate($_POST['publish_in_index'] ?? '');
    $err['category'] = $categoryValidate->validate($_POST['category'] ?? '');

    foreach ($err as $key=>$item) {
        if($item !== ''){
           $flag = 1;
        }
    }
    if($flag == 0) {
        Header('Location:'.$_SERVER['HTTP_REFERER'] ."?mes=success");
    }

}



