<?php
require __DIR__ . '/../vendor/autoload.php';


// getPaginateMedias() works with and without authentication


use Phpfastcache\Helper\Psr16Adapter;

$instagram = \InstagramScraper\Instagram::withCredentials('vikaspatel2249', 'Shrivastav@1', new Psr16Adapter('Files'));


//$instagram = \InstagramScraper\Instagram::withCredentials('username', 'password', '/path/to/cache/folder');
$instagram->login();

$result = $instagram->getPaginateMedias('kevin');
$medias = $result['medias'];
if ($result['hasNextPage'] === true) {
    $result = $instagram->getPaginateMedias('kevin', $result['maxId']);
    $medias = array_merge($medias, $result['medias']);
}

echo json_encode($medias);
