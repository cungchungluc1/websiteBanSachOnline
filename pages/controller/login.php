<?php

require_once '../src/Facebook/autoload.php';
session_start();

$fb = new Facebook\Facebook([
  'app_id' => '393692505877281',
  'app_secret' => '76731419c560906c89e49ecee89f0dca',
  'default_graph_version' => 'v2.8',
  'allowSignedRequest' => false 
  ]);

$helper = $fb->getRedirectLoginHelper();
$permissions = array(
  'email'
);
$loginUrl = $helper->getLoginUrl('http://localhost:18080/websitebansachonline/pages/controller/fb-callback.php', $permissions);

echo '<a href="' . $loginUrl . '">Log in with Facebook!</a>';?>