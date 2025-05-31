<?php
namespace Chel\App;
trait AuthTrait{
    protected ?string $currentuser = null;
    public function logout():void{
        $this->currentuser=null;
    }
    public function check():bool{
        return $this->currentuser==null;
    }

}