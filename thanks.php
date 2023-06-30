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
    //POST取得
    $recipeName = $_POST['recipeName'];
    $recipeURL = $_POST['recipeURL'];
    $category = $_POST['category'];
    $season = $_POST['season'];
    $area = $_POST['area'];
    $comment = $_POST['comment'];

    //データを正解する
    $data = $recipeName . $recipeURL . $category . $season . $area . $comment . "\n";

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      // POST：フォームからの投稿などのとき
    } else {
      // GET：リンクのクリックによる表示のリクエストなどのとき
      header('Location: /');
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
    </div>
  </div>
</body>
</html>