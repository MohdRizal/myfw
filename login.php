<?php
include 'library/siteLibrary.php';
$lib = new siteLibrary();
if($lib->session("login") == 1){
    $lib->destroy();
}

?>
<form action="" method="post">
    
</form>