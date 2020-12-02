<!DOCTYPE html>
 <html lang="zxx">

 <?php include 'includes/head.php';?>

 <body>
 <div class="headder-top">
      <!-- nav -->
      <?php include 'includes/navbar.php';?>
      <!-- //nav -->
    </div>

    <section class="contact py-lg-4 py-md-4 py-sm-3 py-3" id="contact">
    <div class="container" style="padding-top: 9rem;">
      <h3 class="title text-center mb-2">Get In Touch</h3>
      <div class="title-w3ls-text text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">
        <p>Drop us line, or give us a heads up if you're intrested in visiting us
        </p>
      </div>
      <div class="contact-form">
        <form action="back.php" method="post">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 form-group contact-forms">
              <input type="text" id="fname" name="fname" class="form-control" placeholder="First Name" required="">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 form-group contact-forms">
              <input type="text" id="lname" name="lname" class="form-control" placeholder="Last Name" required="">
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 form-group contact-forms">
              <input type="text" id="phone" name="phone" class="form-control" placeholder="Phone" required="">

            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 form-group contact-forms">
              <input type="email" id="mail" name="mail" class="form-control" placeholder="Email" required="">
            </div>
          </div>
          <div class="form-group contact-forms">
            <textarea class="form-control" id="message" name="message" placeholder="Message" required=""></textarea>
          </div>
          <button type="submit" id="contact" name="contact" class="btn sent-butnn btn-lg">Send</button>
        </form>
      </div>
    </div>
  </section>

  <?php include 'includes/footer.php';?>
  <!--//footer-copy-right -->

</body>

</html>