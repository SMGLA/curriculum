<?php

//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成

$input_name = $_POST['input_name'];

$option_port_answer = $_POST['option_port_answer'];
$option_language_answer = $_POST['option_language_answer'];
$option_mysql_answer = $_POST['option_mysql_answer'];

$input_port = $_POST['port'];
$input_language = $_POST['language'];
$input_mysql = $_POST['mysql'];


//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する


function check_answer($input, $answer) {
    if ($input == $answer){
      print '正解！';
    } else {
      print '残念・・・';
    }
}

?>


<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>2章チェックテスト</title>
  <link rel="stylesheet" href="style.css">
</head>


<p><!--POST通信で送られてきた名前を表示--><?php echo $input_name; ?>さんの結果は・・・？</p>
<br />
<br />


<p>①の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php echo check_answer($input_port, $option_port_answer); ?>
<br />
<br />


<p>②の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php echo check_answer($input_language, $option_language_answer); ?>
<br />
<br />


<p>③の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php echo check_answer($input_mysql, $option_mysql_answer); ?>
<br />
<br />