<?php
//funcs.phpを読込む(使える関数を一つのファイルにまとめておくと便利)
require_once('funcs.php');

//1.  DB接続します
try {
  //Password:MAMP='root',XAMPP=''
  $pdo = new PDO('mysql:dbname=fly_mark;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('DBConnectError'.$e->getMessage());
}

//２．データ取得SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_bm_table");
$status = $stmt->execute();

//３．データ表示
$view="";
if ($status==false) {
    //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);

}else{
  //Selectデータの数だけ自動でループしてくれる
  //FETCH_ASSOC=http://php.net/manual/ja/pdostatement.fetch.php
  //fetchで中身とってきたら$resultに入れる処理（while文で処理を回す）
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
    //'='だと上書きされるが'.='だと追加されていく
    $view .= "<li class='item'>".
    "<div class='btn-list'>".
    "<a class='delete-btn' href='delete.php?id=". $result['id'] ."'>削除</a>".
    "<a class='detail-btn' href='detail.php?id=". $result['id'] ."'>更新</a>".
    "</div>".
    "<span class='value date'>". h(date('Y.m.d' ,strtotime($result['date']))) ."</span>".
    "<span class='value recipeName'>". h($result['recipeName']) ."</span>".
    "<span class='value recipeURL'>". h($result['recipeURL']) ."</span>".
    "<span class='value category'>". h($result['category']) ."</span>".
    "<span class='value season'>". h($result['season']) ."</span>".
    "<span class='value area'>". h($result['area']) ."</span>".
    "<span class='value comment'>". h($result['comment']) ."</span>".
    "</li>";
  }
}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
<?php include "_head.php" ?>
</head>
<body id="main">
<!-- Head[Start] -->
<div class="mountain-bg"></div>
<?php include "_header.php" ?>
<!-- Head[End] -->

<!-- Main[Start] -->
<div class="select-wrap">
  <a class="top-btn" href="index.php">データ登録</a>
  <ul class="container list"><?= $view ?></ul>
</div>
<!-- Main[End] -->

</body>
</html>
