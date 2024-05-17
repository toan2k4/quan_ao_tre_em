<?php
const DBNAME = 'quan_ao_tre_em';
const DBHOST = 'localhost';
const DBCHARSET = 'utf8';
const DBUSER = 'root';
const DBPASS = '';
const BASE_URL = 'http://localhost/MY_PROJECT/quan_ao_tre_em/';
const BASE_URL_ADMIN = 'http://localhost/MY_PROJECT/quan_ao_tre_em/admin';


const PATH_CONTROLLER = __DIR__ . '/../app/controllers/client/';
const PATH_MODEL = __DIR__ . '/../app/models/';
const PATH_VIEW = __DIR__ . '/../app/views/client/';

const PATH_CONTROLLER_ADMIN = __DIR__ . '/../app/controllers/admin/';
const PATH_MODEL_ADMIN = __DIR__ . '/../app/models/';
const PATH_VIEW_ADMIN = __DIR__ . '/../app/views/admin/';

function route($url) {
    return BASE_URL.$url;
}
// key co the truyen success hoac errors
function flash($key,$msg,$route)  {
    $_SESSION[$key] = $msg;
    switch ($key) {
        case 'success':
            unset($_SESSION['errors']);
            break;
        case 'errors':
            unset($_SESSION['success']);
            break;
    }
    header('location:'.BASE_URL.$route.'?msg='.$key);die;
}
