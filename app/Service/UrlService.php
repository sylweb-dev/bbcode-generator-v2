<?php

class UrlService
{
    public function __construct() {}

    public function replaceUrlParameters($url = '', $newParams = array()){
        if($url){
            $urlArray = parse_url($url);
            $queryString = $urlArray['query'];
            parse_str($queryString, $queryParams);
            $queryParams = array_merge($queryParams, $newParams);
            $urlArray['query'] = http_build_query($queryParams);

            if(!empty($urlArray)){
                $url = $urlArray['scheme'].'://'.$urlArray['host'].':8000'.$urlArray['path'].'?'.$urlArray['query'];
            }
        }
        return $url;
    }

}