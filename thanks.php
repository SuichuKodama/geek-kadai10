<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Google Font START -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600&display=swap" rel="stylesheet">
  <!-- Google Font END -->
  <!-- Chrome / Firefox / Edge -->
  <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text x=%2250%%22 y=%2250%%22 style=%22dominant-baseline:central;text-anchor:middle;font-size:90px;%22>🌞</text></svg>">
  <link rel="stylesheet" href="/assets/css/reset.css">
  <link rel="stylesheet" href="/assets/css/style.css">
  <script src="/assets/js/index.js" type="module"></script>
  <title>アンケート課題</title>
</head>
<body>
  <div class="mountain-bg"></div>
  <header class="gl-header">
    <div class="logo">HEADER</div>
    <div class="list">
      <a class="item" href="">menu1</a>
      <a class="item" href="">menu2</a>
      <a class="item" href="">menu3</a>
    </div>
  </header>
  <?php
    //POST取得
    $lastName = $_POST['last_name'];
    $firstName = $_POST['first_name'];
    $color = $_POST['color'];
    $season = $_POST['season'];
    $animal = $_POST['animal'];
    $feeling = $_POST['feeling'];

    //データを正解する
    $data = $lastName . $firstName . $color . $season . $animal . $feeling . "\n";

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