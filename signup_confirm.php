<?php

// エラーのフラグ変数
$error_flg = 0;

// エラーの空の配列を作成
$errors = array();


// 必須項目のチェック

// nameを配列にいれる
$check_data = array('user', 'postcode', 'address', 'phonenum', 'email', 'password');

foreach ($check_data as $data) {
  if(empty($_POST[$data])) {
    $error[] = $data.'は必須項目です。';
  }
}

// 名前のバリデーション
// 数字のチェック

if (preg_match('/^[0-9\._-]/+$/', $_POST['name'])) {
  $error[] = 'お名前は数字以外の全角・半角文字のみ入力可能です。';
}