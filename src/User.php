<?php
/**
 * Created by PhpStorm.
 * User: Bestony
 * Date: 2016/11/21
 * Time: 1:37
 */
namespace Bestony\Comb;
use Bestony\Comb;

class User
{
    /**
     * 获取Token
     * @Todo Token 缓存
     * @param $app_key
     * @param $app_secret
     * @return mixed
     */
    public function getToken($app_key,$app_secret)
      {
            $arr = array(
                'app_key' => $app_key,
                'app_secret' => $app_secret
            );
            $http = new Comb\Http;
            $res = $http->makePostRequest("/api/v1/token", $arr);
            return $res->token;
    }
}