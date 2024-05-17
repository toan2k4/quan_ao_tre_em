<?php
namespace App\Controllers\Client;
use App\Models\Account;

class AuthClientController extends BaseController
{
    protected $account;
    public function __construct(){
        $this->account = new Account();
    }


    function authenShowFormLogin()
    {
        // $views = 'login-register';
        // if ($_POST) {
        //     $this->authenLogin();
        // }

        $this->render('account.loginRegister');
    }

    function authenLogin()
    {
        $user = $this->account->getUserClientByEmailAndPassword($_POST['email'], $_POST['password']);
        if (empty($user)) {
            $_SESSION['error'] = 'Email hoặc password chưa đúng!';

            header('Location: ' . BASE_URL . 'login');
            exit();
        }

        $_SESSION['user'] = $user;
        // debug( $_SESSION['user']);
        if ($_SESSION['user']->name == "Admin") {
            header('Location: ' . BASE_URL_ADMIN);
            exit();
        } else if ($_SESSION['user']->name == "User") {
            header('Location: ' . BASE_URL);
            exit();
        }


    }

    function authenLogout()
    {
        if (!empty($_SESSION['user'])) {
            session_destroy();
        }

        header('Location: ' . BASE_URL);
        exit();
    }
}