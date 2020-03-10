<?php
class ExemploController extends Controller
{
    public function index() {
        $this->f3->set('teste','página inicial');
        $this->f3->set('view','layout1.htm');
    }

    public function exemplo() {
        $this->f3->set('teste','página 2');
        $this->f3->set('view','layout2.htm');
    }
    
}