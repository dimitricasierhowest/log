<?php
/**
 * Created by PhpStorm.
 * User: dimitri.casier
 * Date: 22/03/2019
 * Time: 14:46
 */

namespace Dimitricasierhowest\Log\Logger;


class ScreenLog extends Log implements LogInterface
{
    public function log($data){
        var_dump($this->log($data));
    }
}