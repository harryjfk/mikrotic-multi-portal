<?php
/**
 * Created by PhpStorm.
 * User: harry
 * Date: 24/02/18
 * Time: 12:14
 */

namespace QbaBit\NautaBundle\Services;


use phpseclib\Net\SSH2;
use QbaBit\CoreBundle\Traits\ServiceContainer;
use QbaBit\NautaBundle\Entity\NautaUserIp;
use QbaBit\NautaBundle\Entity\RouterOs;
use QbaBit\SecurityBundle\Entity\SecurityUser;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class MkController
{
    use ServiceContainer;
    /**
     * @var RouterOs
     */
    private $api;


    public function getServerAddr()
    {




//        $addr = "172.16.10.11";
        if ($_SERVER["HTTP_HOST"] == "::1")
            $addr = $this->container->get("router")->generate("qba_bit_nauta_index");
        else
            $addr = $_SERVER["HTTP_HOST"];

        return $addr;
    }

    public function enableInterface($interface = null)
    {
        $this->connect();
        $item =  $interface!=null?$interface:$this->getInterface()[".id"];
        $this->api->comm("/interface/wireless/enable", array(".id" => $item));

    }

    public function disablenterface($interface = null)
    {
        $this->connect();
        $item = $interface!=null?$interface:$this->getInterface()[".id"];
        $this->api->comm("/interface/wireless/disable", array(".id" => $item));

    }

    public function __construct(ContainerInterface $container = null)
    {
        $this->container = $container;
        $this->api = new RouterOs();

        $this->api->debug = false;
    }

    private $configs;

    public function connect()
    {


        $this->configs = $this->container->get("qba_bit_core.global.utils")->getConfigValue("qba_bit_nauta.options");

//
        if (!$this->api->connected)
            return $this->api->connect($this->configs["address"], $this->configs["user"], $this->configs["password"]);
        else
            return true;


    }

    public function getAddress()
    {

        $command = " ifconfig eno1 ";
        $r = array();
        $localIP = exec($command, $r);

        if (count($r) == 0) {
            $command = " ifconfig enp1s0 ";
            $localIP = exec($command, $r);
        }
        if (count($r) == 0)
            return $_SERVER["REMOTE_ADDR"];
        $inet = $r[1];
        $inet = explode(" ", trim($inet));
        $inet = $inet[1];
        $inet = str_replace("addr:", "", $inet);

        return $inet;
    }

    public function getAddressList()
    {
        $ip = $this->getAddress();
        $this->connect();
        if ($this->api->connected) {

            $ARRAY = $this->api->comm("/ip/firewall/address-list/print");

            $salida = null;
            foreach ($ARRAY as $t)
                if ($t["address"] == $ip) {
                    $salida = $t;
                    break;
                }
            return $salida;
        } else
            return false;

    }

    public function getInterface()
    {
        $this->connect();

        if ($this->api->connected) {

            $salida = str_replace("salida", "", $this->getAddressList()["list"]);

            $ARRAY = $this->api->comm("/interface/wireless/print");

            $interface = null;
            foreach ($ARRAY as $t)
                if ($t["name"] == "wlan" . $salida) {
                    $interface = $t;
                    break;
                }
            if ($interface != null) {
                $monitor = $this->api->comm("/interface/wireless/monitor", array("numbers" => $interface[".id"], "once" => true));

                if (count($monitor) > 0) {
                    if ($monitor[0]["status"] == "disabled" || $monitor[0]["status"] == "searching-for-network") {
                        $interface["ccq"] = -1;
                        $interface["dbm"] = 0;
                    } else {
                        $interface["ccq"] = $monitor[0]["tx-ccq"];
                        $interface["dbm"] = $monitor[0]["signal-strength"];
                    }


                } else {
                    $interface["ccq"] = 0;
                    $interface["dbm"] = 0;
                }


            }
            return $interface;
        } else
            return false;

    }

    public function getDhcpItem(SecurityUser $user = null)
    {
        $interface = $user != null ? array("name" => $user->getInterface()) : $this->getInterface();
        $dhcp = null;
        $ARRAY = $this->api->comm("/ip/dhcp-client/print");
        foreach ($ARRAY as $t)
            if ($t["interface"] == $interface["name"]) {
                $dhcp = $t;
                break;
            }
        return $dhcp;
    }

    public function getCondicion()
    {
        $ccq = $this->getCCQ();
        if ($ccq === false)
            return false;
        if ($ccq == -1)
            return "Interfaz deshabilitada";
        else
            if ($ccq < 30)
                return "Mala";
            else
                if ($ccq < 60)
                    return "Regular";
        return "Buena";
    }

    public function getCCQ()
    {


        $interface = $this->getInterface();
        if ($interface === false)
            return false;
        return $interface["ccq"];
    }

    public function getPower()
    {
        $interface = $this->getInterface();
        if ($interface === false)
            return false;
        return $interface["dbm"];
    }

    public function renew()
    {
        $item = $this->getDhcpItem();
        $this->api->comm("/ip/dhcp-client/renew", array(".id" => $item[".id"]));
    }

    public function release()
    {
        $item = $this->getDhcpItem();
        $this->api->comm("/ip/dhcp-client/release", array(".id" => $item[".id"]));
    }

    public function refresh()
    {
        $item = $this->getDhcpItem();
        $this->api->comm("/ip/dhcp-client/renew", array(".id" => $item[".id"]));
    }

    public function changeMac()
    {
        $item = $this->getInterface();
        $number = str_replace("wlan", "", $item["name"]);
        $this->api->comm("/system/script/run", array(".id" => "macRandom" . $number));

    }

    public function getFirewallAddress()
    {
        $this->connect();
        if ($this->api->connected) {
            return $this->api->comm("/ip/firewall/address-list/print");

        }
        return false;
    }

    public function hasFirewallAddress($address)
    {
        $t = $this->getFirewallAddress();
        if ($this->api->connected) {
            foreach ($t as $f)
                if ($f["address"] == $address)
                    return true;
            return false;
        } else
            return false;

    }

    public function getFirewallMangle()
    {
        $this->connect();
        if ($this->api->connected) {
            return $this->api->comm("/ip/firewall/mangle/print");

        }
        return false;
    }

    public function hasFirewallMangle($salida)
    {
        $t = $this->getFirewallMangle();
        if ($this->api->connected) {
            foreach ($t as $f)
                if ($f["comment"] == $salida)
                    return true;
            return false;
        } else
            return false;

    }

    public function getRoutes()
    {
        $this->connect();
        if ($this->api->connected) {
            return $this->api->comm("/ip/route/print");

        }
        return false;
    }

    public function hasRoute($inteface)
    {
        $t = $this->getRoutes();
        if ($this->api->connected) {
            foreach ($t as $f)
                if (strpos($f["gateway"], $inteface) !== false)
                    return true;
            return false;
        } else
            return false;

    }

    public function getNats()
    {
        $this->connect();
        if ($this->api->connected) {
            return $this->api->comm("/ip/firewall/nat/print");

        }
        return false;
    }

    public function hasNat($inteface)
    {
        $t = $this->getNats();
        if ($this->api->connected) {
            foreach ($t as $f)
                if (array_key_exists("out-interface", $f))
                    if (strpos($f["out-interface"], $inteface) !== false)
                        return true;
            return false;
        } else
            return false;

    }

    public function getFirewallFilter()
    {
        $this->connect();
        if ($this->api->connected) {
            return $this->api->comm("/ip/firewall/filter/print");

        }
        return false;
    }

    public function hasFirewallFilter($interface)
    {
        $t = $this->getFirewallFilter();
        if ($this->api->connected) {
            foreach ($t as $f)
                if ($f["src-address-list"] == $interface)
                    return true;
            return false;
        } else
            return false;

    }

    public function updateUserConfig(SecurityUser $usuario)
    {
        start:
        $intefaz = $usuario->getInterface();
        $count = str_replace("wlan", "", $intefaz);

        $this->connect();
        $txt = array();
        $etecsa_ip = $this->configs["dhcp_server"];

        if ($this->api->connected) {
            if (!$this->hasWlan($intefaz)) {
                $mac = $this->generateMac();
                $txt [] = array("url" => '/interface/wireless/add', "params" => array("disabled" => "no", "keepalive-frames" => "disabled", "mac-address" => $mac, "master-interface" => "wlan1", "mode" => "station", "multicast-buffering" => "disabled", "name" => $usuario->getInterface(), 'ssid' => "WIFI_ETECSA", "wds-cost-range" => "0", "wds-default-cost" => "0", "wps-mode" => "disabled"));
            }
            $address = $this->getDhcpItem($usuario);
            if ($address == null)
                $txt [] = array("url" => '/ip/dhcp-client/add', "params" => array("add-default-route" => "yes", "dhcp-options" => "hostname,clientid", "disabled" => "no", 'interface' => $usuario->getInterface()));

            $firewall_address = $this->getFirewallAddress();


            for ($i = 0; $i < count($firewall_address); $i++) {
                $f = $firewall_address[$i];
                if (strpos($f["list"], "salida" . $count) !== false) {

                    $txt [] = array("url" => '/ip/firewall/address-list/remove', "params" => array(".id" => $f[".id"]));

                }
            }

            $ac = $usuario->getAccountType();
            if ($ac != null)
                $ac = $ac->getName();
            if ($ac == "Compartido") {
                $ips = $this->container->get("doctrine.orm.entity_manager")->getRepository("QbaBitNautaBundle:NautaUserIp")->getIpFromWlan($intefaz);

                foreach ($ips as $ip) {
                    if (!$this->hasFirewallAddress($ip->getIp()))
                        $txt [] = array("url" => '/ip/firewall/address-list/add', "params" => array("address" => $ip->getIp(), 'comment' => $ip->getUser()->getUsername(), 'list' => "salida" . $count));
                }

            } else

                foreach ($usuario->getIp() as $ip) {
                    if (!$this->hasFirewallAddress($ip->getIp()))
                        $txt [] = array("url" => '/ip/firewall/address-list/add', "params" => array("address" => $ip->getIp(), 'comment' => $ip->getUser()->getUsername(), 'list' => "salida" . $count));
                }
            if (!$this->hasFirewallMangle("salida" . $count))
                $txt [] = array("url" => '/ip/firewall/mangle/add', "params" => array("action" => "mark-routing", "chain" => "prerouting", "comment" => "salida" . $count, "new-routing-mark" => "salida" . $count, 'src-address-list' => 'salida' . $count));
            if (!$this->hasRoute($usuario->getInterface()))
                $txt [] = array("url" => '/ip/route/add', "params" => array("distance" => 1, "gateway" => $etecsa_ip . '%' . $intefaz, 'routing-mark' => 'salida' . $count));
            if (!$this->hasNat($usuario->getInterface()))
                $txt [] = array("url" => '/ip/firewall/nat/add', "params" => array("chain" => "srcnat", "out-interface" => "wlan" . $count, "src-address-list" => "salida" . $count, "action" => "masquerade"));
            if (!$this->hasFirewallFilter("salida" . $count))
                $txt [] = array("url" => '/ip/firewall/filter/add', "params" => array("action" => "accept", "chain" => "forward", "in-interface" => "bridge1", "src-address-list" => "salida" . $count));


            foreach ($txt as $t)
                $this->api->comm($t["url"], $t["params"]);

        } else
            return false;
    }

    public function removeUserConfig(SecurityUser $usuario)
    {

        $intefaz = $usuario->getInterface();
        $count = str_replace("wlan", "", $intefaz);
        $this->connect();
        $txt = array();
        $etecsa_ip = $this->configs["dhcp_server"];

        if ($this->api->connected) {

            $delete = $usuario->getAccountType() == null;
            if (!$delete) {
                $delete = $usuario->getAccountType()->getName() != "Compartido";
                if (!$delete) {
                    $ips = $this->container->get("doctrine.orm.entity_manager")->getRepository("QbaBitNautaBundle:NautaUserIp")->getIpFromWlan($intefaz);

                    $delete = (count($ips) == $usuario->getIp()->count());

                }


            }

            if ($delete) {

                $firewall_filter = $this->getFirewallFilter();

                for ($i = 0; $i < count($firewall_filter); $i++) {


                    $f = $firewall_filter[$i];

                    if ($f["src-address-list"]== "salida" . $count) {
                        $txt [] = array("url" => '/ip/firewall/filter/remove', "params" => array(".id" => $f[".id"], ));

                    }
                }
                $nat = $this->getNats();
                for ($i = 0; $i < count($nat); $i++) {
                    $f = $nat[$i];

                    if (array_key_exists("out-interface", $f))
                    if ($f["out-interface"]== "wlan" . $count) {
                        $txt [] = array("url" => '/ip/firewall/nat/remove', "params" => array(".id" => $f[".id"], ));

                    }
                }
                $route = $this->getRoutes();
                for ($i = 0; $i < count($route); $i++) {
                    $f = $route[$i];

                    if (strpos($f["gateway"], "%wlan" . $count) !== false) {
                        $txt [] = array("url" => '/ip/route/remove', "params" => array(".id" => $f[".id"], ));

                    }
                }

                $firewall_mangle = $this->getFirewallMangle();

                for ($i = 0; $i < count($firewall_mangle); $i++) {
                    $f = $firewall_mangle[$i];
                    if ($f["src-address-list"]== "salida" . $count)  {
                        $txt [] = array("url" => '/ip/firewall/mangle/remove', "params" => array(".id" => $f[".id"], ));


                    }
                }
            }
            $firewall_address =$this->getFirewallAddress();



            for ($i = 0; $i < count($firewall_address); $i++) {
                $f = $firewall_address[$i];
                if(array_key_exists("comment",$f))
                if ($f["comment"]== $usuario->getUsername()) {
                    $txt [] = array("url" => '/ip/firewall/address-list/remove', "params" => array(".id" => $f[".id"], ));


                }
            }
            if ($delete) {
                $dhcp =$this->getDhcpItem($usuario);

                if ($dhcp!=null) {
                    $txt [] = array("url" => '/ip/dhcp-client/remove', "params" => array(".id" =>$dhcp[".id"], ));



                }
                $txt [] = array("url" => '/interface/wireless/remove', "params" => array(".id" =>$usuario->getInterface(), ));


            }

            foreach ($txt as $t)
                $this->api->comm($t["url"], $t["params"]);
        }
    }

    protected function hasMac($mac)
    {
        $macs = $this->getWlanMacs();

        foreach ($macs as $k => $v)
            if ($v == $mac)
                return true;
        return false;


    }

    public function generateMac()
    {


        generate:
        $t = "00:";
        for ($i = 0; $i < 5; $i++) {
            $t .= sprintf("%02X", random_int(0, 255));
            if ($i < 4)
                $t .= ":";
        }

        if ($this->hasMac($t))
            goto generate;

        return $t;


    }

    protected function hasWlan($wlan)
    {
        $macs = $this->getWlanMacs();
        return array_key_exists($wlan, $macs);
    }


    protected function getWlanMacs($enabled = false, $check_count = false, $wlan1 = false)
    {
        $this->connect();
        if ($this->api->connected) {
            $s = $this->api->comm("/interface/wireless/print");

            $wlans = array();
            foreach ($s as $f) {
                $name = $f["name"];
                $mac = $f["mac-address"];
                $insert = true;
                if ($enabled == true)
                    $insert = $f["disabled"] === "false";
                if ($insert)
                    if ($check_count) {
                        $t = $this->container->get("doctrine.orm.entity_manager")->getRepository("QbaBitSecurityBundle:SecurityUser")->findOneBy(array("interface" => $name));
                        if ($t != null)
                            $wlans[$name] = $wlan1 == true ? $t->getCheckCountInternet() : $t->getCheckCount();
                    } else

                        $wlans[$name] = $mac;

            }
            return $wlans;

        }
        return false;

    }

    public function disableIfNotPayed(OutputInterface $output=null)
    {
        $this->connect();
        if($this->api->connected)
        {
            $em = $this->get("doctrine.orm.default_entity_manager");
            $repo = $em->getRepository("QbaBitNautaBundle:NautaBilling");
            $payments = $repo->getGraphQuery(array("missing_month" => true));
            foreach ($payments as $payment)
            {
                $user = $em->getRepository("QbaBitSecurityBundle:SecurityUser")->find($payment["id"]);
                $this->disablenterface($user->getInterface());
            }
            $output->writeln("Se deshabilitaron correctamente las interfaces");
        }
        else

            $output->writeln("Existen problemas de conexión con el Mikrotik");

    }

}