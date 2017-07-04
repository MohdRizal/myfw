<?php
class siteLibrary{
    public function load($file){
        include "controller/$file".".php";
    }
    public function loadView($file){
        include "view/$file".".php";
    }
    public function createSession($name,$value){
        session_start();
        return $_SESSION["$name"] = $value;
    }
    public function session($name){
        if(isset($_SESSION["$name"])){
            return "exist";
        }else{
            return "not exist";
        }
    }
    public function destroy(){
        return session_destroy();
    }
    public function redirect($link){
        return "<script>document.location='$link'</script>";
    }
    public function baseUrl(){
        return "localhost/myfw";
    }
}
