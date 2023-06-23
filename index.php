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
  <div class="column-wrap">
    <div class="side-container">
      <div class="side-bar">
        <div class="title">SURVEY</div>
        <ul class="list">
          <li class="item now">
            <figure class="circle"></figure>
            <div class="text">Input</div>
          </li>
          <li class="item">
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
      <form class="form" method="post" action="confirm.php">
        <ul class="list">
          <li class="item">
            <p class="question">Name</p>
            <div class="input-wrap">
              <input class="input" type="text" name="last_name" value="" placeholder="Yamada">
              <input class="input" type="text" name="first_name" value="" placeholder="Taro">
            </div>
          </li>
          <li class="item">
            <p class="question">Color</p>
            <div class="input-wrap">
              <label class="label"><input type="radio" name="color" value="warm"><span class="text">warm color</span></label>
              <label class="label"><input type="radio" name="color" value="cold"><span class="text">cold color</span></label>
            </div>
          </li>
          <li class="item">
            <p class="question">Season</p>
            <div class="radio-wrap">
              <label class="label"><input type="radio" name="season" value="spring">spring</label>
              <label class="label"><input type="radio" name="season" value="summer">summer</label>
              <label class="label"><input type="radio" name="season" value="autumn">autumn</label>
              <label class="label"><input type="radio" name="season" value="winter">winter</label>
            </div>
          </li>
          <li class="item">
            <p class="question">Dog or Cat</p>
            <div class="radio-wrap">
              <label class="label"><input type="radio" name="animal" value="dog">dog</label>
              <label class="label"><input type="radio" name="animal" value="cat">cat</label>
            </div>
          </li>
          <li class="item">
            <p class="question">Feeling now</p>
            <div class="radio-wrap">
              <label class="label"><input type="radio" name="feeling" value="happy">happy</label>
              <label class="label"><input type="radio" name="feeling" value="fine">fine</label>
              <label class="label"><input type="radio" name="feeling" value="sleepy">sleepy</label>
              <label class="label"><input type="radio" name="feeling" value="hungry">hungry</label>
              <label class="label"><input type="radio" name="feeling" value="bad">bad</label>
            </div>
          </li>
        </ul>
        <div class="submit-wrap">
          <input class="submit-btn" type="submit" name="submitConfirm" value="CONFIRM" class="submit">
        </div>
      </form>
    </div>
  </div>
</body>
</html>