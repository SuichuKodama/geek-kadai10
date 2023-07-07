
<?php

/**
 * [ここでやりたいこと]
 * 1. クエリパラメータの確認 = GETで取得している内容を確認する
 * 2. select.phpのPHP<?php ?>の中身をコピー、貼り付け
 * 3. SQL部分にwhereを追加
 * 4. データ取得の箇所を修正。
 */
 $id = $_GET['id'];

 try {
  //Password:MAMP='root',XAMPP=''
  $pdo = new PDO('mysql:dbname=fly_mark;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('DBConnectError'.$e->getMessage());
}

//データ登録SQL作成
$stmt = $pdo->prepare('SELECT * FROM gs_bm_table WHERE id = :id');
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute(); //実行

//データ表示
$result = '';
if ($status === false) {
    $error = $stmt->errorInfo();
    exit('SQLError:' . print_r($error, true));
} else {
    $result = $stmt->fetch();
}

// エラーが起きたときは↓使って各ブロックずつデバックすると良い
// var_dump ($result);
// exit();


?>

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
    if(isset($_POST['recipeName'])){
      //変数が定義されていればその値を変数に代入
      $recipeName = $_POST['recipeName'];
    } else {
      //変数が定義されていなければ null（NULL）で初期化
      $recipeName = null;  //または $name = NULL;
    }

    if(isset($_POST['recipeURL'])){
      //変数が定義されていればその値を変数に代入
      $recipeURL = $_POST['recipeURL'];
    } else {
      //変数が定義されていなければ null（NULL）で初期化
      $recipeURL = null;  //または $name = NULL;
    }

    if(isset($_POST['comment'])){
      //変数が定義されていればその値を変数に代入
      $comment = $_POST['comment'];
    } else {
      //変数が定義されていなければ null（NULL）で初期化
      $comment = null;  //または $name = NULL;
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
          <li class="item now">
            <figure class="circle"></figure>
            <div class="text">Update</div>
          </li>
          <li class="item">
            <figure class="circle"></figure>
            <div class="text">Completed</div>
          </li>
        </ul>
      </div>
    </div>
    <div class="form-container">
      <form class="form" method="post" action="thanks.php">
        <ul class="list">
          <li class="item">
            <p class="question">Fly Recipe Name</p>
            <div class="input-wrap">
              <input class="input" type="text" name="recipeName" value="<?= $result['recipeName'] ?>">
            </div>
          </li>
          <li class="item">
            <p class="question">Fly Recipe URL</p>
            <div class="input-wrap">
              <input class="input" type="text" name="recipeURL" value="<?= $result['recipeURL'] ?>">
            </div>
          </li>
          <li class="item">
            <p class="question">Category</p>
            <div class="input-wrap">
              <label class="label"><input type="radio" name="category" value="dry" <?php if (isset($result['category']) && $result['category'] == "dry") echo 'checked'; ?>><span class="text">ドライフライ</span></label>
              <label class="label"><input type="radio" name="category" value="wet" <?php if (isset($result['category']) && $result['category'] == "wet") echo 'checked'; ?>><span class="text">ウェットフライ</span></label>
              <label class="label"><input type="radio" name="category" value="nymph" <?php if (isset($result['category']) && $result['category'] == "nymph") echo 'checked'; ?>><span class="text">ニンフ</span></label>
              <label class="label"><input type="radio" name="category" value="stream" <?php if (isset($result['category']) && $result['category'] == "stream") echo 'checked'; ?>><span class="text">ストリーマー</span></label>
              <label class="label"><input type="radio" name="category" value="other" <?php if (isset($result['category']) && $result['category'] == "other") echo 'checked'; ?>><span class="text">その他</span></label>
            </div>
          </li>
          <li class="item">
            <p class="question">Season</p>
            <div class="radio-wrap">
              <label class="label"><input type="radio" name="season" value="spring" <?php if (isset($result['season']) && $result['season'] == "spring") echo 'checked'; ?>>春</label>
              <label class="label"><input type="radio" name="season" value="summer" <?php if (isset($result['season']) && $result['season'] == "summer") echo 'checked'; ?>>夏</label>
              <label class="label"><input type="radio" name="season" value="autumn" <?php if (isset($result['season']) && $result['season'] == "autumn") echo 'checked'; ?>>秋</label>
              <label class="label"><input type="radio" name="season" value="winter" <?php if (isset($result['season']) && $result['season'] == "winter") echo 'checked'; ?>>冬</label>
              <label class="label"><input type="radio" name="season" value="all" <?php if (isset($result['season']) && $result['season'] == "all") echo 'checked'; ?>>All</label>
            </div>
          </li>
          <li class="item">
            <p class="question">Area</p>
            <div class="radio-wrap">
              <label class="label"><input type="radio" name="area" value="mountainStream" <?php if (isset($result['area']) && $result['area'] == "mountainStream") echo 'checked'; ?>>渓流</label>
              <label class="label"><input type="radio" name="area" value="mainStream" <?php if (isset($result['area']) && $result['area'] == "mainStream") echo 'checked'; ?>>本流</label>
              <label class="label"><input type="radio" name="area" value="lake" <?php if (isset($result['area']) && $result['area'] == "lake") echo 'checked'; ?>>湖</label>
              <label class="label"><input type="radio" name="area" value="sea" <?php if (isset($result['area']) && $result['area'] == "sea") echo 'checked'; ?>>海</label>
              <label class="label"><input type="radio" name="area" value="area" <?php if (isset($result['area']) && $result['area'] == "area") echo 'checked'; ?>>管理釣り場</label>
            </div>
          </li>
          <li class="item">
            <p class="question">Comment</p>
            <div class="input-wrap">
              <textarea class="input textarea" type="textarea" name="comment"><?= $result['comment'] ?></textarea>
            </div>
          </li>
        </ul>
        <div class="submit-wrap">
          <input class="submit-btn" type="submit" name="submitConfirm" value="SUBMIT" class="submit">
        </div>
      </form>
    </div>
  </div>
</body>
</html>