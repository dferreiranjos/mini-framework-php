<?php

$this->get('/', function(){
    echo 'Início';
});

$this->get('/home', function(){
    echo 'Estou na HOME!';
});


$this->get('/about/teste', function(){
    echo 'Estou na ABOUT!';
});

$this->get('/categoria', function(){
    echo 'categoria';
});






