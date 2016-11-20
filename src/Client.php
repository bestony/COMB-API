<?php
/**
 * Created by PhpStorm.
 * User: Bestony
 * Date: 2016/11/21
 * Time: 1:40
 */

namespace Bestony\Comb;
use Bestony\Comb;

class Client
{
    /**
     * Client constructor.
     * @param $accessKeyId
     * @param $accessKeySecret
     */
    public function __construct($app_key,$app_secret)
    {
        $this->app_key = $app_key;
        $this->app_secret = $app_secret;
        return $this;
    }
    private function getToken(){
        $user = new Comb\User;
        $token = $user->getToken($this->app_key,$this->app_secret);
        return $token;
    }
}