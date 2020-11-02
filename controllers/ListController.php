<?php
/**
 * Created by PhpStorm.
 * User: Юра
 * Date: 29.10.2020
 * Time: 23:56
 */

namespace controllers;

use core\Controller;

class ListController extends Controller
{
    public function main() : void
    {
        $result = $this->model->getList();
        $this->view->render($this->params['title'],$result);
    }
}