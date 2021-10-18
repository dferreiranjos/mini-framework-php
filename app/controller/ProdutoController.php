<?php

namespace app\controller;

use app\core\Controller;
use app\classes\Input;

class ProdutoController extends Controller
{

    public function index()
    {
        $this->load('produto/main');
    }

    public function novo()
    {
        $this->load('produto/novo');
    }

    public function insert()
    {
        dd(Input::post('txtDescricao'));
    }

    public function pesquisar()
    {
        $param = Input::get('pes');

        $this->load('produto/pesquisa', [
            'termo'=>$param
        ]);
    }
}