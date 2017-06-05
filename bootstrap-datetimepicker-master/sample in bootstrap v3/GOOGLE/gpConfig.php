<?php
session_start();

//Include Google client library 
include_once 'src/Google_Client.php';
include_once 'src/contrib/Google_Oauth2Service.php';

/*
 * Configuration and setup Google API
 */
$clientId = '122212578964-te2ffrku82a7lkb0t59v55pmlncltup6.apps.googleusercontent.com';
$clientSecret = 'uT7rAvkSiZElIV-bluSIHSz-';
$redirectURL = 'http://localhost/GITHUB/GitHub-and-wamp/bootstrap-datetimepicker-master/sample%20in%20bootstrap%20v3/GOOGLE/index.php';

//Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('Login to CodexWorld.com');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>