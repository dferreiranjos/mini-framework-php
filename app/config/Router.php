<?php

$this->get('/', 'PagesController@home');
$this->get('/quem-somos', 'PagesController@quemSomos');
$this->get('/contato', 'PagesController@contato');

$this->get('/produto', 'ProdutoController@index');
$this->get('/novo-produto', 'ProdutoController@novo');

$this->get('/pesquisa', 'ProdutoController@pesquisar');






