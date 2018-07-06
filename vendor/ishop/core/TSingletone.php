<?php
/**
 * Created by PhpStorm.
 * User: Oogie
 * Date: 07.07.2018
 * Time: 1:29
 */

namespace ishop;


trait TSingletone
{

    private static $instance;

    public static function instance(){
        if(self::$instance === null){
            self::$instance = new self;
        }
        return self::$instance;
    }

}