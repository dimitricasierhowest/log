<?php
/**
 * Created by PhpStorm.
 * User: dimitri.casier
 * Date: 22/03/2019
 * Time: 14:46
 */

namespace Dimitricasierhowest\Log\Logger;


use Illuminate\Support\Facades\Log;

class FileLog implements  LogInterface
{
    public function log($data){
        Log::info($data);
    }
}