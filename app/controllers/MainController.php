<?php

namespace app\controllers;


class MainController extends AppController
{

    public function indexAction(){
        $this->setMeta("Магазин электроники", "Нужна электроника? Тогда тебе к нам!", "Электроника, мобильные телефоны, ноутбуки, планшеты");
        $name = 'Андрей';
        $age = 30;
        $pol = 'Мужик';
        $this->set(compact('name', 'age', 'pol'));
    }


}