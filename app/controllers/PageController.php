<?php
/**
 * Created by PhpStorm.
 * User: Oogie
 * Date: 07.07.2018
 * Time: 21:43
 */

namespace app\controllers;


class PageController extends AppController
{

    public function __construct($route){
        debug($route);
    }

    public function viewAction(){
        echo __METHOD__;
    }

}