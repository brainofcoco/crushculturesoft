<?php
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
if(isset($_POST['submit'])){
    $to = "erpdemo@thecrushculture.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['name'];
    $phone = $_POST['phone'];
    $subject = "Crush Culture ERP Demo";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $phone . " Company:" . "\n\n" . $_POST['company']
    . " Website:" . "\n\n" . $_POST['website']
    . " Country:" . "\n\n" . $_POST['country']
    . " Address:" . "\n\n" . $_POST['address']
    . " Message:" . "\n\n" . $_POST['post-comment']
    ;
    $message2 = "Here is a copy of your message " . $first_name . " " . $phone . " Company:" . "\n\n" . $_POST['company']
    . " Website:" . "\n\n" . $_POST['website']
    . " Country:" . "\n\n" . $_POST['country']
    . " Address:" . "\n\n" . $_POST['address']
    . " Message:" . "\n\n" . $_POST['post-comment']
    ;

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    $feedback = "We got your message contact you soon!";
    }
              ?>
            <div class="col-md-12">
              <div class="comment-wrap style1">
                <h3>Try it for Free </h3>
                <p>Book a crush culture demo session, a personal login credential will be sent to and will be valid for 24hrs, feel free to also contact us</p>
                <form class="comment-form" method="post" action="#">
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
                  <h3 style="color:green;"><?php $feedback; ?></h3>
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