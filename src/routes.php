<?php

\Route::get('/log-demo', function(\Dimitricasierhowest\Log\Logger\LogInterface $logger){
    $logger->log('mij log data');
   return 'log demo!';
});