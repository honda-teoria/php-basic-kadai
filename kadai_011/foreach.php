<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎編課題_011</title>
</head>

<body>
  <p>
    <?php
    $merchandise = ['名前' => '玉ねぎ', '値段' => '200', '産地' => '北海道'];
    foreach ($merchandise as $key => $value) {
      echo "{$key}:{$value}<br>";
    }
    ?>
  </p>
</body>

</html>