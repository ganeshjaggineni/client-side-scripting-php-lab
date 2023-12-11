<html>
<body>
<?php
// local variable
$age = 100;
echo "variable age outside function :" .$age. "</br>";
function local_variable()
{
echo "variable age inside function :" .$age. "</br>";
}
local_variable();
?>
</body>
</html>