<?php

class Profil{
    public $lib;
    public function __construct(){}
    
    public function tampil(){
        $this->lib = new siteLibrary();
        $this->lib->loadView("profil");
    }
    
    public function hapus(){
        echo 'Data di hapus';
    }
}

$profil = new Profil;
if(@$_GET['action']){
    $action = \filter_var($_GET['action'], FILTER_SANITIZE_STRING);
    $profil->$action();
}else{
    $profil->tampil();
}
?>