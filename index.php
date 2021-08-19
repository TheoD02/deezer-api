<?php

use App\Helper\DeezerApi;

require 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$deezerApi = new DeezerApi();

/*$deezerApi->setPermissions(DeezerApi::ALL_ACCESS);
echo $deezerApi->generateAuthentificationUrl();*/
$start_time = microtime(true);
$res        = [];
for ($i = 0; $i < 500; $i++)
{
    $res[] = ['date' => (new DateTime())->format('H:i:s'), 'infos' => $deezerApi->getInfos()];
}
$end_time = microtime(true);
$diff     = $end_time - $start_time;
echo 'Exec in ' . $diff;