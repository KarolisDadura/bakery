<?php
/**
 * Created by PhpStorm.
 * User: Vartotojas
 * Date: 2017.12.09
 * Time: 13:34
 */

namespace app\Model;


use app\Model\interfaces\Destroyable;
use app\Model\interfaces\Manageable;

class ProductHistory extends CoreModel implements Manageable, Destroyable
{
    protected $table = 'bakery_products_history';

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
