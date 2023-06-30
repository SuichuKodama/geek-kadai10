<!DOCTYPE html>
<html lang="en">
<head>
  <?php include "_head.php" ?>
  <script src="/assets/js/index.js" type="module"></script>
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
            <div class="text">Check</div>
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
              <input class="input" type="text" name="recipeName" readonly value="<?= $recipeName ?>">
            </div>
          </li>
          <li class="item">
            <p class="question">Fly Recipe URL</p>
            <div class="input-wrap">
              <input class="input" type="text" name="recipeURL" readonly value="<?= $recipeURL ?>">
            </div>
          </li>
          <li class="item">
            <p class="question">Category</p>
            <div class="input-wrap">
              <label class="label"><input type="radio" name="category" value="dry" readonly <?php if (isset($_POST['category']) && $_POST['category'] == "dry") echo 'checked'; ?>><span class="text">ドライフライ</span></label>
              <label class="label"><input type="radio" name="category" value="wet" readonly <?php if (isset($_POST['category']) && $_POST['category'] == "wet") echo 'checked'; ?>><span class="text">ウェットフライ</span></label>
              <label class="label"><input type="radio" name="category" value="nymph" readonly <?php if (isset($_POST['category']) && $_POST['category'] == "nymph") echo 'checked'; ?>><span class="text">ニンフ</span></label>
              <label class="label"><input type="radio" name="category" value="stream" readonly <?php if (isset($_POST['category']) && $_POST['category'] == "stream") echo 'checked'; ?>><span class="text">ストリーマー</span></label>
              <label class="label"><input type="radio" name="category" value="other" readonly <?php if (isset($_POST['category']) && $_POST['category'] == "other") echo 'checked'; ?>><span class="text">その他</span></label>
            </div>
          </li>
          <li class="item">
            <p class="question">Season</p>
            <div class="radio-wrap">
              <label class="label"><input type="radio" name="season" value="spring" readonly <?php if (isset($_POST['season']) && $_POST['season'] == "spring") echo 'checked'; ?>>春</label>
              <label class="label"><input type="radio" name="season" value="summer" readonly <?php if (isset($_POST['season']) && $_POST['season'] == "summer") echo 'checked'; ?>>夏</label>
              <label class="label"><input type="radio" name="season" value="autumn" readonly <?php if (isset($_POST['season']) && $_POST['season'] == "autumn") echo 'checked'; ?>>秋</label>
              <label class="label"><input type="radio" name="season" value="winter" readonly <?php if (isset($_POST['season']) && $_POST['season'] == "winter") echo 'checked'; ?>>冬</label>
              <label class="label"><input type="radio" name="season" value="all" readonly <?php if (isset($_POST['season']) && $_POST['season'] == "all") echo 'checked'; ?>>All</label>
            </div>
          </li>
          <li class="item">
            <p class="question">Area</p>
            <div class="radio-wrap">
              <label class="label"><input type="radio" name="area" value="mountainStream" readonly <?php if (isset($_POST['area']) && $_POST['area'] == "mountainStream") echo 'checked'; ?>>渓流</label>
              <label class="label"><input type="radio" name="area" value="mainStream" readonly <?php if (isset($_POST['area']) && $_POST['area'] == "mainStream") echo 'checked'; ?>>本流</label>
              <label class="label"><input type="radio" name="area" value="lake" readonly <?php if (isset($_POST['area']) && $_POST['area'] == "lake") echo 'checked'; ?>>湖</label>
              <label class="label"><input type="radio" name="area" value="sea" readonly <?php if (isset($_POST['area']) && $_POST['area'] == "sea") echo 'checked'; ?>>海</label>
              <label class="label"><input type="radio" name="area" value="area" readonly <?php if (isset($_POST['area']) && $_POST['area'] == "area") echo 'checked'; ?>>管理釣り場</label>
            </div>
          </li>
          <li class="item">
            <p class="question">Comment</p>
            <div class="input-wrap">
              <textarea class="input textarea" type="textarea" name="comment" readonly><?= $comment ?></textarea>
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