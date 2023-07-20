
<footer class="ftco-footer ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <!-- <h2 class="ftco-heading-2">About</h2> -->
              <!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the
                 blind texts.</p> -->
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="https://www.twitter.com/"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="https://www.facebook.com/Chandleerey.16"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="https://www.instagram.com/Chandlee Rey Belarmino"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Links</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Home</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>About</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Services</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Projects</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Contact</a></li>
              </ul>
            </div>
          </div>

          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">6329 Tubigon, Bohol, Philippines</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+63 951 2373 065</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">Chandleerey54@gmail.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 2023 | LeeChang <i class="icon-heart color-danger" aria-hidden="true"></i> <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="<?= base_url();?>asset/js/jquery.min.js"></script>
  <script src="<?= base_url();?>asset/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="<?= base_url();?>asset/js/popper.min.js"></script>
  <script src="<?= base_url();?>asset/js/bootstrap.min.js"></script>
  <script src="<?= base_url();?>asset/js/jquery.easing.1.3.js"></script>
  <script src="<?= base_url();?>asset/js/jquery.waypoints.min.js"></script>
  <script src="<?= base_url();?>asset/js/jquery.stellar.min.js"></script>
  <script src="<?= base_url();?>asset/js/owl.carousel.min.js"></script>
  <script src="<?= base_url();?>asset/js/jquery.magnific-popup.min.js"></script>
  <script src="<?= base_url();?>asset/js/aos.js"></script>
  <script src="<?= base_url();?>asset/js/jquery.animateNumber.min.js"></script>
  <script src="<?= base_url();?>asset/js/scrollax.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="<?= base_url();?>asset/js/main.js"></script>

<script>
  // Email JS function
window.onload = function() {
	document.getElementById('contact-form').addEventListener('submit',function(event) { event.preventDefault();
	
		console.log('heyyy');
	var templateParams = {
		name : document.getElementById('name').value,
		email : document.getElementById('email').value,
		subject : document.getElementById('subject').value,
		message : document.getElementById('message').value
	}
	emailjs.send('service_lss6for', 'template_jj9y288', templateParams, 'mm6ZuOkWRqi-mWMxz')
    .then(function(response) {

      //sweet alert

      swal({
             // title: "Sent Successfully!",
        icon: "success",
      });

       console.log('SUCCESS!', response.status, response.text);
    }, function(error) {

      swal({
             // title: "Sent Successfully!",
        icon: "error",
      });

       console.log('FAILED...', error);
    });

    document.getElementById('name').value = "";
  document.getElementById('email').value = "";
  document.getElementById('subject').value = "";
  document.getElementById('message').value = "";

	});



}

</script>
 
    
  </body>
</html>