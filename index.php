<?php

require_once __DIR__ . '/main.php';

if ($password) header('Location: ./result.php');

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php strong password generator</title>
</head>


<body>


  <form action="./result.php" method="GET">

    <label for="getPassLenght"></label>
    <input type="number" id="getPassLenght" name="get_pass_lenght" min='8' max="16" value="<?php $pass_lenght ? $pass_lenght : '' ?>">

    <button type="submit">Genera</button>
  </form>

  <p>
    <?= $password ?>
  </p>
</body>

</html>