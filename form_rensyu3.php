<?php
/**
 * Created by PhpStorm.
 * User: it
 * Date: 2015/11/17
 * Time: 18:34
 */
$name = $_POST['name'];
$pass = $_POST['pass'];
$confirm = $_POST['confirm'];
// print "name = " . $name . '<br>';
// print "pass = " . $pass . '<br>';

$message = "以下の内容で登録しました<br>ユーザ名:" . $name . "<br>パスワード:" . $pass;

if(strlen($name) == 0){
    $message = "ユーザ名に何も入力されていません。";
}
if(strlen($pass) == 0){
    $message = "パスワードに何も入力されていません。";
}
if(strlen($confirm) == 0){
    $message = "パスワード確認に何も入力されていません。";
}

if(strlen($pass) < 4 || strlen($pass) > 8 ){
    $message = "パスワードは 4 文字以上 8 文字以下にしてください。";
}

if($pass != $confirm){
    $message = "パスワード欄とパスワード確認欄の値が違います。";
}

print $message;
