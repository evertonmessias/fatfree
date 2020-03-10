<?php
class Controller
{
    protected $f3;

    public function __construct() {
        $f3=Base::instance();
        $this->f3=$f3;
    }

    public function afterroute() {
        echo Template::instance()->render('layout.htm');
    }
    
}