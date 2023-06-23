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
    if(isset($_POST['last_name'])){
      //変数が定義されていればその値を変数に代入
      $lastName = $_POST['last_name'];
    } else {
      //変数が定義されていなければ null（NULL）で初期化
      $lastName = null;  //または $name = NULL;
    }

    if(isset($_POST['first_name'])){
      //変数が定義されていればその値を変数に代入
      $firstName = $_POST['first_name'];
    } else {
      //変数が定義されていなければ null（NULL）で初期化
      $firstName = null;  //または $name = NULL;
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
            <p class="question">name</p>
            <div class="input-wrap">
              <input class="input" type="text" name="last_name" placeholder="Yamada" value="<?= $lastName ?>">
              <input class="input" type="text" name="first_name" placeholder="Taro" value="<?= $firstName ?>">
            </div>
          </li>
          <li class="item">
            <p class="question">color</p>
            <div class="radio-wrap">
              <label class="label"><input type="radio" name="color" value="warm" <?php if (isset($_POST['color']) && $_POST['color'] == "warm") echo 'checked'; ?> >warm color</label>
              <label class="label"><input type="radio" name="color" value="cold" <?php if (isset($_POST['color']) && $_POST['color'] == "cold") echo 'checked'; ?> >cold color</label>
            </div>
          </li>
          <li class="item">
            <p class="question">season</p>
            <div class="radio-wrap">
              <label class="label"><input type="radio" name="season" value="spring" <?php if (isset($_POST['season']) && $_POST['season'] == "spring") echo 'checked'; ?> >spring</label>
              <label class="label"><input type="radio" name="season" value="summer" <?php if (isset($_POST['season']) && $_POST['season'] == "summer") echo 'checked'; ?> >summer</label>
              <label class="label"><input type="radio" name="season" value="autumn" <?php if (isset($_POST['season']) && $_POST['season'] == "autumn") echo 'checked'; ?> >autumn</label>
              <label class="label"><input type="radio" name="season" value="winter" <?php if (isset($_POST['season']) && $_POST['season'] == "winter") echo 'checked'; ?> >winter</label>
            </div>
          </li>
          <li class="item">
            <p class="question">dog or cat</p>
            <div class="radio-wrap">
              <label class="label"><input type="radio" name="animal" value="dog" <?php if (isset($_POST['animal']) && $_POST['animal'] == "dog") echo 'checked'; ?> >dog</label>
              <label class="label"><input type="radio" name="animal" value="cat" <?php if (isset($_POST['animal']) && $_POST['animal'] == "cat") echo 'checked'; ?> >cat</label>
            </div>
          </li>
          <li class="item">
            <p class="question">feeling now</p>
            <div class="radio-wrap">
              <label class="label"><input type="radio" name="feeling" value="happy" <?php if (isset($_POST['feeling']) && $_POST['feeling'] == "happy") echo 'checked'; ?> >happy</label>
              <label class="label"><input type="radio" name="feeling" value="fine" <?php if (isset($_POST['feeling']) && $_POST['feeling'] == "fine") echo 'checked'; ?> >fine</label>
              <label class="label"><input type="radio" name="feeling" value="sleepy" <?php if (isset($_POST['feeling']) && $_POST['feeling'] == "sleepy") echo 'checked'; ?> >sleepy</label>
              <label class="label"><input type="radio" name="feeling" value="hungry" <?php if (isset($_POST['feeling']) && $_POST['feeling'] == "hungry") echo 'checked'; ?> >hungry</label>
              <label class="label"><input type="radio" name="feeling" value="bad" <?php if (isset($_POST['feeling']) && $_POST['feeling'] == "bad") echo 'checked'; ?> >bad</label>
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