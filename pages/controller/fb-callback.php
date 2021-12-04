<?php
    if(!session_id()) {
        session_start();
    }
    include '../entity/user.php';
    include '../common/common.php';

    $id_code=$_SESSION["codeSession"];
    $users = new User();
    if($users->checkLogin($id_code)!=null){
        if($users->checkLogin($id_code)->id_role == "admin" || $users->checkLogin($id_code)->id_role == "customer"){
            if ($users->checkLogin($id_code)->id_role == "customer") {
                header("location:../customer/home.php");
                exit(0);
            } else if ($users->checkLogin($id_code)->id_role == "admin") {
                header("location:../admin/home.php");
                exit(0);
            }
        }else $_SESSION["codeSession"] = null;
    }
    

    require_once '../src/Facebook/autoload.php';
    $fb = new Facebook\Facebook([
    'app_id' => '393692505877281', // Replace {app-id} with your app id
    'app_secret' => '76731419c560906c89e49ecee89f0dca',
    'default_graph_version' => 'v2.8',
    ]);
  
    $helper = $fb->getRedirectLoginHelper();
    
    try {
        $accessToken = $helper->getAccessToken();
    } catch(Facebook\Exceptions\FacebookResponseException $e) {
        // When Graph returns an error
        echo 'Graph returned an error: ' . $e->getMessage();
        exit;
    } catch(Facebook\Exceptions\FacebookSDKException $e) {
        // When validation fails or other local issues
        echo 'Facebook SDK returned an error: ' . $e->getMessage();
        exit;
    }
    
    if (! isset($accessToken)) {
        if ($helper->getError()) {
        header('HTTP/1.0 401 Unauthorized');
        echo "Error: " . $helper->getError() . "\n";
        echo "Error Code: " . $helper->getErrorCode() . "\n";
        echo "Error Reason: " . $helper->getErrorReason() . "\n";
        echo "Error Description: " . $helper->getErrorDescription() . "\n";
        } else {
        header('HTTP/1.0 400 Bad Request');
        echo 'Bad request';
        }
        exit;
    }
    
    // Logged in
    // echo '<h3>Access Token</h3>';
    var_dump($accessToken->getValue());
    
    // The OAuth 2.0 client handler helps us manage access tokens
    $oAuth2Client = $fb->getOAuth2Client();
    $res 	= 	$fb->get('/me',$accessToken->getValue());
    $fbUser	=	$res->getDecodedBody();
    $user = new User();
    
    $user->id_user = getNewFBId("user".md5(";fb_id=".$fbUser['id']));
    $user->id_role = $user->getRole("customer");
    $user->name = $fbUser['name'];
    $codeSession = md5("Session={id_user:".$user->id_user.",client_ip:".get_client_ip().",id_time:".getNewId("user")."}");
    $user->sex = null;
    $user->email = null;
    $user->phone = null;
    $user->birthday = null;
    $user->username = $user->id_user;
    $user->password = $fbUser['id'];
    $user->codeSession = $codeSession;
    $user->loginWithFB($user);
    $_SESSION["codeSession"] = $codeSession; 
    header('Location: ./checkLogin.php');


?>