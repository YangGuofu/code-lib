<?php
namespace src\singleton;


class Singleton
{
    private static $instance;

    // 构造函数、克隆函数、反序列化函数私有化 防止类被实例化
    // 减少资源 防止对改变未知
    public static function getInstance(){
        // self子类可继承单例 static子类不能继承单例 ？
        if ( null === self::$instance ){
            self::$instance = new static();
        }

        return self::$instance;
    }

    public function getName(){
        return __CLASS__;
    }

    private function __construct(){}
    private function __clone(){}
    private function __wakeup(){}
}