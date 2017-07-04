<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
//library load
require_once 'library/siteLibrary.php';
$lib = new siteLibrary;
$session_status = $lib->session("login");
if($session_status == "not exist"){
    echo $lib->redirect("login.php");
}else{
    
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Framework</title>
    </head>
    <body>
        
        <?php
        //echo $lib->session("login");
        switch(@$_GET['page']){
            case "profil":
                $lib->load("profil");
                break;
            default:
                $lib->load("welcome");
        }
        ?>
    </body>
</html>
<?php
}