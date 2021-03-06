<?php


namespace app;


use app\controller\ProductController;
use app\controller\ProductHistoryController;
use app\controller\UsersController;

class Bakery
{
    public function __construct()
    {
        $method = $_SERVER['REQUEST_METHOD'];

        if ($method == 'GET' && (!isset($_GET['view']) || !isset($_GET['action']))) {
            (new UsersController())->login();
            die();
        }


        $view = $_GET['view'];
        $action = $_GET['action'];

        if ($method == 'GET') {
            switch ($view) {
                case 'product':

                    (new UsersController())->isLogged();


                    if ($action == 'new')
                        (new ProductController())->create();

                    elseif ($action == 'list')
                        (new ProductController())->list();
                    break;
                case 'product-history' :


                    if ($action == 'new')
                        (new ProductHistoryController())->create();

                    elseif ($action == 'list')
                        (new ProductHistoryController())->list();
                    break;
                case 'users' :


                    if ($action == 'new')
                        (new UsersController())->create();

                    elseif ($action == 'list')
                        (new UsersController())->list();

                    break;
            }

        } elseif ($method == 'POST') {
            switch ($view) {
                case 'product':

                    (new UsersController())->isLogged();


                    if ($action == 'create')
                        (new ProductController())->store();

                    break;

                case 'product-history':

                    (new UsersController())->isLogged();


                    if ($action == 'create')
                        (new ProductHistoryController())->store();

                    break;

                case 'users':

                    if ($action == 'create') {
                        (new UsersController())->isLogged();
                        (new UsersController())->store();
                    }
                    elseif ($action == 'auth'){
                    (new UsersController())->auth();

                    break;
            }
            break;
        }
        }
    }
}