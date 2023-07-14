<!DOCTYPE html>
<html>

<head>
<?php include "_head.php" ?>
    <title>ログイン | Fly recipe - ブックマーク課題 -</title>
</head>

<body>
    <div class="mountain-bg"></div>
    <?php include "_header.php" ?>
    <div class="column-wrap">
    <div class="side-container">
      <div class="side-bar">
        <div class="title">LOGIN</div>
        <ul class="list">
          <li class="item">
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
    <div class="form-container completed">
        <!-- <form name="form1" action="login_act.php" method="post">
            ID:<input type="text" name="lid" />
            PW:<input type="password" name="lpw" />
            <input type="submit" value="LOGIN" />
        </form> -->
        <form class="form" method="post" action="login_act.php">
        <ul class="list">
          <li class="item">
            <p class="question">ID</p>
            <div class="input-wrap">
              <input class="input" type="text" name="lid" value="" placeholder="">
            </div>
          </li>
          <li class="item">
            <p class="question">Password</p>
            <div class="input-wrap">
              <input class="input" type="text" name="lpw" value="" placeholder="">
            </div>
          </li>
        </ul>
        <div class="submit-wrap">
          <input class="submit-btn" type="submit" name="submitConfirm" value="LOGIN" class="submit">
        </div>
      </form>
    </div>
  </div>

</body>

</html>
