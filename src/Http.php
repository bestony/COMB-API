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

    /**
     * 生成Get请求
     * @param string $url
     * @param array $data
     * @param array $header
     * @return array|object|string
     */
    public function makeGetRequest($url= '',$data=[],$header=[]){
            $url = $this->BASE_URL.$url;
            $jsonParam=$this->makeJson($data);
            $response = \Httpful\Request::get($url)
                ->body($jsonParam)
                ->addHeaders($header)
                ->send();
            return $response->body;
    }

    /**
     * 生成 Post 请求
     * @param string $url
     * @param array $data
     * @param array $header
     * @return mixed
     */
    public function makePostRequest($url= '',$data=[],$header=[]){
        $url = $this->BASE_URL.$url;
        $jsonParam= $this->makeJson($data);
        $response = \Httpful\Request::post($url)
            ->body($jsonParam)
            ->addHeader('Content-Type','application/json')
            ->headers($header)
            ->send();
        return $response->body;
    }
}