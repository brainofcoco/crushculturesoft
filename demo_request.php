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
if(isset($_POST['submit'])) {

    echo $feedback = "We got your message contact you soon!";
}
              ?>
            <div class="col-md-12">
              <div class="comment-wrap style1">
                <h3>Try it for Free </h3>
                <p>Book a crush culture demo session, a personal login credential will be sent to and will be valid for 24hrs, feel free to also contact us</p>

                     
                     <style>#wrapper{width:100%;height:500px;} iframe{border-radius:0 !important;}</style> 
                    
                     <div class="comment-form" style="width:auto; height:auto;">
                     <div id="wrapper" data-tf-widget="QBu8kyol" data-tf-inline-on-mobile >

                    </div> <script src="//embed.typeform.com/next/embed.js"></script> 

                     </div>
                        
                <!-- <form class="comment-form" method="post" action="upload.php">
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
                </form> -->
              </div> <!-- /.comment-wrap -->

            

            </div> <!-- /.col-md-12 -->
          </div> <!-- /.row -->
        </div> <!-- /.container -->
      </section><!-- /.blog-posts -->

    </div><!-- /.page-wrap -->
<?php
include('./footer.php');
?>