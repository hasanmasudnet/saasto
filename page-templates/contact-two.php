<?php 

/**
*
* Template Name: Contact v2
*
* @package: wordpress
* @subpackage: saasto
* @since  1.0.0
* @link  https://developer.wordpress.org/themes/template-files-section/page-template-files/
*/


// Only process POST requests.
$res_message = '';
$res_statuc = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {


   // Get the form fields and remove whitespace.
   $name = strip_tags(trim($_POST["f_name"]));
   $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);  
   $message = trim($_POST["message"]);

   // Check that data was sent to the mailer.
   if ( empty($name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
      // Set a 400 (bad request) response code and exit.
      http_response_code(400);
      $res_message =  "Please complete the form and try again.";
      $res_statuc = 'error';
   }else{
      // Set the recipient email address.
      // FIXME: Update this to your desired email address.
      $recipient = "wprealizer@gmail.com";

      //Set the email subject.
      $subject = "New contact from $name";

      // Build the email content.
      $email_content = "Name: $name\n";  
      $email_content .= "Email: $email\n\n"; 
      $email_content .= "Message:\n$message\n";

      // Build the email headers.
      $email_headers = "From: $name <$email>";

      // Send the email.
      if (mail($recipient,$subject, $email_content)) {
         // Set a 200 (okay) response code.
         http_response_code(200);
         $res_message = "Thank You! Your message has been sent.";
         $res_statuc = 'success';
      } else {
         // Set a 500 (internal server error) response code.
         http_response_code(500);
         $res_message = "Oops! Something went wrong and we couldn't send your message.";
         $res_statuc = 'error';
      }
   }

}
 get_header( ); ?>

<div class="contact-one-area pt-xxl section-gap-bottom-y-1">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="w-feature-content-title text-center">
               <h3 class="text-bright-gray">Contact Us</h3>
               <p class="text-purple-haze body-disply-1 pt-3">Our co-founders Tuomo Riekki and Kristo Ovaska are serial entrepreneurs who</p>
            </div>
         </div>
      </div>
      <div class="row mt-4 align-items-center gy-4">
         <div class="col-lg-4 col-md-6">
            <div class="contact-vector-box text-center">
               <img src="<?php echo esc_url(get_template_directory_uri())?>/assets/img/contact-vector.png" alt="<?php echo esc_attr('saasto', 'saasto'); ?>">
               <h2>E-mail Address</h2>
               <a href="mailto:yourname@gmail.com">yourname@gmail.com</a>
            </div>
         </div>
         <div class="col-lg-4 col-md-6">
            <div class="contact-vector-box text-center">
               <img  src="<?php echo esc_url(get_template_directory_uri())?>/assets/img/contact-vector.png" alt="<?php echo esc_attr('saasto', 'saasto'); ?>">
               <h2>Support Number</h2>
               <a href="tel:021000000">+021-000-000</a>
               <div class="contact-vector-btn-wrap">
                  <a class="contact-vector-btn" href="tel:021000000">Call Now <i class="bi bi-arrow-right"></i></a>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6">
            <div class="contact-vector-box text-center">
               <img  src="<?php echo esc_url(get_template_directory_uri())?>/assets/img/contact-vector.png" alt="<?php echo esc_attr('saasto', 'saasto'); ?>">
               <h2>Head Office</h2>
               <a href="#">123 St Anytown, USA</a>
            </div>
         </div>
      </div>
      <div class="row section-gap-xl-top">
         <div class="col-lg-12">
            <div class="w-feature-content-title">
               <h3 class="text-bright-gray">Let’s get in touch!</h3>
               <p class="text-purple-haze body-disply-1 pt-3">Our co-founders Tuomo Riekki and Kristo Ovaska are advanced marketer</p>
            </div>
            <div class="contact-form-wrap-two  mt-4">
               <form action="<?php echo the_permalink( ); ?>" method="POST">
                  <div class="row">
                     <div class="col-lg-6">
                        <input name="f_name" type="text" placeholder="First name">
                     </div>
                     <div class="col-lg-6">
                        <input  name="l_name" type="text" placeholder="Last name">
                     </div>
                     <div class="col-lg-6">
                        <input  name="phone" type="tel" placeholder="Phone">
                     </div>
                     <div class="col-lg-6">
                        <input name="email" type="email" placeholder="E-mail">
                     </div>
                     <div class="col-lg-12">
                        <textarea name="message" cols="30" rows="4" placeholder="Your Message"></textarea>
                     </div>
                     <div class="col-lg-12">
                        <button class="border-0 d-inline-block btn-fill-rounded" type="submit">Send Message</button>
                     </div>
                  </div>
               </form>

               <?php if( !empty($res_message) ): ?>
                  <?php if($res_statuc == 'success'): ?>
                     <span class="form_response success"><?php echo $res_message; ?></span>
                  <?php else: ?>
                     <span class="form_response error"><?php echo $res_message; ?></span>
                  <?php endif ?>
               <?php endif ?>

            </div>
         </div>
      </div>
   </div>
</div>

<?php get_footer( ); ?>