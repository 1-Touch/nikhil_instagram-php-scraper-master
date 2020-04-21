<?php
require __DIR__ . '/../vendor/autoload.php';

use Phpfastcache\Helper\Psr16Adapter;

$instagram = \InstagramScraper\Instagram::withCredentials('vikaspatel2249', 'Shrivastav@1', new Psr16Adapter('Files'));

//$instagram = \InstagramScraper\Instagram::withCredentials('username', 'password', 'path/to/cache/folder/');
$instagram->login();


$accounts = $instagram->searchAccountsByUsername('raiym');

$account = $accounts[0];
// Following fields are available in this request
echo "Account info:\n";
echo "Username: {$account->getUsername()}";
echo "Full name: {$account->getFullName()}";
echo "Profile pic url: {$account->getProfilePicUrl()}";

