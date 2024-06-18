<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gugudan (Hightech Cloud Class Completion Test)</title>
</head>

<body>
  <h1>구구단 출력하기(<?php echo gethostname()?>)</h1>

  <form method="POST" action="index.php">
    몇 단을 보고 싶나요? <input type="text" name="input" />
    <input type="submit" name="answer">
  </form>
  <br>
  <?php
  if (isset($_POST['input'])) {
    $num = (int)($_POST['input']);
    echo $num . "단입니다.<br>";
    for ($j = 1; $j <= 9; $j++) {
      echo $num . " X " . $j . " = " . ($num * $j) . "<br>";
    }
    echo "<br>";
  }
  ?>
</body>

</html>