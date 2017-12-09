<?php


namespace app\Model;


use app\Model\interfaces\Destroyable;
use app\Model\interfaces\Manageable;

class Product extends CoreModel implements Manageable, Destroyable
{
    protected $table = 'bakery_products';

    public function create(array $data)
    {
        //print_r($data);

        $query = $this->generateInsertQuery($data, true);
        $this->query($query);
    }

    public function delete()
    {
        // TODO: Implement delete() method.
    }
    public function destroy()
    {
        // TODO: Implement destroy() method.
    }
}