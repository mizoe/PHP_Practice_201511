<?php
/**
 * Created by PhpStorm.
 * User: it
 * Date: 2015/11/17
 * Time: 18:34
 */
$name = $_POST['name'];
$pass = $_POST['pass'];
// print "name = " . $name . '<br>';
// print "pass = " . $pass . '<br>';

$message = "ユーザ名またはパスワードが違います";
if($name == "admin" && $pass == "1234"){
    $message = "ログインOK";
}
if(strlen($name) == 0){
    $message = "ユーザ名に何も入力されていません。";
}
if(strlen($pass) == 0){
    $message .= "パスワードに何も入力されていません。";
}

print $message;
