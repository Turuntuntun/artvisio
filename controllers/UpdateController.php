<?php
/**
 * Created by PhpStorm.
 * User: Юра
 * Date: 29.10.2020
 * Time: 23:57
 */

namespace controllers;

use core\Controller;

class UpdateController extends Controller
{
    public function main() : void
    {
        if (isset($_GET['submit'])) {
            $this->model->Update($_GET['id'],$_GET['name'],$_GET['author'],$_GET['year']);
        }
        $result = $this->model->getList();
        $this->view->render($this->params['title'],$result);
    }
}