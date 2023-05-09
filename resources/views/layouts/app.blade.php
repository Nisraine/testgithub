



                                <!-- Modal -->
                                <div class="modal fade" id="search" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-body">
                                          <form action="{{route('filterRest')}}" method="POST">
                                            @csrf
                                            <div class="input-group mb-3">
                                              <input type="search" class="form-control" name="adresse" placeholder="type your address..." aria-label="search" aria-describedby="button-addon2">
                                              <button class="btn btn-outline-secondary" type="submit" id="button-addon2">ok</button>
                                            </div>
                                          </form>
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                                  <!-- Modal -->


                                  @include('visitors.client.edit')
                                    <!-- header ends  -->
                                    <div id="viewport">
                                        <div id="js-scroll-content">
                                            @yield('content')

<footer class="page-footer bg-image">
    <div class="container" style="background: rgba(0, 0, 0, 0)" >
      <div class="row mb-5">
        <div class="col-lg-3 py-3">
          <h3><label style="color: rgb(247, 109, 109);" >Fast</label> <label style="color: rgb(71, 235, 57);">Food</label></h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero amet, repellendus eius blanditiis in iusto
            eligendi iure.</p>
        </div>
        <div class="col-lg-3 py-3">
          <h5>Company</h5>
          <ul class="footer-menu">
            <li><a href="#">About Us</a></li>
            <li><a href="#">Career</a></li>
            <li><a href="#">Advertise</a></li>
            <li><a href="#">Terms of Service</a></li>
            <li><a href="#">Help & Support</a></li>
          </ul>
        </div>
        <div class="col-lg-3 py-4">
          <h5>Contact Us</h5>
          <p>ksar el kbir rue c33 n 4 ofppt delivery food</p>
          <ul class="footer-menu">

            <li> <a href="#" class="footer-link">+212 123456789</a></li>
            <li><a href="#" class="footer-link">ofpptgmail.com</a></li>
          </ul>
        </div>
        <div class="col-lg-3 py-3">
          <h5>Social Media</h5>
          <p>Follow Us.</p>
          <div class="social-media-button">
            <a href="#"><span class="mai-logo-facebook-f"></span></a>
            <a href="#"><span class="mai-logo-twitter"></span></a>
            <a href="#"><span class="mai-logo-google-plus-g"></span></a>
            <a href="#"><span class="mai-logo-instagram"></span></a>
            <a href="#"><span class="mai-logo-youtube"></span></a>
          </div>
        </div>
      </div>


    </div>
  </footer>


  <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/js/parallax.min.js') }}"></script>

  <script>
    $(document).ready(function(){
        // Handle click on paging links
        $('.tm-paging-link').click(function(e){
            e.preventDefault();

            var page = $(this).text().toLowerCase();
            $('.tm-gallery-page').addClass('hidden');
            $('#tm-gallery-page-' + page).removeClass('hidden');
            $('.tm-paging-link').removeClass('active');
            $(this).addClass("active");
        });
    });
</script>
<script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>

<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ asset('assets/js/google-maps.js') }}"></script>

<script src="{{ asset('assets/js/theme.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
