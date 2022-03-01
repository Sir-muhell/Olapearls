 <!-- ***** Footer Area Start ***** -->
  <footer class="footer-area section-padding-80-0">
    <div class="container">
      <div class="row justify-content-between">

        <!-- Single Footer Widget -->
        <div class=" col-sm-12 col-lg-4 col-xl-4 text-center" style="padding-bottom: 20px">
          <div class="single-footer-widget text-center">
            <!-- Logo -->
            <a href="" class="d-block"><img style="height: 50px; width: 50px" src="./img/core-img/llogo.png" alt=""></a>
          </div>
           <!-- Catagories Nav -->
            <nav>
              <div class="copywrite-text">
                <a href="./index">Home</a>&nbsp|&nbsp<a href="./blog">Blog</a>&nbsp|&nbsp<a href="./cat">Categories</a>&nbsp|&nbsp<a href="./about">About</a>&nbsp|&nbsp<a href="./contact">Contact</a>
                <h5  style=" color: #a6a6a6" ><small>&copy;  Olapearl's Hub <?php $date = date('Y'); echo $date;?></h5></small>
                </div>
            </nav><br><br>

          <!-- Trigger the modal with a button -->
          <button type="button" class="mona-btn" data-toggle="modal" data-target="#Modal">Subscribe To Newsletter</button>
        </div>


        <!-- Single Footer Widget -->
        <div class="col-lg-4 col-sm-12 col-xl-4 text-center">
          <div class="single-footer-widget">
            <div class="footer-content mb-30">
              <h6 style="font-size: 20px"><i class="icon_pin" style=" color: #017478"><br></i> Lagos, Nigeria.</h6>
              <h6 style="margin-top: 15px; font-size: 20px"><a href="tel: +2348094793295" style="color:#a6a6a6"><i style=" color: #017478" class="icon_phone"></i> +234 809 4793 295</a></h6>
              <h6 style="margin-top: 15px; padding-bottom: 15px; font-size: 20px"><a href="mailto: hello@olapearlshub.com" style="color: #a6a6a6"><i class="icon_mail" style=" color: #017478"></i> hello@olapearlshub.com</a></h6>
            </div>
          </div>
        </div>

        <!-- Single Footer Widget -->
        <div class="col-lg-4 col-sm-12 col-xl-4 text-center">
          <div class="single-footer-widget">
              <!-- Widget Title -->
            <h4 class="widget-title"  style=" color: #017478" >About Us</h4>
            <!-- Footer Content -->
            <div class="footer-content mb-30">
              <h4></h4>
              <h6>Olapearl's Hub is an institution where souls are saved and lives are blessed. It is a college where lives are pruned. The center of it all is Jesus...<a href="./about" style="color:red">Read more</a></h6>
            </div>
            
            <!-- Social Info -->
            <div class="footer-social-info" >
              <a href="https://www.facebook.com/olapearlshub/" class="facebook" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a>
              <a href="https://wa.me/2348110793719" class="whatsapp" data-toggle="tooltip" data-placement="top" title="Whatsapp"><i class="fa fa-whatsapp"></i></a>
              <a href="https://instagram.com/olapearlshub" class="instagram" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a>
              <a href="https://www.youtube.com/channel/UClg2b1Wnw8AMqoRWmGjJLmg" class="youtube" data-toggle="tooltip" data-placement="top" title="YouTube"><i class="fa fa-youtube-play"></i></a>
            </div>
          </div>
        </div>
        

      </div>
    </div>
    
    <div class="text-center copywrite-text"><h5><small>Developed by:<a target="_blank" href="https://wa.me/2348110793719" style="color:#017478 "> Aholu Samuel &nbsp </a>
    <!--Powered by:<a target="_blank" href=https://doteightinc.com> DotEightInc.</a>--></small></ph5></div>
  </footer>
  <!-- ***** Footer Area End ***** -->
  
  
  
 

<!-- ******* All JS ******* -->
    <!-- jQuery js -->
  <link src="js/jquery.js" rel="preload" as="script"></link>
  <link src="js/jquery.min.js" rel="preload" as="script"></linkt>
  <!-- Popper js -->
  <link src="js/popper.min.js" rel="preload" as="script"></link>
  <!-- Bootstrap js -->
  <link src="js/bootstrap.min.js" rel="preload" as="script"></link>
  <!-- All js -->
  <link src="js/mona.bundle.js" rel="preload" as="script"></link>
  <!-- Active js -->
  <link src="js/default-assets/active.js" rel="preload" as="script"></link>
  <link src="js/default-assets/classynav.js" rel="preload" as="script"></link>
  
  
  
  <!-- jQuery js -->
  <script src="js/jquery.js"></script>
  <script src="js/jquery.min.js"></script>
  <!-- Popper js -->
  <script src="js/popper.min.js"></script>
  <!-- Bootstrap js -->
  <script src="js/bootstrap.min.js"></script>
  <!-- All js -->
  <script src="js/mona.bundle.js"></script>
  <!-- Active js -->
  <script src="js/default-assets/active.js"></script>
  <script src="js/default-assets/classynav.js"></script>
  
<script>
  if ('serviceWorker' in navigator) {
    console.log("Will the service worker register?");
    navigator.serviceWorker.register('service-worker.js')
      .then(function(reg){
        console.log("Yes, it did.");
      }).catch(function(err) {
        console.log("No it didn't. This happened: ", err)
      });
  }
</script>
<script src="service-worker.js">
        // Service worker for Progressive Web App
    if ('serviceWorker' in navigator) {
        navigator.serviceWorker.register('service-worker.js', {
            scope: '.' // THIS IS REQUIRED FOR RUNNING A PROGRESSIVE WEB APP FROM A NON_ROOT PATH
        }).then(function(registration) {
            // Registration was successful
            console.log('ServiceWorker registration successful with scope: ', registration.scope);
        }, function(err) {
            // registration failed :(
            console.log('ServiceWorker registration failed: ', err);
        });
    }
</script>
<script type="text/javascript">
    (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "auaycx6zo5");
</script>
  
</body>

</html>