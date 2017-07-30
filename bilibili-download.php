<?php
class Bilibili{
    const APP_SECRET ='1c15888dc316e05a15fdd0a02ed6584f';
    const APP_KEY='f3bb208b3d081dc8';
    const API_KEY='12737ff7776f1ade';
    private function getsign($params){
        ksort($params);
        reset($params);
        return strtolower(md5(http_build_query($params) . self::APP_SECRET));
    }
    public function getInfo($av,$page=1){
        $query=[
            'appkey'=>self::API_KEY,
            'id'=>$av,
            'page'=>$page
        ];
        $info=file_get_contents('http://api.bilibili.com/view?'.http_build_query($query));
        return $info;
    }
    public function getVideo($av,$page=1,$type='flv'){
        $info = json_decode($this->getInfo($av,$page),true);
        $param=[
            "cid"=>$info['cid'],
            "from"=>"local",
            "player"=>"1",
            "otype"=>"json",
            "type"=>$type,
            "quality"=>"100",
            "appkey"=>self::APP_KEY
        ];
        $back = $this->getsign($param);
        $cdata = file_get_contents('https://interface.bilibili.com/playurl?'.http_build_query($param).'&sign='.$back);
        return $cdata;
    }
}
$b=new bilibili();
$url =
    json_decode(
        $b->getVideo(121515),true
    )['durl'][0]['url']
;
header("Location:" . $url);