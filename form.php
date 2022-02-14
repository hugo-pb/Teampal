<?php
if(isset($_post['submit']))
$name = $_['name'];
$mailfrom = $_['email'];
$message = $_['message'];

$mailTo = 'teampal@gmail.com';
$headers = "from: ".$mailfrom;
$txt = "new email from".$name.".\n\n".$message;
mail($mailTo, $txt, $headers );
header("Location: index.php?mailsend")
?>