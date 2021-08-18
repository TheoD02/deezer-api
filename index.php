<?php

use App\Helper\DeezerApi;

require 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$deezerApi = new DeezerApi();

/*$deezerApi->setPermissions(DeezerApi::ALL_ACCESS);
echo $deezerApi->generateAuthentificationUrl();*/

$artist = $deezerApi->getInfos();
dd($artist->getAds()->getBigNativeAdsHome()->getAndroid()->isEnabled());