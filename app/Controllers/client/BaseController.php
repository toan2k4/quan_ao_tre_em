<?php
namespace App\Controllers\Client;
use eftec\bladeone\BladeOne;
class BaseController{

    protected function render($viewFile, $data = []){
        $viewDir = PATH_VIEW;
        $storageDir = "./storage";
        $blade = new BladeOne($viewDir,$storageDir, BladeOne::MODE_DEBUG);
        echo $blade->run($viewFile, $data);
    }

   
}

