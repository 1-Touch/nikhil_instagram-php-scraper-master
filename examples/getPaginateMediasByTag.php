<?php
require __DIR__ . '/../vendor/autoload.php';



use Phpfastcache\Helper\Psr16Adapter;

$instagram = \InstagramScraper\Instagram::withCredentials('vikaspatel2249', 'Shrivastav@1', new Psr16Adapter('Files'));



//$instagram = \InstagramScraper\Instagram::withCredentials('username', 'password', '/path/to/cache/folder');
$instagram->login();

$result = $instagram->getPaginateMediasByTag('zara');
$medias = $result['medias'];

if ($result['hasNextPage'] === true) {
    $result = $instagram->getPaginateMediasByTag('zara', $result['maxId']);
    $medias = array_merge($medias, $result['medias']);
}

echo json_encode($medias);