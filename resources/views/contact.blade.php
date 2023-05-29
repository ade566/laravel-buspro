<x-layout>

  <x-breadcrumb title="Contact Us" />

  <div class="contact-area default-padding">
    <div class="container">
      <div class="row">
        <div class="contact-items bg-contain" style="background-image: url(assets/img/map.svg);">
          <div class="col-md-4 address">
            <div class="address-items">
              <ul class="info">
                <li>
                  <h4>Office Location</h4>
                  <div class="icon"><i class="fas fa-map-marked-alt"></i></div> 
                  <span>22 Baker Street,<br> London, United Kingdom,<br> W1U 3BW</span>
                </li>
                <li>
                  <h4>Office Hours</h4>
                  <div class="icon"><i class="fas fa-clock"></i> </div>
                  <span>Mon - Fri 9:00 - 21:00<br>Saturday 10:00 - 16:00</span>
                </li>
                <li>
                  <h4>Phone</h4>
                  <div class="icon"><i class="fas fa-phone"></i></div> 
                  <span>+44-20-7328-4499 <br>+99-34-8878-9989</span>
                </li>
                <li>
                  <h4>Email</h4>
                  <div class="icon"><i class="fas fa-envelope-open"></i> </div>
                  <span>info@yourdomain.com<br>admin@yourdomain.com</span>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-8 contact-form">
            <h2>Let's lalk about your idea</h2>
            <p>
              Our next drew much you with rank. Tore many held age hold rose than our. She literature sentiments any contrasted. Set aware joy sense young now tears china shy. 
            </p>
            <form action="assets/mail/contact.php" method="POST" class="contact-form">
              <div class="col-md-12">
                <div class="row">
                  <div class="form-group">
                    <input class="form-control" id="name" name="name" placeholder="Name" type="text">
                    <span class="alert-error"></span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" id="email" name="email" placeholder="Email*" type="email">
                    <span class="alert-error"></span>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" id="phone" name="phone" placeholder="Phone" type="text">
                    <span class="alert-error"></span>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="row">
                  <div class="form-group comments">
                    <textarea class="form-control" id="comments" name="comments" placeholder="Tell Us About Project *"></textarea>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="row">
                  <button type="submit" name="submit" id="submit">
                    Send Message <i class="fa fa-paper-plane"></i>
                  </button>
                </div>
              </div>
              <!-- Alert Message -->
              <div class="col-md-12 alert-notification">
                <div id="message" class="alert-msg"></div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-layout>