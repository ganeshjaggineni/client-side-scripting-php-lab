<?php 

setcookie("branch","CSE",time()+3600,"/","",0);
setcookie("code","05",time()+3600,"/","",0);
?>
<html>
<head>
<title>CREATE COOKIES IN PHP</title>
</head>
<body>
<? php 
echo "The cookies created for branch and code.";
?>
</body>
</html>