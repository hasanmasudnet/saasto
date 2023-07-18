<?php 

/**
*
* Template Name: Contact v1
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
      <div class="row justify-content-between">
         <div class="col-lg-5">
            <div class="w-feature-content-title">
               <h3 class="text-bright-gray">Let’s get in touch!</h3>
               <p class="text-purple-haze body-disply-1 pt-3">Our co-founders Tuomo Riekki and Kristo Ovaska are serial entrepreneurs who, back in 2013, noticed how advanced marketer</p>
            </div>
            <div class="contact-address-wrap mt-5">
               <div class="single-contact-address d-flex align-items-center">
                  <div class="contact-address-icon">
                     <i class="bi bi-geo-alt"></i>
                  </div>
                  <div class="contact-address-info">
                     <h2>Head Office</h2>
                     <p>123 Maint St Anytown, USA</p>
                  </div>
               </div>
               <div class="single-contact-address d-flex align-items-center">
                  <div class="contact-address-icon">
                     <i class="bi bi-telephone"></i>
                  </div>
                  <div class="contact-address-info">
                     <h2>Call Us</h2>
                     <p><a href="tel:928-456-1234">928-456-1234</a></p>
                  </div>
               </div>
               <div class="single-contact-address d-flex align-items-center">
                  <div class="contact-address-icon">
                     <i class="bi bi-envelope"></i>
                  </div>
                  <div class="contact-address-info">
                     <h2>E-Mail Us</h2>
                     <p><a href="mailto:yourmail@gmail.com">yourmail@gmail.com</a></p>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-6">
            <div class="contact-form-wrap mt-5 mt-lg-0">
               <form action="<?php echo the_permalink( ); ?>" method="POST">
                  <div class="row">
                     <div class="col-lg-12">
                        <input name="f_name" type="text" placeholder="First name">
                     </div>
                     <div class="col-lg-12">
                        <input name="l_name" type="text" placeholder="Last name">
                     </div>
                     <div class="col-lg-12">
                        <input name="phone" type="tel" placeholder="Phone">
                     </div>
                     <div class="col-lg-12">
                        <input name="email" type="email" placeholder="E-mail">
                     </div>
                     <div class="col-lg-12">
                        <textarea  name="message" cols="30" rows="4" placeholder="Your Message"></textarea>
                     </div>
                     <div class="col-lg-12">
                        <button class="border-0 w-100 d-inline-block" type="submit">Send Message</button>
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