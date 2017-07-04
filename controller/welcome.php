<?php
class Welcome{
    public $lib;
    public function __construct() {
        $this->lib = new siteLibrary();
        $this->lib->loadView("index");
    }
}

$w = new Welcome;