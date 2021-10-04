<?php

$this->get('/', function(){
    // echo 'Início';
    (new app\controller\TesteController)->index();
});

$this->get('/home', function(){
    echo 'Estou na HOME!';
});

$this->get('/about/teste', function(){
    echo 'Estou na ABOUT!';
});

$this->get('/categoria', 'TesteController@seta');






