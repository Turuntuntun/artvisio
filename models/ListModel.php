<?php
/**
 * Created by PhpStorm.
 * User: Юра
 * Date: 30.10.2020
 * Time: 3:59
 */

namespace models;

use core\Model;
use PDO;

class ListModel extends Model
{
    public function getList() : array
    {
        $sth = $this->connect->prepare("SELECT * FROM books");
        $sth->execute();
        $result = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}