<?php
session_start();
require_once('funcs.php');
loginCheck();

if($_SESSION['kanri_flg'] !== 1 ) {
  header('Location: select.php');
  exit();
}

//1. POSTデータ取得
$id = $_GET['id'];

//2. DB接続します
$pdo = db_conn();

//データ登録SQL作成
// UPDATE テーブル名 SET カラム1 = 1に保存したいもの、カラム2 = 2に保存したいもの、、、WHERE 条件 id = 送られてきたid

// WHEREつけないと全部消える
$stmt = $pdo->prepare('DELETE FROM gs_bm_table WHERE id = :id;');
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

//データ表示
if ($status === false) {
  sql_error($stmt);
} else {
  redirect('select.php');
}