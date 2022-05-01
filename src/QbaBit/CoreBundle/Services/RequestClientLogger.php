<?php
/**
 * Created by PhpStorm.
 * User: Administrador
 * Date: 20/06/2017
 * Time: 21:30
 */

namespace QbaBit\CoreBundle\Services;


use Symfony\Component\Console\Output\OutputInterface;

class  RequestClientLogger
{

    /**
     * @var OutputInterface
     */
    private $console;

    private $ajax;
    public function init($ajax,OutputInterface $console = null)
    {
        $this->ajax = $ajax;
        $this->console = $console;
        if ($this->console == null) {
            header('Content-type: text/html; charset=utf-8');
            echo "<html><head></head><body></body></html>";
            // header('Content-Encoding: none; ');
            set_time_limit(0);
            ob_implicit_flush(true);
            try {
                ob_end_flush();
            } catch (\Exception $e) {

            }

            ob_start();
        }
    }

    public function flush()
    {
        if($this->console==null)
        ob_end_flush();
    }

    private $last = null;

    public function doLog($string, $current, $max, $id, $showPercent = true)
    {

        if ($this->ajax) {

            try {
                $s = '<script type="text/javascript">';

                $s .= 'parent.progressLog("' . ($string) . '","' . $current . '","' . $max . '","' . $id . '","' . ($showPercent == true ? "true" : "false") . '");';

                $s .= '</script>';

                echo $s;
                echo str_pad('', 4096) . "\n";

                if (ob_get_level() != 0)
                    ob_flush();
                flush();

            } catch (\Exception $e) {
            }
        } else


            if ($this->console == null) {

                try {


                    if ($showPercent)
                        $message = round($current * 100 / $max, 2) . "% - " . $string . " - " . $current . " de " . $max;
                    else
                        $message = $string;

                    echo "<div>" . $message . "</div>";
                    ob_flush();
                } catch (\Exception $e) {

                }

            } else {

                if ($showPercent)
                    $message = round($current * 100 / $max, 2) . "% - " . $string . " - " . $current . " de " . $max;
                else
                    $message = $string;
                $this->console->write($message, true);

            }

        $this->c++;

    }
    private $c = 0;

    public function Complete($params)
    {
        if($this->console==null)
        echo '<script>window.parent.PageAjax.refreshingServer.doComplete(' . $params . ');</script>';
    }

}