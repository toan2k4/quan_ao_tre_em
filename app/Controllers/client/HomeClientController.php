<?php 
namespace App\Controllers\Client;

class HomeClientController extends BaseController{
    public function index(){
        // echo "hele cá";
        $this->render('home');
    }
}