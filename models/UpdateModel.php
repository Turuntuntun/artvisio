<?php
/**
 * Created by PhpStorm.
 * User: Юра
 * Date: 30.10.2020
 * Time: 3:59
 */
namespace Models;

use core\Model;
use PDO;
class UpdateModel extends Model
{
    public function getList() : array
    {
        $sth = $this->connect->prepare("SELECT * FROM `books`");
        $sth->execute();
        $result = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function update(string $id,string $name,string $author,string $year) : void
    {
        $sth = $this->connect->prepare("UPDATE `books` SET `name` = :name, `year` = :year, `author` = :author WHERE `id`=:id");
        $sth->execute(array('name'=>$name,'year'=>$year,'author'=>$author,'id'=>$id));
    }
}