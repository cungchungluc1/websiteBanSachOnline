<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login With Facebook</title>
</head>

<body>
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

echo '<script>window.location.replace("'.$loginUrl.'")</script>';
?>
</body>

</html>