<?php
/*
オブジェクト指向型で書いたほうです。
手続き型を使用したいの場合はprocedure.phpを使用してください。
これからオブジェクト指向型で書くと思う。
*/
$db_host = "";
$user = "";
$pwd = "";
$data_base = "";
$query = file_get_contents("./sql/db.sql");
$mysqli = new mysqli($db_host, $user, $pwd, $data_base);
$db_in = $mysqli -> multi_query($query);
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
<?php $mysqli->close(); ?>
</html>