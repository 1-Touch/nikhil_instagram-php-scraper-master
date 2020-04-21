<?php
require __DIR__ . '/../vendor/autoload.php';



use Phpfastcache\Helper\Psr16Adapter;

$instagram = \InstagramScraper\Instagram::withCredentials('vikaspatel2249', 'Shrivastav@1', new Psr16Adapter('Files'));


//$instagram = \InstagramScraper\Instagram::withCredentials('username', 'password', '/path/to/cache/folder');
$instagram->login();

// Location id from facebook
$location = $instagram->getLocationById(1);

echo "Location info: \n";
echo "Id: {$location->getId()}\n";
echo "Name: {$location->getName()}\n";
echo "Latitude: {$location->getLat()}\n";
echo "Longitude: {$location->getLng()}\n";
echo "Slug: {$location->getSlug()}\n";
echo "Is public page available: {$location->getHasPublicPage()}\n";

