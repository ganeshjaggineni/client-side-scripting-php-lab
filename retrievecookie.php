<?php
if(isset($_COOKIE["branch"]) && isset($_COOKIE["code"]))
{
echo "The Branch name =".$_COOKIE["branch"]."<br/>";
echo "The Branch code = ".$_COOKIE["code"];
}
else
{
echo "Sorry !! cookies is not set.";
}
?>
