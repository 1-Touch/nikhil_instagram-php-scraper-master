<?php
require __DIR__ . '/../vendor/autoload.php';


use Phpfastcache\Helper\Psr16Adapter;

$instagram = \InstagramScraper\Instagram::withCredentials('vikaspatel2249', 'Shrivastav@1', new Psr16Adapter('Files'));



//$instagram = \InstagramScraper\Instagram::withCredentials('username', 'password', '/path/to/cache/folder');
$instagram->login();

$stories = $instagram->getStories();
print_r($stories);