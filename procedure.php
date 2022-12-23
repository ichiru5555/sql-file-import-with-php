<?php
/*
手続き型で書いたほうです。
オブジェクト指向型で書いたほうはobject.phpにあります。
わざわざオブジェクト指向型で書く必要はなかったけどなんとなく書いてみた。
もしmysqliで書くことになればオブジェクト指向型で書いたほうがいいです。
*/
$db_host = "";
$user = "";
$pwd = "";
$data_base = "";
$query = file_get_contents("./sql/db.sql");
$link = mysqli_connect($db_host, $user, $pwd, $data_base);
$db_in = mysqli_multi_query($link, $query);
?>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title>インポート</title>
<?php if($db_in){ ?>
<p>インポートに成功しました。</p>
<?php }else{ ?>
<p>インポートに失敗しました。</p>
<?php } ?>
<?php mysqli_close($link); ?>
</html>
