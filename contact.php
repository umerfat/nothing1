<?php include "includes/header.php"; ?>

<?php include "includes/top-bar.php"; ?>

<?php include "includes/nav.php"; ?>

    <!-- Google Map -->
    <div class="container mt-60">
      <!--   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.421192611166!2d77.64735991405556!3d13.00882861758189!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae16d38d042a4b%3A0xdeda3580f41c9e5e!2sKwiqpick+Services+India+Private+Limited!5e0!3m2!1sen!2sin!4v1495529825933" width="100%" height="300" frameborder="0" style="border:0" id="google-map" allowfullscreen></iframe> -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31099.32074915486!2d77.6598575!3d13.009217699999999!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38e1855686e3c5ef%3A0x66244b7cc1e305c6!2sSrinagar!5e0!3m2!1sen!2sin!4v1502208501224" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>

    <!-- Contact -->
    <section class="section-wrap contact">
      <div class="container">
        <div class="row">

          <div class="col-md-8">
            <h5 class="uppercase mb-30">Send Us Message</h5>
            <form id="contact-form" action="#">

              <div class="contact-name">
                <input name="name" id="name" type="text" placeholder="Name*">
              </div>
              <div class="contact-email">
                <input name="mail" id="mail" type="email" placeholder="E-mail*">
              </div>
              <div class="contact-subject">
                <input name="subject" id="subject" type="text" placeholder="Subject">
              </div>                

              <textarea name="comment" id="comment" placeholder="Message" rows="9"></textarea>
              <input type="submit" class="btn btn-lg btn-color btn-submit" value="Submit" id="submit-message">
              <div id="msg" class="message"></div>
            </form>
          </div> <!-- end col -->

          <div class="col-md-4 mb-40 mt-mdm-40 contact-info">

            <div class="address-wrap">
              <h4 class="uppercase">Address</h4>
              <h6>Kashmir Store</h6>
              <address class="address">Jammu and Kashmir, Ladakh, Srinagar, Jammu.</address>
            </div>

            <h4 class="uppercase">Contact Info</h4>
            <ul class="contact-info-list">
              <li><span>Phone: </span>+ 91-9856235689</li>
              <li><span>Email: </span><a href="mailto:umer@gmaiul.com" class="sliding-link">umer@gmail.com</a></li>
              <li><span>Skype: </span><a href="#">umer</a></li>
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
