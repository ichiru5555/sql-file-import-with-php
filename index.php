<?php
$db_host = "";
$user = "";
$pwd = "";
$data_base = "";
$query = file_get_contents("./sql/db.sql");
$link = mysqli_connect($db_host, $user, $pwd, $data_base);
$db_sl = mysqli_real_query($link, $query);
?>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title>インポート</title>
<?php if($db_sl){ ?>
<p>インポートに成功しました。</p>
<?php }else{ ?>
<p>インポートに失敗しました。</p>
<?php } ?>
<?php
mysqli_close($link);
exit;
?>
</html>
