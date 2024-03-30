<?php

setcookie("user","",time()-3600,"/","",0);
echo $un."Logout Succesfully";

?>
<script>
window.alert("logout");
</script>