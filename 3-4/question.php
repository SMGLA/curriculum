<?php
session_start();

//POST送信で送られてきた名前を受け取って変数を作成
$input_name = $_POST['input_name'];

//次ページでも使用する値をSESSION変数に格納しておく
$_SESSION['input_name_session'] = $input_name;

//①画像を参考に問題文の選択肢の配列を作成してください。
$option_port = ['80', '22', '20', '21'];
$option_language = ['PHP', 'Python', 'Java', 'HTML'];
$option_mysql = ['join', 'select', 'insert', 'update'];

//② ①で作成した、配列から正解の選択肢の変数を作成してください
// $option_port_answer = 80;
// $option_language_answer = 'HTML';
// $option_mysql_answer = 'select';

//次ページでも使用する変数をSESSION変数に格納しておく
$_SESSION['option_port_answer'] = 80;
$_SESSION['option_language_answer'] = 'HTML';
$_SESSION['option_mysql_answer'] = 'select';

?>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>2章チェックテスト</title>
  <link rel="stylesheet" href="style.css">
</head>


<p>お疲れ様です<!--POST通信で送られてきた名前を出力--><?php echo $input_name; ?>さん</p>

<br>

<!--フォームの作成 通信はPOST通信で-->
<form action="answer.php" method="post">

<h2>①ネットワークのポート番号は何番？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
  <p>
    <?php foreach ($option_port as $port) { ?>
      <?php echo "<input type=\"radio\" name=\"port\" value=\"{$port}\" />$port"; ?>
    <?php } ?>
  </p>
  <br>

<h2>②Webページを作成するための言語は？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
  
  <p>
    <?php foreach ($option_language as $language) { ?>
      <?php echo "<input type=\"radio\" name=\"language\" value=\"{$language}\" />$language"; ?>
    <?php } ?>
  </p>
  <br>

<h2>③MySQLで情報を取得するためのコマンドは？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->

  <p>
    <?php foreach ($option_mysql as $mysql) { ?>
      <?php echo "<input type=\"radio\" name=\"mysql\" value=\"{$mysql}\" />$mysql"; ?>
    <?php } ?>
  </p>
  <br>


  <input type="submit" value="回答する">
</form>

<!--問題の正解の変数と名前の変数を[answer.php]に送る-->