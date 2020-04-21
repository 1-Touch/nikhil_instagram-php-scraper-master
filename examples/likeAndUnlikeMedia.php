<?php

use InstagramScraper\Exception\InstagramException;

require __DIR__ . '/../vendor/autoload.php';


use Phpfastcache\Helper\Psr16Adapter;

$instagram = \InstagramScraper\Instagram::withCredentials('vikaspatel2249', 'Shrivastav@1', new Psr16Adapter('Files'));


//$instagram = \InstagramScraper\Instagram::withCredentials('username', 'password', '/path/to/cache/folder');
$instagram->login();

try {
    $instagram->like('1663256735663694497');
    $instagram->unlike('1663256735663694497');
} catch (InstagramException $ex) {
    echo $ex->getMessage();
}
