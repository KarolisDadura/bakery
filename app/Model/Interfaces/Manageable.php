<?php
/**
 * Created by PhpStorm.
 * User: Vartotojas
 * Date: 2017.12.06
 * Time: 21:29
 */

namespace app\Model\interfaces;


interface Manageable
{
    public function create(array $data);
}