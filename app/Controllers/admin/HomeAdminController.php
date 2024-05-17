<?php 
namespace App\Controllers\Admin;

class HomeAdminController extends BaseController{
    public function index(){
        $title = 'Trang dashboard';
        $this->render('dashboard.home',compact('title'));
    }
}