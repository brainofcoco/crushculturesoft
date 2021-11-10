<?php
require 'vendor/autoload.php';

// Without Composer (and instead of "require 'vendor/autoload.php'"):
// require('./vendor/sendpulse/rest-api/src/ApiInterface');
// require("./vendor/sendpulse/rest-api/src/ApiClient.php");
// require("./vendor/sendpulse/rest-api/src/Storage/TokenStorageInterface.php");
// require("./vendor/sendpulse/rest-api/src/Storage/FileStorage.php");
// require("./vendor/sendpulse/rest-api/src/Storage/SessionStorage.php");
// require("./vendor/sendpulse/rest-api/src/Storage/MemcachedStorage.php");
// require("./vendor/sendpulse/rest-api/src/Storage/MemcacheStorage.php");

use vendor\Sendpulse\RestApi\ApiClient;
use vendor\Sendpulse\RestApi\Storage\FileStorage;

$me_text="";
include('./header.php');

$feedback = "";
?>
    <div class="page-wrap home-2">
      <section class="image-title">  
        <!-- <img src="images/page-title-1.jpg" alt="image" class="mb-min300"> -->
      </section><!-- /.image-title --> 
          
      <section class="blog-posts single single-s1">
        <div class="container">
          <div class="row">
              <?php
              // email
if(isset($_POST['submit'])) {
    // run email
// API credentials from https://login.sendpulse.com/settings/#api
define('API_USER_ID', 'ce0840a6c1a6396ccdcaaf7e0de44306');
define('API_SECRET', '65187e9b948d8cb236b92c6665172587');
define('PATH_TO_ATTACH_FILE', __FILE__);

$SPApiClient = new ApiClient(API_USER_ID, API_SECRET, new FileStorage());

/*
 * Example: Send mail using SMTP
 */
$to = "erpdemo@thecrushculture.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['name'];
    $phone = $_POST['phone'];
    $website = $_POST['website'];
    $company = addslashes($_POST['company']);
    $country = addslashes($_POST['country']);
    $address = addslashes($_POST['address']);
    $post_comment = addslashes($_POST['post-comment']);



$email = array(
    'subject' => '<p>Hello!</p>',
    'template' => array(
        'id' => 'DemoBooking',
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
    $feedback = "We got your message contact you soon!";
}
              ?>
            <div class="col-md-12">
              <div class="comment-wrap style1">
                <h3>Try it for Free </h3>
                <p>Book a crush culture demo session, a personal login credential will be sent to and will be valid for 24hrs, feel free to also contact us</p>
                <form class="comment-form" method="post">
                  <input type="text" name="name" placeholder="Full name" required="">
                  <input type="email" name="email"  placeholder="Email" required="">
                  <input type="text" name="phone" placeholder="Phone">
                  <input type="text" name="company" placeholder="Company Name">
                  <input type="text" name="website" placeholder="Website">
                  <input type="text" name="country" placeholder="Country">
                  <input type="text" name="address" placeholder="Address">
                  <p style="margin-bottom:30px;"></p>
                  <textarea placeholder="Will you like us to know anything?" id="comment"></textarea>
                  <input type="submit" name="post-comment" class=" btn-submit-comment" value="Book Demo">
                  <h3 style="color:green;"><?php echo $feedback; ?></h3>
                </form>
              </div> <!-- /.comment-wrap -->

            

            </div> <!-- /.col-md-12 -->
          </div> <!-- /.row -->
        </div> <!-- /.container -->
      </section><!-- /.blog-posts -->

    </div><!-- /.page-wrap -->
<?php
include('./footer.php');
?>