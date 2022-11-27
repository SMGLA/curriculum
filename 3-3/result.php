<?php

  $my_number = $_POST['my_number'];
  $random_number = mt_rand(1, strlen($my_number));
  $number_length = strlen($my_number);
  $chosen_number = substr($my_number, $random_number, 1);
  $fortune = '';

  if ($chosen_number == 0) {
    $fortune = '凶';
  } elseif (1 <= $chosen_number && $chosen_number <= 3) {
    $fortune = '小吉';
  } elseif (4 <= $chosen_number && $chosen_number <= 6) {
    $fortune = '中吉';
  } elseif ($chosen_number == 7 || $chosen_number == 8) {
    $fortune = '吉';
  } elseif ($chosen_number == 9 ) {
    $fortune = '大吉';
  }
?>

<p><?php echo date("Y/m/d/", time()); ?>の運勢は</p>
<!-- <p>入力された数字は<?php echo $my_number; ?></p> -->
<!-- <p>入力された数字の長さは<?php echo $number_length; ?></p> -->
<!-- <p>random_numberは<?php echo $random_number; ?></p> -->
<p>選ばれた数字は<?php echo $chosen_number; ?></p>
<p><?php echo $fortune; ?></p>

