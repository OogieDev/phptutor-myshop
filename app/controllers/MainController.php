<?php

namespace app\controllers;


use ishop\Cache;

class MainController extends AppController
{

    public function indexAction(){
        $posts = \R::findAll('test');
        $this->setMeta("Магазин электроники", "Нужна электроника? Тогда тебе к нам!", "Электроника, мобильные телефоны, ноутбуки, планшеты");
        $name = 'Андрей';
        $names = ['Andrey', 'Jane'];
        $age = 30;
        $pol = 'Мужик';
        $cache = Cache::instance();
//        $cache->set('test', $names);
//        $cache->delete('test');
        $data = $cache->get('test');
        if(!$data){
            $cache->set('test', $names);
        }
        debug($data);
        $this->set(compact('name', 'age', 'pol', 'posts'));
    }


}