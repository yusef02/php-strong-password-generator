<?php

$pass_lenght = (int) $_GET["get_pass_lenght"];

$chars = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, '!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '-', '_', '+', '=', '{', '}', '[', ']', '|', ':', ';', '.', '?', '/'];

function generate_password($length = 8, $chars)
{
  $password = array();
  $rand_numb_arr = array();
  for ($i = 0; $i < $length; $i++) {
    do {
      $num_rand = rand(0, 85);
    } while (in_array($num_rand, $rand_numb_arr, true));
    $rand_numb_arr[] = $num_rand;
    $password[] = $chars[$num_rand];
  }

  return $password;
}
$password = generate_password($pass_lenght, $chars);
$password = implode('', $password);


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php strong password generator</title>
</head>


<body>


  <form method="GET">

    <label for="getPassLenght"></label>
    <input type="number" id="getPassLenght" name="get_pass_lenght" min='8' max="16" value="<?= $pass_lenght ?>">

    <button type="submit">Genera</button>
  </form>

  <p>
    <?= $password ?>
  </p>
</body>

</html>