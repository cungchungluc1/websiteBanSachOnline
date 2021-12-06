<?php 
    if(!session_id()) {
        session_start();
    }
    require_once './define.php';
    require_once '../src/Google/vendor/autoload.php';
    
    include '../entity/user.php';
    include '../common/common.php';
    
    $client = new Google_Client();
    $client->setClientId(GOOGLE_APP_ID);
    $client->setClientSecret(GOOGLE_APP_SECRET);
    $client->setRedirectUri(GOOGLE_APP_CALLBACK_URL);
    $client->addScope("email");
    $client->addScope("profile");
    if (isset($_GET['code'])) {
        $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
       // print_r($token);
        $client->setAccessToken($token['access_token']);
 
        // get profile info
        $google_oauth = new Google_Service_Oauth2($client);
        $google_account_info = $google_oauth->userinfo->get();
        $email =  $google_account_info->email;
        $name =  $google_account_info->name;
        $id =  $google_account_info->id;
        $user = new User();
    
        $user->id_user = getNewFBId("user".md5(";gg_id=".$id));
        $user->id_role = $user->getRole("customer");
        $user->name = $name;
        $codeSession = md5("Session={id_user:".$user->id_user.",client_ip:".get_client_ip().",id_time:".getNewId("user")."}");
        $user->sex = null;
        $user->email = $email;
        $user->phone = null;
        $user->birthday = null;
        $user->username = $user->id_user;
        $user->password = $id;
        $user->codeSession = $codeSession;
        $user->loginWithFB($user);
        $_SESSION["codeSession"] = $codeSession; 
        header('Location: ./checkLogin.php');
    }

?>