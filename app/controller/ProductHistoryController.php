<?php

namespace app\controller;


use app\Model\Product;
use app\Model\ProductHistory;

class ProductHistoryController
{

    public function create()
    {
        $template = new TemplateEngineController('new-product-history');

        $value = $this->getProductOptions();

        $template-> set('productOptions', $value);

        $template->echoOutput();
    }

    public function list()
    {
        $model = new ProductHistory();
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

    public function getProductOptions(): string
    {
        $result = (new Product())->list();
        $options = '';

        foreach ($result as $key => $value) {
            $options .= '<option value="' . $value['id'] . '">' . $value ['name'] . '</option>';
        }
        return $options;
    }

    public function store()
    {
        $model = new ProductHistory();
        $model->create($_POST);

        //redirecting to list

        header('Location:?view=product-history&action=list');

        exit();
    }

}