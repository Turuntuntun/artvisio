<?php
/**
 * Created by PhpStorm.
 * User: Юра
 * Date: 30.10.2020
 * Time: 3:58
 */

namespace models;

use core\Model;
use PDO;

class AddModel extends Model
{
    public function addBook(string $name,string $author,string $year) : void
    {
        $sth = $this->connect->prepare("INSERT INTO `books` SET `name` = :name, `year` = :year, `author` = :author");
        $sth->execute(array('name'=>$name,'author'=>$author,'year'=>$year));
    }
}