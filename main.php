<?php


// FUNCTIONS ################################################################


function generate_password($length = 8, $chars)
{
  $password = array();
  $rand_numb_arr = array();

  for ($i = 0; $i < $length; $i++) {
    # get a random number
    do {
      $num_rand = rand(0, 85);
    } while (in_array($num_rand, $rand_numb_arr, true));
    #save the number in the alrady genearated numbers
    $rand_numb_arr[] = $num_rand;

    # push a character by a random index in the pass arr
    $password[] = $chars[$num_rand];
  }

  return $password;
}






// MAIN ###############################################################

// GET elements from html
$pass_lenght = (int) $_GET["get_pass_lenght"];


$chars = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, '!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '-', '_', '+', '=', '{', '}', '[', ']', '|', ':', ';', '.', '?', '/'];


// generate the pass and implode it into a string
$password = generate_password($pass_lenght, $chars);
$password = implode('', $password);
