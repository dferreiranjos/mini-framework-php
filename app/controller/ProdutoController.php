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
        $params = $this->getInput();
        dd($params);
    }

    public function pesquisar()
    {
        $param = Input::get('pes');

        $this->load('produto/pesquisa', [
            'termo'=>$param
        ]);
    }

    private function getInput(){
        return(object)[
            'id'=>Input::get('id', FILTER_SANITIZE_NUMBER_INT),
            'titulo'=>Input::post('txtTitulo'),
            'imagem'=>Input::post('txtImagem'),
            'descricao'=>Input::post('txtDescricao')
        ];
    }
}