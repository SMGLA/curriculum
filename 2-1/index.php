<?php

/*
名前とパスワードの変数を用意する。
名前が「 taro 」、パスワードが「 pass 」であった場合、「 ログイン成功です 」と出力する。
名前だけ正しかった場合、「 パスワードが間違っています。 」と出力する。
パスワードだけ正しかった場合、「 名前が間違っています。 」と出力する。
名前もパスワードも間違っていた場合は、「 入力情報が間違っています 」と出力する。
*/

$name = 'hehe';
$password = 'paass';

if ($name === 'taro' && $password === 'pass') {
    echo 'ログイン成功です';
} else if ($name === 'taro' && $password !== 'pass') {
    echo 'パスワードが間違っています。';
} else if ($name !== 'taro' && $password === 'pass') {
    echo '名前が間違っています。';
} else {
    echo '入力情報が間違っています';
}

?>