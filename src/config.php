<?php
 class Config
 {
    public static array $settings = [
        'db_host' => "localhost",
        'username' => "root",
        'password' => "",
        'database' => "malen",
    ];
    public static function get(string $key, $default=null){
        return static::$settings[$key]?? $default;
    }
 }