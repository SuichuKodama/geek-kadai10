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
      <form method="post" action="">
        <ul class="">
          <li class="">
            <p class="">なまえ</p>
            <div class="">
              <div class="">
                <input type="text" name="last_name" value="" placeholder="Yamada">
              </div>
              <div class="">
                <input type="text" name="first_name" value="" placeholder="Taro">
              </div>
            </div>
          </li>
          <li class="">
            <p class="">好きな色</p>
            <div class="">
              <label><input type="radio" name="color" value="male">暖色</label>
              <label><input type="radio" name="color" value="female">寒色</label>
            </div>
          </li>
          <li class="">
            <p class="">好きな季節</p>
            <div class="">
              <label><input type="radio" name="season" value="spring">春</label>
              <label><input type="radio" name="season" value="summer">夏</label>
              <label><input type="radio" name="season" value="autumn">秋</label>
              <label><input type="radio" name="season" value="winter">冬</label>
            </div>
          </li>

        </ul>
        <div class="">
          <a class=""><p class=""><span class="mo_crop__text__inner">確認</span></p>
            <input type="submit" name="submitConfirm" value="" class="submit">
          </a>
        </div>
      </form>
    </div>
  </div>
</body>
</html>