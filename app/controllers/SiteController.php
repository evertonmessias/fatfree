<?php
class SiteController extends Controller
{
    public function index() {
        $this->f3->set('variavelteste','Variavel para a página inicial');
        $this->f3->set('view','index.htm');
    }

    public function home() {
        $this->f3->set('variavelteste','Variavel para a página Home');
        $this->f3->set('view','home.htm');
    }

    public function contatos() {
        $this->f3->set('variavelteste','Variavel para a página Contatos');
        $this->f3->set('view','contatos.htm');
    }
    
}