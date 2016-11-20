<?php
/**
 * Created by PhpStorm.
 * User: Bestony
 * Date: 2016/11/21
 * Time: 1:44
 */

namespace Bestony\Comb;

class Http
{
    public $BASE_URL = 'https://open.c.163.com';
    /**
     * 生成 Json 数据串
     * @param array $array
     * @return string
     */
    private function makeJson($array= []){
        return json_encode($array);
    }

    public function makeGetRequest($url= '',$data='',$header=''){

    }

    /**
     * 生成 Post 请求
     * @param string $url
     * @param string $data
     * @param string $header
     * @return mixed
     */
    public function makePostRequest($url= '',$data= '',$header=''){
        $url = $this->BASE_URL.$url;
        $json= $this->makeJson($data);
        $response = \Httpful\Request::post($url)
            ->body($json)
            ->addHeader('Content-Type','application/json')
            ->headers($header)
            ->send();
        return $response->body;
    }
}