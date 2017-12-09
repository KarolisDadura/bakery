<?php
/**
 * Created by PhpStorm.
 * User: Vartotojas
 * Date: 2017.12.06
 * Time: 21:19
 */

namespace app\Model;


use app\Model\interfaces\Destroyable;
use app\Model\interfaces\Manageable;

class Product extends CoreModel implements Manageable, Destroyable
{
    public function create(array $data)
    {
        //print_r($data);

        $query = $this->generateInsertQuery('bakery_products', $data, true);
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