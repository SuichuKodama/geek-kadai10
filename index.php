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
  <div class="column-wrap">
    <div class="side-container">
      <div class="side-bar">
        <div class="title">FLYMARK</div>
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
            <p class="question">Fly Recipe Name</p>
            <div class="input-wrap">
              <input class="input" type="text" name="recipeName" value="" placeholder="エルクヘア・カディス">
            </div>
          </li>
          <li class="item">
            <p class="question">Fly Recipe URL</p>
            <div class="input-wrap">
              <input class="input" type="text" name="recipeURL" value="" placeholder="https://...">
            </div>
          </li>
          <li class="item">
            <p class="question">Category</p>
            <div class="input-wrap">
              <label class="label"><input type="radio" name="category" value="dry"><span class="text">ドライフライ</span></label>
              <label class="label"><input type="radio" name="category" value="wet"><span class="text">ウェットフライ</span></label>
              <label class="label"><input type="radio" name="category" value="nymph"><span class="text">ニンフ</span></label>
              <label class="label"><input type="radio" name="category" value="stream"><span class="text">ストリーマー</span></label>
              <label class="label"><input type="radio" name="category" value="other"><span class="text">その他</span></label>
            </div>
          </li>
          <li class="item">
            <p class="question">Season</p>
            <div class="radio-wrap">
              <label class="label"><input type="radio" name="season" value="spring">春</label>
              <label class="label"><input type="radio" name="season" value="summer">夏</label>
              <label class="label"><input type="radio" name="season" value="autumn">秋</label>
              <label class="label"><input type="radio" name="season" value="winter">冬</label>
              <label class="label"><input type="radio" name="season" value="all">All</label>
            </div>
          </li>
          <li class="item">
            <p class="question">Area</p>
            <div class="radio-wrap">
              <label class="label"><input type="radio" name="area" value="mountain-stream">渓流</label>
              <label class="label"><input type="radio" name="area" value="main-stream">本流</label>
              <label class="label"><input type="radio" name="area" value="lake">湖</label>
              <label class="label"><input type="radio" name="area" value="sea">海</label>
              <label class="label"><input type="radio" name="area" value="area">管理釣り場</label>
            </div>
          </li>
          <li class="item">
            <p class="question">Comment</p>
            <div class="input-wrap">
              <textarea class="input textarea" type="textarea" name="comment" value="" placeholder="3月下旬〜5月上旬にかけて鮮やかなオレンジ色の婚姻色が出たマルタウグイが多摩川中流域に遡上する、その遡上したマルタウグイを狙って使いたいフライ。"></textarea>
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