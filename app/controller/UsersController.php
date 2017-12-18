<?php

namespace app\controller;


use app\Model\User;

class UsersController
{
    public function create()
    {
        $template = new TemplateEngineController('new-user');
        $template->echoOutput();
    }

    public function store(): string
    {
        $data = $_POST;
        $data['password'] = sha1($data['password'] . SALT);

        $model = new user();
        $model->create($data);

        //redirecting to list

        header('Location:?view=users&action=list');

        exit();
    }

    public function list()
    {
        $model = new user();
        $result = $model->list();
        $header = '';
        $data = '';

        foreach ($result as $item) {
            if ($header == '') {
                foreach ($item as $key => $value) {
                    $header .= '<th>' . $key . '</th>';
                }
            }
            $data .= '<tr>';
            foreach ($item as $key => $value) {
                $data .= '<td>' . $value . '</td>';
            }
            $data .= '</tr>';
        }

        $template = new TemplateEngineController('table-list');
        $template->set('header', $header);
        $template->set('data', $data);
        $template->set('ending', 'Lentelės pabaiga.');

        $template->echoOutput();


    }

    public function login()
    {
        $template = new TemplateEngineController('login');

        $template->echoOutput();
    }

    public function auth()
    {
        $data = $_POST;
        $data['password'] = sha1($data['password'] . SALT);

        $model = new User();
        $result = $model->auth($data);

        //TODO check if result has any rows

        foreach ($result as $key => $value) {
            setcookie('user', $value['id'], time() + 3600);
            header('Location:?view=product-history&action=new');
            exit();
        }


    }

    public function isLogged()
    {
        if (isset($_COOKIE['user'])) {
            $model = new User();
            $result = $model->find($_COOKIE['User']);

            if ($result->num_rows != 1)
                die('please login!');

            setcookie('user', $_COOKIE['User'], time() + 3600);

        }

    }
}