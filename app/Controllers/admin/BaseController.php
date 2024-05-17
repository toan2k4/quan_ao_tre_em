<?php
namespace App\Controllers\Admin;
use eftec\bladeone\BladeOne;
class BaseController{

    protected function render($viewFile, $data = []){
        $viewDir = PATH_VIEW_ADMIN;
        $storageDir = "./storage";
        $blade = new BladeOne($viewDir,$storageDir, BladeOne::MODE_DEBUG);
        echo $blade->run($viewFile, $data);
    }

   
}

