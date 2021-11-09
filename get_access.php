<?php
include "defines.php";

require_once __DIR__ . '/vendor/autoload.php';

$creds = [
    'app_id' => FACEBOOK_APP_ID,
    'app_secret' => FACEBOOK_APP_SECRET,
    'default_graph_version' => 'v1',
    'persistent_data_handler' => 'session'
];

$facebook = new \Facebook\Facebook($creds);

$helper = $facebook->getRedirectLoginHelper();

$oAuth2Client = $facebook->getOAuth2Client();

if(isset($_GET['code'])) {

} else {
    $permissions = ['public_profile', 'instagram_basic', 'page_show_list'];
    $loginUrl = $helper->getLoginUrl(FACEBOOK_REDIRECT_URI, $permissions);

    echo '<a href="'.$loginUrl.'">login by facebook</a>';
}