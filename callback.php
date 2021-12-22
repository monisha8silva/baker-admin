<?php

session_start();
<span class="crayon-k ">require_once</span> <span class="crayon-s">'insert_db.php'</span><span class="crayon-sy">;</span>
require_once( 'Facebook/autoload.php' );

$fb = new Facebook\Facebook([
  'app_id' => 'Put App ID Here',
  'app_secret' => 'Put Secret Key Here',
  'default_graph_version' => 'v2.5',
]);  
  
$helper = $fb->getRedirectLoginHelper();  
  
try 
{  
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


try 
{
  // Get the Facebook\GraphNodes\GraphUser object for the current user.
  $response = $fb->get('/me?fields=id,name,email,first_name,last_name', $accessToken->getValue());

} catch(Facebook\Exceptions\FacebookResponseException $e) {
  // When Graph returns an error
  echo 'ERROR: Graph ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  // When validation fails or other local issues
  echo 'ERROR: validation fails ' . $e->getMessage();
  exit;
}

$me = $response->getGraphUser();

echo "Full Name: ".$me->getProperty('name')."<br>";
echo "Email: ".$me->getProperty('email')."<br>";
echo "Facebook ID: <a href='https://www.facebook.com/".$me->getProperty('id')."' target='_blank'>".$me->getProperty

('id')."</a>";

$_SESSION['fb_id']     = $me->getProperty('id');
    $_SESSION['user_name'] = $me->getProperty('name');
    $_SESSION['email'] = $me->getProperty('email');
    
    checkuser($conn, $_SESSION['fb_id'], $_SESSION['user_name'], $_SESSION['email']);
    
    /* ---- Redirection location after session ----*/
    header("Location: index.php");

?>