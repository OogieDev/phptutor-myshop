<?php

namespace app\controllers;


use ishop\Cache;

class MainController extends AppController
{

    public function indexAction(){
        $this->setMeta("Магазин электроники", "Нужна электроника? Тогда тебе к нам!", "Электроника, мобильные телефоны, ноутбуки, планшеты");
    }


}