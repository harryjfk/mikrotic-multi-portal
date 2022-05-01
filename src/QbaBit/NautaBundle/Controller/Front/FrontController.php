<?php

namespace QbaBit\NautaBundle\Controller\Front;

use GuzzleHttp\Client;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\UriInterface;
use QbaBit\NautaBundle\Entity\NautaAccounts;
use QbaBit\NautaBundle\Entity\NautaAccountsLog;
use QbaBit\NautaBundle\Services\RestBinding;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use QbaBit\CoreBundle\Controller\QbaBitBaseFrontEndController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class FrontController extends QbaBitBaseFrontEndController
{


    public function indexAction(Request $request)
    {

        $configs = $this->get("qba_bit_core.global.utils")->getConfigValue("qba_bit_nauta.options");



        $mk = $this->get("qba_bit.nauta.mk_controller");
        $t1 = $request->getSession()->get("stop_time",null);
        $t3 = $request->get("create_file",null);


        if($t1!=null&& strpos($request->getRequestUri(),"wait")===false)
            return $this->redirect($this->generateUrl("qba_bit_nauta_index",array("type"=>"wait")));


        $t = $request->get("type",null);
        if($t=="ccq")
        {

        $ccq = $mk->getCCQ();
        if($ccq==-1)
            $ccq =0;
        $array = array("return"=>$mk->getCondicion(),"ccq"=>$ccq,"signal"=>$mk->getPower());

        return new JsonResponse($array);
        }
        else
            if($t=="wait")
            {
                $t = $request->get("resting_time");
                $t1 = $request->get("complete");
                $setedDated = $request->getSession()->get("stop_time");
                if ($setedDated != null) {
                    $now = (new \DateTime());
                    $timePassed = $now->diff($setedDated);
                    if ($timePassed->invert) {
                        $setedDated = null;
                    }
                }



                if (isset($t) and !empty($t)) {


                 return new JsonResponse(array("time" => $timePassed));

                } else
                    if ((isset($t1) and !empty($t1)) || $setedDated == null|| $timePassed==null) {

                        $t = $request->getSession()->get("type");
                        if($t=="1")
                            $mk->enableInterface();

                        $request->getSession()->set("stop_time",null);
                        $request->getSession()->set("type", null);
                        $request->getSession()->save();
                       return $this->redirect($this->generateUrl("qba_bit_nauta_index"));

                    } else {

                    return $this->render("QbaBitNautaBundle:Default:wait.html.twig",array('mk'=>$mk,"nauta"=>$configs,"timePassed"=>$timePassed));
                    }
            }
        else
        if($t3!=null)
        {
//            $lic = new Licence("2018/07/31 21:39:10","2018/08/2 21:39:10");
//
//            $lic->saveInitialFile();
        }else
            if (isset($t) and !empty($t)) {
                $time = 'P0Y0M0DT0H0M30S';
                if ($t == "3")
                    $mk->renew();
                else
                    if ($t == "2")
                        $mk->release();
                    else
                        if ($t == "1") {
                            $mk->disablenterface();
                            $time = 'P0Y0M0DT0H0M30S';
                        }

                $now = new \DateTime();
                $interval = new \DateInterval($time);
                $setedDated = $now->add($interval);
                $request->getSession()->set("stop_time",$setedDated);
                $request->getSession()->set("type", $t);
                $s = $this->generateUrl("qba_bit_nauta_index",array("type"=>"wait"));
                return new JsonResponse(array("url" =>$s ));

            }

            else {
              return $this->render("QbaBitNautaBundle:Default:index.html.twig",array("nauta"=>$configs,"mk"=>$mk));

            }
    }



//    public function getURL()
//    {
//        return "https://secure.etecsa.net:8443";
//    }
//
//    protected function updateDependcies($r)
//    {
//        $replace = array();
//        $replace[] = "/nauta_etecsa/LoginURL/css/wifi.css";
//        $replace[] = "/nauta_etecsa/LoginURL/js/jquery.js";
//        $replace[] = "/nauta_etecsa/LoginURL/js/jsLocale_es_ES.js";
//        $replace[] = "/nauta_etecsa/LoginURL/images/nauta_wifi.jpg";
//        $replace[] = "/nauta_etecsa/LoginURL/js/validate.js";
//        $replace[] = "/nauta_etecsa/LoginURL/images/CUBADEBATE.jpg";
//        $replace[] = "/nauta_etecsa/LoginURL/pc_login.jsp";
//        $replace[] = "/nauta_etecsa/LoginURL/images/CUBAEDUCA.jpg";
//        $replace[] = "/nauta_etecsa/LoginURL/images/contenedor_bg.jpg";
//        $replace[] = "/nauta_etecsa/LoginURL/images/etecsa.jpg";
//        $replace[] = "/nauta_etecsa/LoginURL/css/form.css";
//        $replace[] = "/nauta_etecsa/LoginURL/images/CUBASI.jpg";
//        $replace[] = "/nauta_etecsa/LoginURL/images/CUBARTE.jpg";
//        $replace[] = "/nauta_etecsa/LoginURL/images/PAPELETA.jpg";
//        $replace[] = "/nauta_etecsa/LoginURL/images/OFERTAS.jpg";
//        $replace[] = "/nauta_etecsa/LoginURL/images/ECURED.jpg";
//        $replace[] = "/nauta_etecsa/LoginURL/images/ECURED.jpg";
//
//        foreach ($replace as $rp)
//            $r = str_replace($rp, $this->getURL() . $rp, $r);
//        // $r = str_replace('onclick="checkLogin();"', '', $r);
////$r = str_replace('https://secure.etecsa.net:8443/nauta_etecsa/LoginURL/pc_login.jsp', 'http://localhost/nauta_portal/?error=login_failed', $r);
//        $r = str_replace('https://secure.etecsa.net:8443//LoginServlet', $this->generateUrl("qba_bit_nauta_login"), $r);
//        return $r;
//    }
//
//    private function isConnected($url)
//    {
//
//        try {
//            $client = new Client();
//            $t = $client->request("GET", $url,['timeout' => 1]);
//            $r = $t->getStatusCode() === 200;
//                 if ($url != $this->getURL())
//                $r = strpos($t->getBody()->getContents(), $this->getURL()) === false;
//
//return $r;
//        } catch (\Exception $e) {
//            return false;
//        }
//        return false;
//    }
//
//    public function indexAction(Request $request)
//    {
//
//
//        $ajax = $request->get("ajax");
//        $t = $this->getIp();
//        if ($t == null)
//            return $this->render("@QbaBitNauta/Default/error.html.twig", array("error" => "Su Ip no es valida -> IP " . $_SERVER['REMOTE_ADDR']));
//
//        $em = $this->get("doctrine.orm.default_entity_manager");
//        $forzada = $em->getRepository("QbaBitNautaBundle:NautaAccountsLog")->getForzada($t);
//
//        if ($forzada != null) {
//            $setedDated = $forzada->getForzada();
//
//            if ($forzada->getTypeClose() == 1)
//                $interval = new \DateInterval('P0Y0M0DT0H5M0S');
//            else
//                if ($forzada->getTypeClose() == 2)
//                    $interval = new \DateInterval('P0Y0M0DT0H1M0S');
//                else
//                    if ($forzada->getTypeClose() == 3)
//                        $interval = new \DateInterval('P0Y0M0DT0H1M0S');
//            $setedDated = $setedDated->add($interval);
//            $now = (new \DateTime());
//            $timePassed = $now->diff($setedDated);
//
//            if ($timePassed->invert == false) {
//
//                if ($ajax == "true")
//                    return new JsonResponse(array("time" => $timePassed));
//                else
//                    return $this->render("@QbaBitNauta/Default/waiting.html.twig", array("forzada" => $forzada, "ip" => $t, "time" => $timePassed));
//            } else {
//                connect:
//                $wlan = $this->get("qba_bit.nauta.mk_controller")->getInterface($this->getIp()->getUser());
//
//
//                if ($wlan["state"] === "X") {
//                    $logged_user = $em->getRepository("QbaBitNautaBundle:NautaAccountsLog")->find($forzada->getId());
//
//                    $this->get("qba_bit.nauta.mk_controller")->enable($logged_user->getAccount()->getUser());
//                    goto connect;
//
//                    //  return $this->redirectToRoute("qba_bit_nauta_status");
//
//                }
//
//
//            }
//
//
//        }
//
//
//        return $this->forward("QbaBitNautaBundle:Front\Front:status");
//
//
//    }
//
//    protected function getLoginUrl()
//    {
//        return "https://secure.etecsa.net:8443//LoginServlet";
//    }
//
//    public function getIp()
//    {
//        $ip = $_SERVER['REMOTE_ADDR'];
//
//        $em = $this->get("doctrine.orm.default_entity_manager");
//        $t = $em->getRepository("QbaBitNautaBundle:NautaUserIp")->hasUserFromIp($ip);
//        return $t;
//    }
//
////    public function loginAction(Request $request)
////    {
////
////        $t = $this->getIp();
////
////        if ($t != null) {
////            $em = $this->get("doctrine.orm.default_entity_manager");
////
////
////            $client = new Client();
////            $jar = new \GuzzleHttp\Cookie\CookieJar();
////            // $url = "https://secure.etecsa.net:8443";
////            $url = $this->getLoginUrl();
////            $result = $client->request("POST",
////                $url,
////                array("form_params" => $_REQUEST,
////                    'cookies' => $jar
////
////                )
////            );
////            $content = $result->getBody()->getContents();
////            //echo($content);
////            $uu_id = substr($content, strpos($content, "ATTRIBUTE_UUID") + 15, 32);
////
////            if (strpos($content, "Bienvenido") !== false && $uu_id == "")
////                return $this->redirect($this->generateUrl("qba_bit_nauta_index") . "?error=login_failed");
////
////            {
////
////                $user = $t->getUser();
////
////                $account = $em->getRepository("QbaBitNautaBundle:NautaAccounts")->findOneBy(array("nameAccount" => $request->get("username")));
////
////                if ($account == null) {
////                    $account = new NautaAccounts();
////                    $account->setNameAccount($request->get("username"));
////                    $account->setUser($user);
////                    $em->persist($account);
////                    $em->flush($account);
////                }
////
////                $log = new NautaAccountsLog();
////                $log->setAccount($account);
////                $log->setCsrfhw($request->get("CSRFHW"));
////                $log->setIp($request->get("wlanuserip"));
////                $log->setLanIp($t);
////                $data = $request->request->all();
////                $data["uuid"] = $uu_id;
////                $log->setData(json_encode($data));
////                $log->setClosed(false);
////                $em->persist($log);
////                $em->flush($log);
////                return $this->redirect($this->generateUrl("qba_bit_nauta_status", array("user" => $account->getNameAccount())));
////            }
////        } else
////            return $this->redirect($this->generateUrl("qba_bit_nauta_index") . "?error=login_invalid_ip");
////
////    }
//
//    public function statusAction(Request $request, $user = null, $ajax = false)
//    {
//
//
//        $em = $this->get("doctrine.orm.default_entity_manager");
//
//        if ($user == null) {
//            $ip = $this->getIp();
//            $ip1 = $_SERVER['REMOTE_ADDR'];
//            $interface = $this->get("qba_bit.nauta.mk_controller")->getWlanFromIp($ip1);
//            return $this->render("@QbaBitNauta/Default/status_emergency.html.twig", array("ip" => $ip, "ip1" => $ip1, "interface" => $interface));
//
//
//        } else {
//            $client = new Client();
//            $logged_user = $em->getRepository("QbaBitNautaBundle:NautaAccountsLog")->getLastFromUser($user);
//            $params1 = "";
//            $keys = array_keys($logged_user["data"]);
//
//            for ($i = 0; $i < count($keys); $i++)
//                if ($keys[$i] != "password" && $keys[$i] != "lang" && $keys[$i] != "firsturl" && $keys[$i] != "usertype" && $keys[$i] != "gotopage" && $keys[$i] != "successpage") {
//                    if ($keys[$i] == "loggerId")
//                        $params1 .= $keys[$i] . '=' . $logged_user["data"][$keys[$i]] . "+" . $logged_user["data"]["username"] . "&";
//                    else
//
//                        $params1 .= $keys[$i] . '=' . $logged_user["data"][$keys[$i]] . "&";
//                }
//
//            if ($ajax == false)
//                return $this->render("@QbaBitNauta/Default/status.html.twig", array("data" => $params1, "user" => $logged_user));
//
//
//            $url = "https://secure.etecsa.net:8443/EtecsaQueryServlet?op=getLeftTime&op1=" . $logged_user["data"]["username"];
//
//            $result = $client->request(
//                'GET',
//                $url,
//                [
//                    'stream' => true,
//                    'read_timeout' => 1,
//                ]
//            );
//            $amount = $result->getBody()->getContents();
//
//            if ($ajax == true) {
//                return new JsonResponse(array("amount" => $amount));
//            }
//        }
//
//
//    }
//
//
//    public function logoutAction($user, $forzada, $type)
//    {
//        $em = $this->get("doctrine.orm.default_entity_manager");
//        if ($forzada == "true") {
//            $t = new NautaAccountsLog();
//            $t->setIp($this->getIp());
//            $acc = $this->getIp()->getUser()->getAccounts();
//            $a = null;
//            if ($acc->count() == 0) {
//                $a = new NautaAccounts();
//                $a->setUser($this->getIp()->getUser());
//                $a->setNameAccount("clousure");
//                $em->persist($a);
//                $em->flush();
//            } else
//                $a = $acc[0];
//
//            if ($type == "1")
//                $this->get("qba_bit.nauta.mk_controller")->disable($this->getIp()->getUser());
//            else
//                if ($type == "2")
//                    $this->get("qba_bit.nauta.mk_controller")->setMacInterface($this->getIp()->getUser()->getInterface());
//                else
//
//                    $this->get("qba_bit.nauta.mk_controller")->renewDHCP($this->getIp()->getUser(), false);
//
//
//            $logged_user = new NautaAccountsLog();
//            $logged_user->setIp($this->getIp()->getIp());
//            $logged_user->setData("[]");
//            $logged_user->setLanIp($this->getIp());
//            $logged_user->setCsrfhw("aaaa");
//            $logged_user->setAccount($a);
//            $logged_user->setForzada(new \DateTime());
//            $logged_user->setTypeClose($type);
//            $logged_user->setClosed(true);
//            $em->persist($logged_user);
//            $em->flush($logged_user);
//            $result["return"] = 1;
//            $result["url"] = $this->generateUrl("qba_bit_nauta_index");
//            return new JsonResponse($result);
//        }
//        /*$client = new Client();
//        $logged_user = $em->getRepository("QbaBitNautaBundle:NautaAccountsLog")->getLastFromUser($user);
//
//
//        $params1 = "CSRFHW=" . $logged_user["data"]['CSRFHW'] . "&ATTRIBUTE_UUID=" . $logged_user["data"]["uuid"] . "&CSRFHW=" . $logged_user["data"]['CSRFHW'] . "%20&wlanuserip=" . $logged_user["data"]['wlanuserip'] . "&ssid=&loggerId=" . $logged_user["data"]['loggerId'] . "+" . $logged_user["data"]['username'] . "&domain=&username=" . $logged_user["data"]['username'] . "&wlanacname=&wlanmac=&remove=1";
//
//        $url = "https://secure.etecsa.net:8443/LogoutServlet?" . $params1;
//
//
//        $result = $client->request(
//            'GET',
//            $url,
//            [
//                'read_timeout' => 10,
//            ]
//        );
//        $content = $result->getBody()->getContents();
//
//        $result = array();
//        if (strpos($content, "SUCCESS") == false)
//            $result["return"] = 0;
//        else {
//            $result["return"] = 1;
//            $logged_user = $em->getRepository("QbaBitNautaBundle:NautaAccountsLog")->find($logged_user["id"]);
//
//            $logged_user->setClosed(true);
//            $em->persist($logged_user);
//            $em->flush($logged_user);
//            $result["url"] = "https://secure.etecsa.net:8443/nauta_etecsa/OnlineURL/offline.jsp?CSRFHW=" . json_decode($logged_user->getData(), true)['CSRFHW'] . "&lang=es_ES";
//        }
//
//        return new JsonResponse($result);*/
//    }
//
//    public function ccqAction()
//    {
//
//
//        $cqq = $this->get("qba_bit.nauta.mk_controller")->getCCQ($this->getIp(), $_SERVER["REMOTE_ADDR"]);
//
//        $s = "";
//        if ($cqq["ccq"] <= 15)
//            $s = "Mala";
//        else
//            if ($cqq["ccq"] <= 30)
//                $s = "Regular";
//            else
//                $s = "Buena";
//        return new JsonResponse(array("return" => $s, "ccq" => $cqq["ccq"], "signal" => $cqq["signal"]));
//
//
//    }
//
//    public function pingAction(Request $request)
//    {
//
//        if ($request->isXmlHttpRequest()) {
//            $r = $this->get("qba_bit.nauta.mk_controller")->pingEquipment();
//            return new JsonResponse($r);
//
//        }
//
//        return $this->render("@QbaBitNauta/Default/ping.html.twig");
//
//
//    }
//
//
//    public function aviableInternetAction($ajax)
//    {
//        $ip = $this->get("qba_bit.nauta.mk_controller")->getServerIp();
//
//        $states = $this->get("qba_bit.nauta.mk_controller")->getAviableInternetInterfaces($ip);
//        $ip = $this->getIp();
//        $r = array("states" => $states, "ip" => $ip);
//        if ($ajax == "true") {
//            $st = array();
//            foreach ($states as $k => $v)
//                $st[] = array("name" => $k, "value" => $v);
//            $r["states"] = $st;
//            return new JsonResponse($r);
//        }
//
//        return $this->render("@QbaBitNauta/Default/change.html.twig", $r);
//    }
//
//    public function changeInterfaceAction($interface)
//    {
//        $ip = $this->getIp();
//        $ip = $ip->getIp();
//        $t = $this->get("qba_bit.nauta.mk_controller")->changeToInterface($ip, $interface);
//        return new JsonResponse(array("return" => true));
//
//    }
//
//    public function hasInternetAction($internet)
//    {
//        if($internet=="all")
//        {
//            $arr = array("internet"=>$result = $this->isConnected("www.google.com"),"secure"=>  $this->isConnected($this->getURL()));
//            return new JsonResponse($arr);
//        }
//            else
//
//            {
//
//
//        $result = $this->isConnected($internet == "true" ? "www.google.com" : $this->getURL());
//
//
//            return new JsonResponse(array("hasInternet" => $result)); }
//
//    }

}
