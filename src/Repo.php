<?php
/**
 * Created by PhpStorm.
 * User: Bestony
 * Date: 2016/11/21
 * Time: 2:51
 */

namespace Bestony\Comb;
use Bestony\Comb;


class Repo
{
    /**
     * 获取用户名下的所有Repo
     * @param $token
     * @param int $limit
     * @param int $offset
     * @return array|object|string
     */
    public function getImages($token,$limit =20 ,$offset =0)
    {
        $http = new Comb\Http;
        $data= array(
            "limt"=>$limit,"offset"=>$offset
        );
        $header = array(
            "Authorization"=>"Token ".$token
        );
        $res = $http->makeGetRequest('/api/v1/repositories',$data,$header);
        return $res;
    }
    public function getImage($token,$id){
        $http = new Comb\Http;
        $data = array(
            "id"=>$id
        );
        $header = array(
            "Authorization"=>"Token ".$token
        );
        $res = $http->makeGetRequest('/api/v1/repositories/'.$id,$data,$header);
        return $res;
    }
}