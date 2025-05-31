<?php
namespace Chel\App;
interface Authenticatable{
    public function login(string $username, string $password):bool;
    public function logout():void;
    public function check():bool;

    
}