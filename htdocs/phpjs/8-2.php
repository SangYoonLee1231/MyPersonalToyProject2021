<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $password = $_GET["password"];
      if($password == "1111"){
        echo "안녕하세요. 주인님";
      } else {
        echo "뉘신지?";
      }
     ?>
  </body>
</html>
