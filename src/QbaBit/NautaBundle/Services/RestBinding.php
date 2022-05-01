<?php
/**
 * Created by PhpStorm.
 * User: Administrador
 * Date: 19/06/2017
 * Time: 2:35
 */

namespace QbaBit\NautaBundle\Services;


use QbaBit\CoreBundle\Traits\ServiceContainer;

class RestBinding
{


    private function CallAPI($method, $url, $user, $pass, $data = false)
    {
        $curl = curl_init();

        switch ($method) {
            case "POST":

                if ($data) {
                    curl_setopt($curl, CURLOPT_POST, count($data));
                    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
                } else
                    curl_setopt($curl, CURLOPT_POST, 1);


                break;
            case "PUT":
                curl_setopt($curl, CURLOPT_PUT, 1);
                break;
            default:
                if ($data)
                    $url = sprintf("%s?%s", $url, http_build_query($data));
        }



              $headers = array('Content-Type: application/json'/*,"Authorization: ".$this->getAuthorization($user,$pass)*/);

        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);


        $result = curl_exec($curl);

        $w = "";
        $r = "";

        if ($result === false) {
            $w = curl_error($curl);

        } else
            $r = $result;

        curl_close($curl);

        return $w === "" ? $r : $w;
    }



    public function getData($url, $data, $method, $escape = false)
    {

        if (strtolower($method) == 'post')
            return $this->CallAPI($method, $url, "", "", $data);
        else {
            $t = $this->CallAPI($method, $url, "", "", $data);
            $w = json_decode($t);

            if (is_array($w ) ||$w!=null ||is_object($w))
                return $w;

     if(strpos($t,"html")!==false)
         return null;
            return $t;

        }


    }
}