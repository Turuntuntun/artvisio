<?php
/**
 * Created by PhpStorm.
 * User: Юра
 * Date: 29.10.2020
 * Time: 23:56
 */

namespace controllers;


use core\Controller;

class AddController extends Controller
{
    public function main() : void
    {
        if (isset($_GET['submit'])) {
            $this->model->addBook($_GET['name'],$_GET['author'],$_GET['year']);
        }
        $this->view->render($this->params['title']);
    }
}