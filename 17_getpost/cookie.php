<?php
    setcookie('wepicksCookieData', '「name:wepicksCookieData」のクッキーとして保存する文字列データです。');
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>クッキー</title>
</head>
<body>

<?php
if (empty($_COOKIE['wepicksCookieData'])) {
    echo 'ブラウザを更新して下さい。';
} else {
    echo '$_COOKIE[\'wepicksCookieData\']の出力:' . $_COOKIE['wepicksCookieData'] . "<br/>\n";
}
?>
</body>
</html>