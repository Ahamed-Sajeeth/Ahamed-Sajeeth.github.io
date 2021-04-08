  <?php
  include("header.php");
  ?>
  <!-- short -->
  <div class="using-border py-3">
    <div class="inner_breadcrumb  ml-4">
      <ul class="short_ls">
        <li>
          <a href="index.html">Home</a>
          <span>/ /</span>
        </li>
        <li>Contact</li>
      </ul>
    </div>
  </div>
  <!-- //short-->
  <!--contact -->
  <section class="contact py-lg-4 py-md-3 py-sm-3 py-3">
    <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
      <h5 class="top-title text-center mb-3">Contact</h5>
      <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Get in Touch</h3>
      <form action="#" method="post">
        <div class="row">
          <div class="form-group contact-forms col-lg-6 col-md-6 col-sm-6">
            <input type="text" class="form-control" placeholder="First Name" required="">
          </div>
          <div class="form-group contact-forms col-lg-6 col-md-6 col-sm-6">
            <input type="text" class="form-control" placeholder="Last Name" required="">
          </div>
          <div class="form-group contact-forms col-lg-6 col-md-6 col-sm-6">
            <input type="email" class="form-control" placeholder="Email" required="">
          </div>
          <div class="form-group contact-forms col-lg-6 col-md-6 col-sm-6">
            <input type="text" class="form-control" placeholder="Phone" required="">
          </div>
        </div>
        <div class="form-group contact-forms">
          <textarea class="form-control" placeholder="Message" rows="3" required=""></textarea>
        </div>
        <button type="submit" class="btn sent-butnn">Send</button>

      </form>
    </div>
  </section>
  <!--//contact  -->
  <!--contact-map -->
  <div class="address_mail_footer_grids">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3539.812628729253!2d153.014155!3d-27.4750921!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b915a0835840a2f%3A0xdd5e3f5c208dc0e1!2sMelbourne+St%2C+South+Brisbane+QLD+4101%2C+Australia!5e0!3m2!1sen!2sin!4v1492257477691"></iframe>
  </div>
  <!--//contact-map -->
  <?php
  include("footer.php");
  ?>