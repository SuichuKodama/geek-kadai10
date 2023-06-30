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
    //POST取得
    $recipeName = $_POST['recipeName'];
    $recipeURL = $_POST['recipeURL'];
    $category = $_POST['category'];
    $season = $_POST['season'];
    $area = $_POST['area'];
    $comment = $_POST['comment'];

    //データを正解する
    $data = $recipeName . $recipeURL . $category . $season . $area . $comment . "\n";

    //データを保存する
    file_put_contents('survey.txt', $data, FILE_APPEND);

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