<?php
require 'vendor/autoload.php';

// Without Composer (and instead of "require 'vendor/autoload.php'"):
// require("vendor/sendpulse/rest-api/src/ApiInterface");
// require("./vendor/sendpulse/rest-api/src/ApiClient.php");
// require("./vendor/sendpulse/rest-api/src/Storage/TokenStorageInterface.php");
// require("./vendor/sendpulse/rest-api/src/Storage/FileStorage.php");
// require("./vendor/sendpulse/rest-api/src/Storage/SessionStorage.php");
// require("./vendor/sendpulse/rest-api/src/Storage/MemcachedStorage.php");
// require("./vendor/sendpulse/rest-api/src/Storage/MemcacheStorage.php");

use Sendpulse\RestApi\ApiClient;
use Sendpulse\RestApi\Storage\FileStorage;
   // run email
// API credentials from https://login.sendpulse.com/settings/#api
define('API_USER_ID', 'ce0840a6c1a6396ccdcaaf7e0de44306');
define('API_SECRET', '65187e9b948d8cb236b92c6665172587');
define('PATH_TO_ATTACH_FILE', __FILE__);

$SPApiClient = new ApiClient(API_USER_ID, API_SECRET, new FileStorage());
 
$to = "samuel@thecrushculture.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['name'];
    $phone = $_POST['phone'];
    $website = $_POST['website'];
    $company = addslashes($_POST['company']);
    $country = addslashes($_POST['country']);
    $address = addslashes($_POST['address']);
    $post_comment = addslashes($_POST['post-comment']);



$email = array(
    'subject' => '<p>Crush Culture ERP/CRM</p>',
    'template' => array(
        'id' => '8090',
        'variables' => array(
          'name' => $first_name,
          'phone' => $phone,
          'company' => $company,
          'country' => $country,
          'address' => $address,
          'post_comment' => $post_comment,
          'current_year' => date('Y')
        )
    ),
    'from' => array(
        'name' => 'Crush Culture ERP',
        'email' => $to,
    ),
    'to' => array(
        array(
            'name' => $first_name,
            'email' =>  $from,
        ),
    ),
    'bcc' => array(
        array(
            'name' => 'Oluwaseun Samuel',
            'email' => 'sunnyboye2015@gmail.com',
        ),
    ),
    'attachments' => array(
        'file.txt' => file_get_contents(PATH_TO_ATTACH_FILE),
    ),
);

var_dump($SPApiClient->smtpSendMail($email));
/*
 * Example: Send mail using SMTP
 */
?>