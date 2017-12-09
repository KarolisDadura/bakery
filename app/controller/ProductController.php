<?php

namespace app\controller;

use app\Model\Product;

class ProductController
{
    public function create(): string
    {
        return file_get_contents('app/view/product/new.php');
    }

    public function store(): string
    {
        // Product::create($_POST); use like optional

        $model = new Product();
        $model->create($_POST);

        //redirecting to list

        header('Location:?view=product&action=list');

        exit();
    }

    public function list()
    {
        $model = new Product();
        $result = $model->list();
        $header = '';
        $data = '';

        foreach ($result as $item) {
            if ($header == '') {
                foreach ($item as $key => $value) {
                    $header .= '<th>' . $key . '</th>';
                }
            }
            $data .='<tr>';
            foreach ($item as $key => $value) {
                $data .= '<td>' . $value . '</td>';
            }
            $data .='</tr>';
        }
        echo "<table>";
        echo "<thead>";
        echo "<tr>";
        echo $header;
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        echo $data;
        echo "</tbody>";
        echo "</table>";
    }
}