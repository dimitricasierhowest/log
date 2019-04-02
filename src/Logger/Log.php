<?php
/**
 * Created by PhpStorm.
 * User: dimitri.casier
 * Date: 29/03/2019
 * Time: 13:28
 */
namespace Dimitricasierhowest\Log\Logger;

use Carbon\Carbon;

abstract class Log
{
    protected function info($data){
        
        return [
            Carbon::now()->toDateTimeString(),
            $data
        ];
    }
}