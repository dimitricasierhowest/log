<?php
/**
 * Created by PhpStorm.
 * User: dimitri.casier
 * Date: 2/04/2019
 * Time: 11:31
 */

namespace Dimitricasierhowest\Log\Logger;

use Dimitricasierhowest\Log\Logger\Models\Log;
use Dimitricasierhowest\Log\Logger\Log as BaseLog;

class DatabaseLog extends BaseLog implements  LogInterface
{
    public function log($data){

        Log::create([
           "message" => $this->info($data)
        ]);
    }
}
{

}