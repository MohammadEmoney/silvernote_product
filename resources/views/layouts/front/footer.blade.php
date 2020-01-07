<footer>
    <div class="container-fluid">
        <div class="col-md-12">
            <p>Copyright &copy; 2018 Corazon PSD

| Designed by Mohammad</p>
        </div>
    </div>
</footer>


  <!-- Modal button -->
<div class="popup-icon">
  <button id="modBtn" class="modal-btn"><img src="{{ asset('front/img/contact-icon.png') }}" alt="contact-icon"></button>
</div>

<!-- Modal -->
<div id="modal" class="modal">
  <!-- Modal Content -->
  <div class="modal-content">
    <!-- Modal Header -->
    <div class="modal-header">
      <h3 class="header-title">Say hello to <em>Highway</em></h3>
      <div class="close-btn"><img src="{{ asset('front/img/close_contact.png') }}" alt=""></div>
    </div>
    <!-- Modal Body -->
    <div class="modal-body">
      <div class="col-md-6 col-md-offset-3">
        <form id="contact" action="" method="post">
            <div class="row">
                <div class="col-md-12">
                  <fieldset>
                    <input name="name" type="text" class="form-control" id="name" placeholder="Your name..." required="">
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                    <input name="email" type="email" class="form-control" id="email" placeholder="Your email..." required="">
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                    <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your message..." required=""></textarea>
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                    <button type="submit" id="form-submit" class="btn">Send Message Now</button>
                  </fieldset>
                </div>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>



<section class="overlay-menu">
  <div class="container">
    <div class="row">
      <div class="main-menu">
          <ul>
              <li>
                  <a href="{{ route('home') }}">Home</a>
              </li>
              <li>
                  <a href="{{ route('home') }}">Blog</a>
              </li>
              <li>
                  <a href="grid.html">Categories</a>
              </li>
              <li>
                  <a href="about.html">About Us</a>
              </li>
              <li>
                  <a href="blog.html">Contact Us</a>
              </li>
              <li>
                  <a href="single-post.html">Privacy & Policy</a>
              </li>
          </ul>
          <p>We create awesome PSD for you.</p>
      </div>
    </div>
  </div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
{{-- <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script> --}}

<script src="{{ asset('front/js/vendor/bootstrap.min.js') }}"></script>
<script src="{{ asset('front/js/plugins.js') }}"></script>
<script src="{{ asset('front/vendors/lightslider/dist/js/lightslider.min.js') }}"></script>
<script src="{{ asset('front/js/main.js') }}"></script>
