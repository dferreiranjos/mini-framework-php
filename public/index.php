<?php

require_once('../vendor/autoload.php');
require_once('../app/functions/functions.php');

use app\controller\TesteController;
// use app\core\RouterCore; Hi is necessary to instance the class
(new \app\core\RouterCore());

$controller = new TesteController();

