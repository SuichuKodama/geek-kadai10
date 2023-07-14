<!DOCTYPE html>
<html lang="en">
<head>
  <?php include "_head.php" ?>
  <title>Fly recipe - ブックマーク課題 -</title>
</head>
<body>
  <div class="mountain-bg"></div>
  <?php include "_header.php" ?>
  <?php
require_once('funcs.php');
  
//1. POSTデータ取得
$recipeName = $_POST['recipeName'];
$recipeURL = $_POST['recipeURL'];
$category = $_POST['category'];
$season = $_POST['season'];
$area = $_POST['area'];
$comment = $_POST['comment'];

//2. DB接続します
$pdo = db_conn();

//３．データ登録SQL作成

// 1. SQL文を用意
$stmt = $pdo->prepare("INSERT INTO gs_bm_table(
  id, recipeName, recipeURL, category, season, area, comment, date
) VALUES(
  NULL, :recipeName, :recipeURL, :category, :season, :area, :comment, sysdate() 
)");

//  2. バインド変数を用意
// Integer 数値の場合 PDO::PARAM_INT
// String文字列の場合 PDO::PARAM_STR

$stmt->bindValue(':recipeName', $recipeName, PDO::PARAM_STR);
$stmt->bindValue(':recipeURL', $recipeURL, PDO::PARAM_STR);
$stmt->bindValue(':category', $category, PDO::PARAM_STR);
$stmt->bindValue(':season', $season, PDO::PARAM_STR);
$stmt->bindValue(':area', $area, PDO::PARAM_STR);
$stmt->bindValue(':comment', $comment, PDO::PARAM_STR);

//  3. 実行
$status = $stmt->execute();

//４．データ登録処理後
if($status === false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit('ErrorMessage:'.$error[2]);
}else{
  //５．（登録が成功した場合の処理）index.phpへリダイレクト
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // POST：フォームからの投稿などのとき
} else {
  // GET：リンクのクリックによる表示のリクエストなどのとき
  header('Location: index.php');
  exit();
}

  ?>
  <div class="column-wrap">
    <div class="side-container">
      <div class="side-bar">
        <div class="title">SURVEY</div>
        <ul class="list">
          <li class="item">
            <figure class="circle"></figure>
            <div class="text">Input</div>
          </li>
          <li class="item">
            <figure class="circle"></figure>
            <div class="text">Check</div>
          </li>
          <li class="item now">
            <figure class="circle"></figure>
            <div class="text">Completed</div>
          </li>
        </ul>
      </div>
    </div>
    <div class="form-container completed">
      <div class="title">Completed</div>
      <div class="text">Thank you for your cooperation!</div>
      <div class="submit-wrap">
        <a class="top-btn" href="/gs_code/geek-kadai10">TOP</a>
      </div>
    </div>
  </div>
</body>
</html>