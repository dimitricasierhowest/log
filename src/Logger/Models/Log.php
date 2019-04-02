<?php
/**
 * Created by PhpStorm.
 * User: dimitri.casier
 * Date: 2/04/2019
 * Time: 11:30
 */

namespace Dimitricasierhowest\Log\Logger\Models;


use Illuminate\Database\Eloquent\Model;

class Log  extends Model
{
    protected $guarded = [];
    protected $casts = [
        'message' => 'array'
    ];
}