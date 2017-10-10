<?php include "includes/header.php"; ?>
<?php include "includes/top-bar.php"; ?>
<?php include "includes/nav.php"; ?>

<?php
if($_POST['sendEmail'])
    {
    $recipient_email    = "umerfat@gmail.com"; //recepient
    $from_email         = "umerhurrah@kwiqpick.com"; //from email using site domain.
    $subject            = $_POST['cus_sub']; //email subject line
    $sender_name    = "Kwiqpick";
    $sender_email   = filter_var($_POST['cus_mail'], FILTER_SANITIZE_STRING); //recepient
    $sender_message = filter_var($_POST['mailBody'], FILTER_SANITIZE_STRING); //capture message
    $boundary = md5(uniqid(time()));
    $headers = "MIME-Version: 1.0\r\n"; 
    $headers .= "From: <".$from_email.">"."\r\n"; 
    $headers .= "Reply-To: <".$sender_email.">" . "\r\n";
    $headers .= "Content-Type: multipart/mixed; boundary = ".$boundary."\r\n\r\n"; 
    //message text
    $body = "--$boundary\r\n";
    $body .= "Content-Type: text/plain; charset=ISO-8859-1\r\n";
    $body .= "Content-Transfer-Encoding: base64\r\n\r\n"; 
    $body .= chunk_split(base64_encode($sender_message)); 
    //get file info

    $body .="Content-Transfer-Encoding: base64\r\n";
    $body .="X-Attachment-Id: ".rand(1000,99999)."\r\n\r\n";  
    //}
    // else{ //send plain email otherwise
    //    $headers = "From:".$from_email."\r\n".
    //     "Reply-To: ".$sender_email. "\n" .
    //     "X-Mailer: PHP/" . phpversion();
    //     $body = $sender_message;
    // }

     $sentMail = mail($recipient_email, $subject, $body, $headers);
    if($sentMail) //output success or failure messages
    {   
        $messageS = " Thank you for your email";
        header("Location: index.php?msgS={$messageS}");
    }
    else{
        $messageF =  "Could not send mail! Please check your PHP mail configuration.";
        header("Location: index.php?msgF={$messageF}");
    }
  }
?>
    <!-- Google Map -->
    <div class="container mt-60">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.421192611166!2d77.64735991405556!3d13.00882861758189!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae16d38d042a4b%3A0xdeda3580f41c9e5e!2sKwiqpick+Services+India+Private+Limited!5e0!3m2!1sen!2sin!4v1495529825933" width="100%" height="300" frameborder="0" style="border:0" id="google-map" allowfullscreen></iframe>
    </div>

    <!-- Contact -->
    <section class="section-wrap contact">
      <div class="container">
        <div class="row">

          <div class="col-md-8">
            <h5 class="uppercase mb-30">Send Us Message</h5>
            <form id="contact-form" action="#" name="contact-form">
              <div class="contact-name">
                <input name="cus_name" id="cus_name" type="text" placeholder="Name*">
              </div>
              <div class="contact-email">
                <input name="cus_mail" id="cus_mail" type="email" placeholder="E-mail*">
              </div>
              <div class="contact-subject">
                <input name="cus_subject" id="subject" type="text" placeholder="Subject">
              </div>                

              <textarea name="cus_contact" id="cus_contact" placeholder="Message" rows="9"></textarea>
              <input type="submit" class="btn btn-lg btn-color btn-submit" value="Submit" id="submit-message" name="sendEmail">
              <div id="msg" class="message"></div>
            </form>
          </div> <!-- end col -->

          <div class="col-md-4 mb-40 mt-mdm-40 contact-info">

            <div class="address-wrap">
              <h4 class="uppercase">Address</h4>
              <h6>Head Office</h6>
              <address class="address">#5 5th Cross Batamaloo Srinagar Jammu and Kashmir</address>
            </div>

            <h4 class="uppercase">Contact Info</h4>
            <ul class="contact-info-list">
              <li><span>Phone: </span>+ 91-9902312949</li>
              <li><span>Email: </span><a href="mailto:umerfat@gmail.com" class="sliding-link">umerfat@gmail.com</a></li>
              <li><span>Skype: </span><a href="#">Umer Hurrah</a></li>
            </ul>

            <h4 class="uppercase">Business Hours</h4>
            <p>Monday – Friday: 9am to 9 pm</p>
            <p>Saturday: 9am to 2 pm</p>
            <p>Sunday: closed</p>

          </div>          

        </div>
      </div>
    </section> <!-- end contact -->
<?php include "includes/footer.php"; ?>
