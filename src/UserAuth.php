<?php
namespace Chel\App;

use Config;
class UserAuth implements Authenticatable{
    use AuthTrait;

    protected \PDO $pdo;

    public function __construct()
    {
        $host = Config::get('db_host');
        $username = Config::get('username');
        $password = Config::get('password');
        $database = Config::get('database');
    }
    
}