<?php include 'partials/dashboard_scripts.php'; ?>
 
<div class="container-fluid">
  <div class="d-flex align-items-baseline justify-content-between">
      <!-- Title -->
      <h1 class="h2 d-flex align-items-center justify-content-between">
          <span>
              My Packages
                              </span>
      </h1>
      <div class="m-0">
          <label class="form-label">Sort</label>
          <select class="form-select" wire:model="sortValue">
              <option>All</option>
              <option>Active</option>
              <option>Inactive</option>
              <option>Expired</option>
          </select>
      </div>
  </div>

    <div class="row mt-5">
      <div class="col-12">
         
            <!--  -->
             

    </div>
                      <div class="col-md-12">
                      <div class="card">
                        
                            <div class="text-center card-body">
                                <i class="bi bi-database-fill-exclamation" style="font-size: 50px"></i>
                                <p class="h3">
                                  You have not made any contributions at the moment
                                </p>
                                <a href="invest.php" class="px-3 btn btn-primary">Buy a Package</a>
                              </div>
                          



      
                     </div>
          </div>
    </div>
      </div>
</div>

       </div>

        <!-- Footer -->
        <footer class="mt-auto">
    <div class="container-fluid mt-4 mb-6 text-muted">
        <div class="row justify-content-between">
            <div class="col">
                All Rights Reserved © empirehedge.co 2023
            </div>

            <div class="col-auto">
           <div id="google_translate_element">
            </div>
              </div>
        </div> 
    </div>
</footer>

  <!-- JAVASCRIPT-->
  <!-- Theme JS -->

       <script src="assets/js/theme.bundle.js"></script>
          <script type="text/javascript" src="../translate.google.com/translate_a/elementa0d8.js?cb=googleTranslateElementInit">
        </script>

      <script type="text/javascript">
          function googleTranslateElementInit() {
              new google.translate.TranslateElement({
                  pageLanguage: 'en'
              }, 'google_translate_element');
          }
      </script>

      <script src="livewire/livewire6406.html?id=fe747446aa84856d8b66" data-turbo-eval="false" data-turbolinks-eval="false"></script><script data-turbo-eval="false" data-turbolinks-eval="false">window.livewire = new Livewire();window.Livewire = window.livewire;window.livewire_app_url = '';window.livewire_token = 'GybFujKl3iopgdJQTshgS28drpFHIG1g65gFSP7v';window.deferLoadingAlpine = function (callback) {window.addEventListener('livewire:load', function () {callback();});};let started = false;window.addEventListener('alpine:initializing', function () {if (! started) {window.livewire.start();started = true;}});document.addEventListener("DOMContentLoaded", function () {if (! started) {window.livewire.start();started = true;}});</script>
  <!-- <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script> -->
  <script src="assets/ext/dist/toastr.min.js"></script>
  <script type="text/javascript">
    var _smartsupp = _smartsupp || {};
    _smartsupp.key = '72b452f3afab8a71a5a98a43dc4bf4ae47fee7c5';
    window.smartsupp||(function(d) {
      var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
      s=d.getElementsByTagName('script')[0];c=d.createElement('script');
      c.type='text/javascript';c.charset='utf-8';c.async=true;
      c.src='../www.smartsuppchat.com/loaderd41d.js?';s.parentNode.insertBefore(c,s);
    })(document);
    </script>
    <noscript> Powered by <a href=%e2%80%9chttps_/www.smartsupp.html target=“_blank”>Smartsupp</a></noscript>
    </main> <!-- / main -->


</body>

<!-- Mirrored from www.empirehedge.co/my-investment by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Jun 2024 12:39:28 GMT -->
</html>
